<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Municipio;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class IntegrationController extends Controller
{
    /**
     * Lista os itens cadastrados no banco de dados.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function listItems()
    {
        $items = Item::all();

        return response()->json($items);
    }

    /**
     * Consulta os municípios do Rio de Janeiro usando a API do IBGE e salva no banco de dados.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function fetchRioMunicipios()
    {
        $client = new Client();
        $response = $client->get('https://servicodados.ibge.gov.br/api/v1/localidades/estados/33/municipios');

        $municipios = json_decode($response->getBody()->getContents(), true);

        foreach ($municipios as $municipio) {
            $data = [
                'ibge_id' => $municipio['id'],
                'ibge_name' => $municipio['nome'],
            ];

            Municipio::updateOrInsert($data);
        }

        return response()->json(['message' => 'Municípios do Rio de Janeiro salvos com sucesso.']);
    }
}

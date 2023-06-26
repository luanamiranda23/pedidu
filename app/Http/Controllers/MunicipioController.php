<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class MunicipioController extends Controller
{
    public function consultAndInsert()
    {
        $client = new Client();
        $response = $client->get('https://servicodados.ibge.gov.br/api/v1/localidades/estados/33/municipios');
        $municipios = json_decode($response->getBody()->getContents(), true);

        foreach ($municipios as $municipio) {
            $data = [
                'ibge_id' => $municipio['id'],
                'ibge_name' => $municipio['nome'],
            ];

            DB::table('municipios')->updateOrInsert($data);
        }

        return response()->json(['message' => 'Municipios created successfully.']);
    }
}

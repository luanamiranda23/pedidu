<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Item;
use App\Models\Municipio;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use App\Controllers\ItemController;


class ProductController extends Controller


{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }


    public function edit($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found!');
        }
    
        return view('products.edit', compact('product'));
    }



    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'status' => 'required',
            'quantity' => 'required|integer',
        ]);
    
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found!');
        }
    
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->status = $request->input('status');
        $product->quantity = $request->input('quantity');
        $product->save();
    
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }
    
    

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found!');
        }
        $product->delete();
    
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
    

}




    {
        // Outros métodos do controlador...
    
        // Método para listar os itens cadastrados no banco de dados
        {
             function listItems()
            {
                $items = Item::all();
        
                return response()->json($items);
            }
        }                
    {
        // Outros métodos do controlador...
    
        // Método para consultar os municípios do Rio de Janeiro e salvar no banco de dados
        {
             function fetchRioMunicipios()
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
     function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'status' => 'required',
            'quantity' => 'required|integer',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->status = $request->input('status');
        $product->quantity = $request->input('quantity');
        $product->save();

        

return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    // Outros métodos do controlador...
}


    }
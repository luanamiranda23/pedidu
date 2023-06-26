<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index()
    {
        $itens = DB::table('itens')->get();

        return response()->json($itens);
    }
}

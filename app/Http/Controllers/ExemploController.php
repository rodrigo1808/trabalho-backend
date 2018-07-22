<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Clients;

class ExemploController extends Controller
{
    public function createProduct(Request $request){
    	$newProduct = new Products;

    	$newProduct->nome = $request->nome;
    	$newProduct->preco = $request->preco;

    	$newProduct->save();
    }

    public function getProduct($id){
    	$product= Products::findorfail($id);
    	return response()->json([$product]);
    }

    public function attProduct(Request $request, $id){
    	$product = Products::findorfail($id);
    	if($request->nome){
    		$product->nome = $request->nome;
    	}
    	if($request->preco){
    		$product->preco = $request->preco;
    	}
    	$product->save();
    }

    public function deleteProduct($id){
    	Products::destroy($id);
    }

    public function createClient(Request $request){
    	$newClient = new Clients;

    	$newClient->nome = $request->nome;
    	$newClient->endereco = $request->endereco;
    	$newClient->telefone = $request->telefone;
    	$newClient->credito = $request->credito;

    	if($request->status){
    		$newClient->status = $request->status;
    	}

    	$newClient->save();
    }

    public function getClient($id){
    	$client= Clients::findorfail($id);
    	return response()->json([$client]);
    }

    public function attClient(Request $request, $id){
    	$client = Clients::findorfail($id);
    	if($request->nome){
    		$client->nome = $request->nome;
    	}
    	if($request->endereco){
    		$client->endereco = $request->endereco;
    	}
    	if($request->telefone){
    		$client->telefone = $request->telefone;
    	}
    	if($request->credito){
    		$client->credito = $request->credito;
    	}
    	if($request->status){
    		$client->status = $request->status;
    	}
    	$client->save();
    }

    public function deleteClient($id){
    	Clients::destroy($id);
    }
}

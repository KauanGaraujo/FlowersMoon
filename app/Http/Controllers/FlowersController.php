<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Flowers;

class FlowersController extends Controller
{
    public function index(){
        return view('index');
    }
    public function showFormFlowers(){
        return view('register');
    }
    public function storeFlowers(Request $request){
        $flowers = $request->validate([
            'nameFlowers' =>'string|required',
            'speciesFlowers' =>'string|required',
            'priceFlowers'=>'string|required',
            'quantityFlowers'=>'string|required',
        ]);
 
        Flowers::Create($flowers);
        return Redirect::route('index');
    }
    public function showManager(Request $request){
        $dados = Flowers::query();
        $dados->when($request->nameFlowers,function($query,$nome){
            $query->where('nameFlowers','like','%'.$nome.'%');
        });
        $dados = $dados->get();
        return view('management',['flowers' => $dados]);
    }
    public function destroy(Flowers $id){
        $id->delete();
        return Redirect::route('all-flowers');
    }
    public function update(Flowers $id, Request $request){
        $flowers = $request->validate([
            'nameFlowers' =>'string|required',
            'speciesFlowers' =>'string|required',
            'priceFlowers'=>'string|required',
            'quantityFlowers'=>'string|required',
        ]);
        $id->fill($flowers);
        $id->save();
        return Redirect::route('all-flowers');
    }
    public function show(Flowers $id){
        return view('change',['flowers'=>$id]);
    }
}
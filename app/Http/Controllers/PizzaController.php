<?php
 namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    //
    public function index()
    {
        // $pizzas = Pizza::all();
        $pizzas = Pizza::orderBy('name')->get();


        // $pizzas = [
        // ['type' => 'hawaiian','base'=> 'cheesy crust'],
        // ['type' => 'volcano','base'=> 'garlic crust'],
        // ['type' => 'veg supreme','base'=> 'thin & crispy']
        // ];
        return view('pizzas',[
            'pizzas' => $pizzas,
             ]);
    }
    public function show($id)
    {
        return view('details',['id'=> $id]);
    }
}

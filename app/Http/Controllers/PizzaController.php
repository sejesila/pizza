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
        return view('pizzas.index',[
            'pizzas' => $pizzas,
             ]);
    }
    public function show($id)
    {
        $pizza = Pizza::findorFail($id);

        return view('pizzas.show',['pizza'=>$pizza]);
    }
    public function create()
    {
        return view('pizzas.create');
    }
    public function store()
    {
        $pizza = new Pizza();
        
        $pizza -> name = request('name');
        $pizza -> type = request('type');
        $pizza -> base = request('base');
        $pizza -> toppings = request('toppings');

        // error_log($pizza);
         
        $pizza->save();
        return redirect('/')->with ('msg','Thanks for your order');
    }
    public function destroy($id){
        $pizza = Pizza::findorFail($id);
        $pizza->delete();
        return redirect('/pizzas');


    }
}

@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
         @csrf
        <label for="name"> Your Name: </label>
        <input type="text" id="name" name="name">
        <label for="type"> Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margarita"> Margarita</option>
            <option value="hawaiian"> Hawaiian</option>
            <option value="veg supreme"> Veg Supreme</option>
            <option value="volcano"> Volcano</option>
        </select>
        <label for="base"> Choose pizza base:</label>
        <select name="base" id="base">
            <option value="cheesy crust"> cheesy crust</option>
            <option value="garlic crust"> garlic crust</option>
            <option value="thin & cripsy"> Thin & Cripsy</option>
            <option value="thick"> Thick</option>
        </select>
        <fieldset>
            <label> Extra Toppings:</label>
            <input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms<br/>
            <input type="checkbox" name="toppings[]" value="pepper"> Pepper<br/>
            <input type="checkbox" name="toppings[]" value="garic"> Garlic<br/>
            <input type="checkbox" name="toppings[]" value="olives"> Olives<br/>
        </fieldset>
        <input type="submit" value="Order Pizza">

    </form>
</div>
@endsection
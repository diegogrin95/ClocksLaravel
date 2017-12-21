<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

// index	
    public function index() {
	$products = \App\Product::all();

	$variables = [
		"products" => $products,
	];

	return view('products.index', $variables);
	}

// show

	public function show($id) {
	$product = \App\Product::find($id);

	$variables = [
		"product" => $product,
		"category" => $product->category,
		"properties" => $product->properties
	];

	return view('products.show', $variables);
	}

// create

	public function create() {
	$categories = \App\Category::all();
	$properties = \App\Property::all();

	$variables = [
		"categories" => $categories,
		"properties" => $properties,
	];

	return view('products.create', $variables);
	}

// store

	public function store(Request $request) {
	$input = $request->except('_token');
	$rules = [
		"name" => "required|unique:products",
		"cost" => "required|numeric",
		"profit_margin" => "required|numeric"
	];

	$messages = [
		"required" => "El :attribute es requerido!",
		"unique" => "El :attribute tiene que ser único!",
		"numeric" => "El :attribute tiene que ser numérico!"
	];


	$validator = Validator::make($input, $rules, $messages);

	$product = \App\Product::create([
		'name' => $request->input('name'),
		'cost' => $request->input('cost'),
		'profit_margin' => $request->input('profit_margin')
	]);

	$category = \App\Category::find($request->input('category'));

	$product->properties()->sync($request->input('properties'));
	$product->category()->associate($category);
	$product->save();

	return redirect('/productos');
	}
}

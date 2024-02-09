<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

        $name = "";

        $sale = [
            "Fresh Coconuts",
            "Coconut Oil",
            "Briket",
            "Kopra",
        ];

        return view('home', compact('name', 'sale'));
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id ){

    }

    public function destroy($id){

    }

    
    public function about()
    {
        return view('about');
    }
    public function products()
    {
        return view('product');
    }
    public function address()
    {
        return view('maps');
    }
    public function socials()
    {
        return view('sosmed');
    }
}

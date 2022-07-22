<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    // a lógica do BD está incluída apenas para teste das camadas Controller e View
    public function index()
    {
        // não é uma boa prática incluir a lógica do BD no Controller
        $properties = DB::select("SELECT * FROM properties");

        // envia os dados da variável $properties para VIEW
        return view('property.index')->with('properties', $properties);
    }

    public function show($url)
    {
        $property = DB::select("SELECT * FROM properties WHERE url = ?", [$url]);

        if (!empty($property)){
            return view('property.show')->with('property', $property);
        } else {
            return redirect()->view('property.index');
        }
    }

    public function create()
    {
        return view('property.create');
    }

    public function store(Request $request)
    {
        $url = $this->setUrl($request->title);
        $property = [
            $request->title,
            $request->description,
            $request->rental_price,
            $request->sale_price,
            $url
        ];

        DB::insert("INSERT INTO properties (title, description, rental_price, sale_price, url) VALUES (?, ?, ?, ?, ?)", $property);

        return redirect()->route('property.index');
    }

    public function edit($url)
    {
        $property = DB::select("SELECT * FROM properties WHERE url = ?", [$url]);

        if (!empty($property)){
            return view('property.edit')->with('property', $property);
        } else {
            return redirect()->route('property.index');
        }
    }

    public function update(Request $request, $id)
    {
        $url = $this->setUrl($request->title);
        $title = $request->title;
        $description = $request->description;
        $rental = $request->rental_price;
        $sale = $request->sale_price;
        // $url = $request->url;

        DB::update('UPDATE properties SET title = ?, description = ?, rental_price = ?, sale_price = ?, url = ? WHERE id = ?', [$title, $description, $rental, $sale, $url, $id]);

        return redirect()->route('property.index');
    }

    public function destroy($url)
    {
        $property = DB::select("SELECT * FROM properties WHERE url = ?", [$url]);

        if (!empty($property)){
            DB::delete("DELETE FROM properties WHERE url = ?", [$url]);
        }

        return redirect()->route('property.index');
    }

    private function setUrl($title)
    {
        $slug = Str::slug($title);

        $properties = DB::select("SELECT * FROM properties");

        $t = 0;

        foreach ($properties as $property){
            if (Str::slug($property->title) === $slug){
                $t++;
            }
        }

        if ($t > 0){
            $slug = $slug . '-' . $t;
        }

        return $slug;
    }
}

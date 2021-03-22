<?php

namespace App\Http\Controllers;

use App\Beer;
use Illuminate\Http\Request;


class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();
        return view('Beers.beers', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'alchool_graduation' => 'required|between:0,9999.99|numeric',
            'fermentation_type' => 'required|max:20',
            'color' => 'required|max:20',
            'image' => 'required|url',
            'description' => 'max:10000',

            ]);


        $data = $request -> all();


        $beer= new Beer();
        $beer->fill($data);
        $beer->save();


        $newBeer = Beer::orderBy('id', 'desc')->first();
        return redirect()->route('beers.show', $newBeer);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $beer
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
        return view('Beers.beer', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('Beers.edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $data = $request -> all();
        $beer -> update($data);

        return redirect()->route('beers.show', compact('beer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        $beer -> delete();

        return redirect()->route('beers.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = Film::paginate(10);
        return response()->json([
            'data' => $film
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $film = Film::create([
            'judul' => $request->judul,
            'tahun' => $request->tahun,
            'genre' => $request->genre,
            'negara' => $request->negara,
        ]);
        return response()->json([
            'data'=>$film
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return response()->json([
            'data' => $film
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        $film->judul = $request->judul;
        $film->tahun = $request->tahun;
        $film->genre = $request->genre;
        $film->negara = $request->negara;
        $film->save();

        return response()->json([
            'data' => $film
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return response()->json([
            'message' => 'film deletes'
        ], 204);
    }
}

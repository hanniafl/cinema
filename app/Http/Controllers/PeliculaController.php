<?php

namespace App\Http\Controllers;

use App\Model\Comentario;
use App\Models\Pelicula;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('pelicula.peliculaIndex', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelicula.peliculaCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pelicula = new Pelicula();
        //$pelicula->comentario_id= auth()->comentario()->id;

        $pelicula->titulo = $request->titulo;
        $pelicula->director = $request->director;
        $pelicula->valoracion = $request->valoracion;
        $pelicula->resena = $request->resena;
        $pelicula->fecha_visto = $request->fecha_visto;
        $pelicula->comentarios_id = $request->comentarios_id;
        $pelicula->save();

        return redirect()->route('peliculas.index', $pelicula->id)->with('success', 'Pelicula creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelicula $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(Pelicula $pelicula)
    {
        return view('pelicula.peliculaShow', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula $pelicula)
    {
        return view('pelicula.peliculaEdit', compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        $data = $request->only('texto', 'fecha_publicacion', 'peliculaId', 'usuarioID');
    
        $pelicula->update($data);
        return redirect()->route('peliculas.index')->with('sucess', 'Pelicula actualizada correctamente');

        //Pelicula::where('id', $pelicula->id)->update($request->except('_token', '_method'));

       // return redirect()->route('peliculas.index')->with('sucess', 'Pelicula actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelicula  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
        return redirect()->route('peliculas.index');
    }
}

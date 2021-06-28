<?php

namespace App\Http\Controllers;

use App\Models\Comentario;

use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

class ComentarioController extends Controller
{
    private $rules;

    public function __construct()
    {
        $this->rules = [
            'texto' => ['required', 'string', 'min:5', 'max:255'],
            'fecha_publicacion' => 'required|string|min:5|max:255',
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentarios = Comentario::all();
        return view('comentario.comentarioIndex', compact('comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comentario.comentarioCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        Comentario::create($request->all());
        //return redirect()->route('comentario.index');
        $request->validate($this->rules + ['peliculaId' => ['required', 'integer', 'unique:App\Models\Comentario,peliculaId']] + ['usuarioID' => ['required', 'integer', 'unique:App\Models\Comentario,usuarioID']]);
        Comentario::create($request->all());
        return redirect()->route('comentario.index')->with('success', 'Comentario agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
        return view('comentario.comentarioShow', compact('comentario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        return view('comentario.comentarioEdit', compact('comentario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentario $comentario)
    {
        $request->validate($this->rules + ['peliculaId' => ['required', 'integer', Rule::unique('comentarios')->ignore($comentario->id)]] 
        + ['usuarioID' => ['required', 'integer', Rule::unique('comentarios')->ignore($comentario->id)]]);

        Comentario::where('id', $comentario->id)->update($request->except('_token', '_method'));

        
        return redirect()->route('comentario.index')->with('sucess', 'Comentario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {
        $comentario->delete();
        
        return back()->with('succes', 'Comentario eliminado correctamente');
    }
}

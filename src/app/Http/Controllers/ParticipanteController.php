<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $participantes = Participante::orderBy('nome')->get();

        return view(
            'proponente.proponente-listar',
            ['participantes' => $participantes]

        );
    }

    public function vendedor() {
        $participantes = Participante::orderBy('nome')->get();

        return view(
            'proponente.vendedor-listar',
            ['participantes' => $participantes]

        );
    }

    public function propostasnaopreenchidas() {
        $participantes = Participante::orderBy('nome')->get();

        return view(
            'proponente.proposta-nao-preenchida-listar',
            ['participantes' => $participantes]

        );
    }

    public function propostasexpiradas() {
        $participantes = Participante::orderBy('nome')->get();

        return view(
            'proponente.proposta-expirada-listar',
            ['participantes' => $participantes]

        );
    }

    public function propostasremetidas() {
        $participantes = Participante::orderBy('nome')->get();

        return view(
            'proponente.proposta-remetida-listar',
            ['participantes' => $participantes]

        );
    }


    public function propostasemitir() {
        $participantes = Participante::orderBy('nome')->get();

        return view(
            'proponente.proposta-emitir-listar',
            ['participantes' => $participantes]

        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participante  $participante
     * @return \Illuminate\Http\Response
     */
    public function show(Participante $participante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participante  $participante
     * @return \Illuminate\Http\Response
     */
    public function edit(Participante $participante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participante  $participante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participante $participante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participante  $participante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participante $participante)
    {
        //
    }
}

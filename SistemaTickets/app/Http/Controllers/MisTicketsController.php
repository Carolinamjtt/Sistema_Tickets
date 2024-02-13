<?php

namespace App\Http\Controllers;

use App\Models\MisTickets;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MisTicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $task = MisTickets::all();
        return $task;
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mis_tickets = new MisTickets();
        $mis_tickets->name = $request->name;
        $mis_tickets->description = $request->description;
        $mis_tickets->content = $request->content;

        $mis_tickets->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(MisTickets $misTickets)
    {
        $mis_tickets = MisTickets::findOrFail($misTickets->id);
        return $mis_tickets;
        //Esta función devolverá los datos de una tarea que hayamos seleccionado para cargar el formulario con sus datos
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MisTickets $misTickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MisTickets $misTickets)
    {
        $mis_tickets = MisTickets::findOrFail($request->id);

        $mis_tickets->name = $request->name;
        $mis_tickets->description = $request->description;
        $mis_tickets->content = $request->content;

        $mis_tickets->save();

        return $mis_tickets;
        //Esta función actualizará la tarea que hayamos seleccionado
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MisTickets $misTickets)
    {
        $mis_tickets = MisTickets::destroy($misTickets->id);
        return $mis_tickets;
    }
}

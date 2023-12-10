<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contactos=Contacto::all();
        return view('contacto.index', compact('contactos'));
    }

    public function pdf()
    {
        $contactos=Contacto::all();
        $pdf = Pdf::loadView('contacto.pdf', compact('contactos'));
        // return $pdf->download('ReporteContactos.pdf');
        return $pdf->stream();
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
        //
        $contactos = new Contacto;
        $contactos->nombre=$request->input('nombre');
        $contactos->telefono=$request->input('telefono');
        $contactos->direccion=$request->input('direccion');
        $contactos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $contactos = Contacto::find($id);
        return view('contacto.modal-info', compact('contactos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $contactos = Contacto::find($id);
        $contactos->nombre=$request->input('nombre');
        $contactos->telefono=$request->input('telefono');
        $contactos->direccion=$request->input('direccion');
        $contactos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $contactos = Contacto::find($id);
        $contactos->delete();
        return redirect()->back();
    }
}

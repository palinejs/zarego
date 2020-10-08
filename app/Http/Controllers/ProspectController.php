<?php

namespace App\Http\Controllers;

use App\Mail\Welcome as WelcomeEmail;
use App\Models\Prospect;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ProspectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //code
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prospect');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:prospects',
        ], [
            'required' => 'Este campo es requerido',
            'email' => 'El email debe ser una dirección válida',
            'unique' => 'Este email ya fue registrado',
        ]);


        if($validator->fails()){
            if(Arr::has($validator->failed(), 'email.Unique')){
                return back()->with('success', 'Ya se encontraba registrado con anterioridad.');
            }
            return back()->withInput()->withErrors($validator);
        }

        Prospect::create($request->all());

        Mail::to($request->get('email'), $request->get('name').' '.$request->get('lastname'))
            ->send(new WelcomeEmail($request->get('name').' '.$request->get('lastname')));
        
    
        return back()->with('success', 'Siga las instrucciones del mail enviado para instalar nuestra app.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function show(Prospect $prospect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function edit(Prospect $prospect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prospect $prospect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prospect $prospect)
    {
        //
    }
}

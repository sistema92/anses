<?php

namespace App\Http\Controllers;

use App\anses;
use Illuminate\Http\Request;


class AnsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return view('anses');
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
        $this->validate($request,['dni'=>'required|numeric']); //validar el campo de solo numero

        $datos= new Anses;
        $datos->dni=$request->dni;

        $existencia=anses::select('dni')->where('dni','=',$request->dni)->get();
        if(count($existencia)>=1){
           // return json_encode('Existe Registro');
            return view('save',compact('existencia'));
        }else{
            $datos->save();
            return redirect('anses');
        }


        $datos=request()->except('_token');
        anses::insert($datos);
       

        return  view('save');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\anses  $anses
     * @return \Illuminate\Http\Response
     */
    public function show(anses $anses)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\anses  $anses
     * @return \Illuminate\Http\Response
     */
    public function edit(anses $anses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\anses  $anses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anses $anses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\anses  $anses
     * @return \Illuminate\Http\Response
     */
    public function destroy(anses $anses)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\empleadoRolTable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class EmpleadoRolTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

      if ($request->area_reg=="no_select")
      {
        return redirect('/')->withErrors('Registro Invalido, Hay campos vacios.');
      }
      else
      {
        $this->validate($request,
        [
         'name_reg' => 'required|max:50',
         'email_reg' => 'required|max:50',
         'descripcion_exp' => 'min:4',
         'sexo' => 'required'
        ]);

          $empleado_nuevo = new User();
          $empleado_nuevo->name = $request->name_reg;
          $empleado_nuevo->email = $request->email_reg;
          $empleado_nuevo->sexo = $request->sexo;
          $empleado_nuevo->area = $request->area_reg;
          $empleado_nuevo->botelin = $request->reg_boletin;
          $empleado_nuevo->descripcion = $request->descripcion_exp;
          $empleado_nuevo->save();

          $rol_nuevo= new empleadoRolTable();
          $rol_nuevo->user_email = $request->email_reg;
          $rol_nuevo->name_rol = $request->rol;
          $rol_nuevo->save();
          return redirect('/')->withErrors('Empleado Registrado.');
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleadoRolTable  $empleadoRolTable
     * @return \Illuminate\Http\Response
     */
    public function show(empleadoRolTable $empleadoRolTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleadoRolTable  $empleadoRolTable
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $empleado_edit = User::where('email', $id)->get();
      return View('editar_reg',compact('empleado_edit'))
      ->extends('layouts.app')
      ->section('editar_registro');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleadoRolTable  $empleadoRolTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

      $editar_info = User::where('email', $request->id_reg)->update([
        'name' => $request->name_reg,
        'email' => $request->email_reg,
        'sexo' => $request->sexo,
        'area' => $request->area_edit
      ]);
      return redirect('/')->withErrors('Empleado Actualizado.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleadoRolTable  $empleadoRolTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $this->validate($request,
      [
       'email_user' => 'required'
      ]);

      $del_rol = empleadoRolTable::where('user_email', $request->email_user)->delete();
      $del_user = User::where('email', $request->email_user)->delete();
      return redirect('/')->withErrors('Empleado Eliminado.');

    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use App\Models\empleadoRolTable;


class Wellcome extends Component
{
  use WithPagination;

    protected $queryString= [
      'perPage' => ['except' =>'12']
    ];


    public $perPage='12';

    public function render()
    {
      $empleados = DB::table('users')
            ->select(
              'users.name as name_user',
              'users.email as email_user',
              'users.sexo as sexo_user',
              'users.area as area_user',
              'users.botelin as botelin_user'
              )
            ->paginate($this->perPage);
      return View('livewire.wellcome',compact('empleados'))
      ->extends('layouts.app')
      ->section('content');
    }
}

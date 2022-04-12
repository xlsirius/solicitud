<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class Wellcome extends Component
{
  use WithPagination;

    protected $queryString= [
      'buscar' => ['except' => ''],
      'perPage' => ['except' =>'12']
    ];

    public $buscar='';

    public $perPage='12';

    public function render()
    {
      
      $productos = DB::table('productos')
            ->join('users', 'users.id', '=', 'productos.user_id')
            ->select(
              'users.id as id_vendedor',
              'users.name as name_vendedor',
              'users.email as email_vendedor',
              'users.profile_photo_path as foto_vendedor',
              'productos.id',
              'productos.name',
              'productos.estado',
              'productos.cantida',
              'productos.description'
              )
      ->where('productos.name','LIKE',"%{$this->buscar}%")
      ->paginate($this->perPage);

      return View('livewire.wellcome',compact('productos'))
      ->extends('layouts.app')
      ->section('content');
    }
}

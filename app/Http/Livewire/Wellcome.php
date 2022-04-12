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
      return View('livewire.wellcome')
      ->extends('layouts.app')
      ->section('content');
    }
}

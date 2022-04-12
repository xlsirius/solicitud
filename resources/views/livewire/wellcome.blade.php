<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Soliciutd</title>
    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
@include('modales')
  <br><br>
  <div class="container">

    <div class="container">
        <div class="row row-cols-3">
            <div class="col"></div>
            <div class="col">
              <h2 class="text-white">Lista de empleados</h2>
              <br><br>
            </div>
        </div>
        <div class="col">
            @if ($errors->any())
            <div class="alert alert-danger">
              Noticia:<br>
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div>
            @endif
          </div>
        </div>
        <div class="col-2">
          <div class="form-floating">
            <button type="button" name="btn_reg" class="btn btn-primary btn-lg" onclick="verModal_Reg()">Nuevo Empleado</button>
          </div>
        </div>
        <br>
              <table class="table table-striped">
            <thead>
              <tr>
                <th class="text-white" scope="col">Nombre completo</th>
                <th class="text-white" scope="col">Correo</th>
                <th class="text-white" scope="col">Sexo</th>
                <th class="text-white" scope="col">Area</th>
                <th class="text-white" scope="col">Boletin</th>
                <th colspan="2" class="text-white" scope="col"><center>Accion</center></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($empleados as $empleado)
              <tr>
                <td><label class="text-white"> {{ $empleado->name_user }}</label></td>
                <td><label class="text-white"> {{ $empleado->email_user }}</label></td>
                <td><label class="text-white"> {{ $empleado->sexo_user }}</label></td>
                <td><label class="text-white"> {{ $empleado->area_user }}</label></td>
               <td><label class="text-white"> {{ $empleado->botelin_user }}</label></td>
               <th class="text-white" scope="col">
                 <th class="text-white" scope="col">
                   <form id="frm_elimar" name="frm_elimar" action="{{ route('del_empleado') }}" method="POST">
                     @csrf
                     {{ method_field('DELETE') }}
                     <input type="hidden" name="email_user" id="email_user" value="{{ $empleado->email_user }}">
                     <input type="button" onclick="modal_confirmar()" class="btn btn-danger" value="Eliminar">
                   </form>
                 </th>
                 <th class="text-white" scope="col">
                   <form  onclick="modal_edit()" id="frm_edit" name="frm_edit" action="{{ route('view_empleado',$empleado->email_user ) }}" method="post">
                     @csrf
                     <input type="hidden" name="email_user_2" id="email_user_2" value="{{ $empleado->email_user }}">
                     <input type="button" class="btn btn-warning text-white"  onclick="modal_edit()" value="Editar">
                   </form>
                 </th>
               </th>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <br><br>
        <div class="container">
          @if($empleados->count())
            {{$empleados->links()}}
          @else
          <div class="alert alert-danger" role="alert">
            <label>No hay registros con los criterios de su busqueda</label>
          </div>
        @endif
        </div>
    </div>
    @yield('editar_registro')
</body>
</html>

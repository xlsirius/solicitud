<!-- Bootstrap CSS -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body class="container" style="background-color: #1a202c;">
<script type="text/javascript">
  function volver()
  {
  window.location.assign("/");
  }
</script>
<center><br><br><h2 class="text-white">Editar Empleado</h2><br></center>
@foreach($empleado_edit as $empleado)
<form action="{{ route('update_empleado') }}" method="POST">
  @csrf
  {{ method_field('PUT') }}
  <input type="hidden" name="id_reg" id="id_reg" value="{{ $empleado->email}}">
    <div class="form-floating">
        <input type="text" class="form-control" id="name_reg" placeholder="Nombre Completo" name="name_reg" value="{{ $empleado->name }}" required>
        <label for="name_reg">Nombre Completo</label>
        <br>
    </div>
    <div class="form-floating">
        <input type="email" class="form-control" id="email_reg" placeholder="Nombre Completo" name="email_reg" value="{{ $empleado->email }}" required>
        <label for="email_reg">Email</label>
        <br>
    </div>
        <input class="form-check-input" type="radio" name="sexo" value="sexo_masculino" @if($empleado->sexo=="sexo_masculino") checked="checked" @endif id="sexo_edit"><label class="text-white">Masculino</label>
        <br><br>
        <input class="form-check-input" type="radio" name="sexo" value="sexo_femenino" @if($empleado->sexo=="sexo_femenino") checked="checked" @endif id="sexo_edit"><label class="text-white">Femelino</label>
        <br><br>
    <div class="form-floating">
        <select class="form-select" id="area_edit" name="area_edit" aria-label="Floating label select example">
            <option @if($empleado->area=="no_select") selected @endif value="no_select">Seleccione</option>
            <option @if($empleado->area=="Administrativa y Financiera") selected @endif value="Administrativa y Financiera">Administrativa y Financiera</option>
            <option @if($empleado->area=="Ingeniería") selected @endif value="Ingeniería">Ingeniería</option>
            <option @if($empleado->area=="Desarrollo de Negocio") selected @endif value="Desarrollo de Negocio">Desarrollo de Negocio</option>
            <option @if($empleado->area=="Proyectos") selected @endif value="Proyectos">Proyectos</option>
            <option @if($empleado->area=="Servicios") selected @endif value="Servicios">Servicios</option>
            <option @if($empleado->area=="Calidad") selected @endif value="Calidad">Calidad</option>
        </select>
        <label for="area_edit">Area</label>
        <br>
    </div>
    <center>
      <input class="btn btn-danger text-white" type="button"  onclick="volver()"name="actualizar" value="Volver">
      <input class="btn btn-warning text-white" type="submit" name="actualizar" value="Actualizar Datos">
  </center>
</form>
@endforeach
</body>

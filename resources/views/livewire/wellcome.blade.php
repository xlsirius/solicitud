<!DOCTYPE html>
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
  <br><br>
    <div class="container">
        <div class="row row-cols-3">
            <div class="col"></div>
            <div class="col">
              <h2>Lista de empleados</h2>
              <br><br>
            </div>
            <div class="col"></div>
        </div>
        <div class="row row-cols-2">
          <div class="col-8">
            <div class="form-floating mb-3">
              <input type="text" wire:model="buscar" class="form-control" id="floatingInput" placeholder="buscar">
              <label for="floatingInput">Buscar producto</label>
            </div>
          </div>
          <div class="col-4">
            <div class="form-floating">
              <select class="form-select" id="floatingSelect" aria-label="Floating label select example" wire:model="perPage">
                <option value="12">12</option>
                  @if (($productos->count())>=12)
                    <option value="16">16</option>
                  @else
                  @endif
              </select>
              <label for="floatingSelect">Ver por</label>
          </div>
          </div>
        </div>
        <div class="row row-cols-6">

            <div class="col">
                Nombre completo
            </div>
            <div class="col">
                Correo
            </div>
            <div class="col">
                Sexo
            </div>
            <div class="col">
                Area
            </div>
            <div class="col">
                Boletin
            </div>
            <div class="col">
                Opciones
            </div>

        </div>
        @if($productos->count())
          {{$productos->links()}}
        @else
        <br><br>
        <div class="alert alert-danger" role="alert">
          <label>No hay registros con los criterios de su busqueda</label>
        </div>
        @endif
    </div>

</body>

</html>

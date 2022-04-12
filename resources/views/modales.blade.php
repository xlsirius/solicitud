<script type="text/javascript">

$(document).ready(function() {
    var current = 1,
        current_step, next_step, steps;
    steps = $("fieldset").length;
    $(".next").click(function() {
        current_step = $(this).parent();
        next_step = $(this).parent().next();
        next_step.show();
        current_step.hide();
    });
    $(".previous").click(function() {
        current_step = $(this).parent();
        next_step = $(this).parent().prev();
        next_step.show();
        current_step.hide();
    });



});

  function verModal_Reg()
  {
      $('#staticBackdrop_1').modal('show');
  }

  function validar_registro()
  {

    var  name_reg= document.getElementById("name_reg").value;
    var  email_reg= document.getElementById("email_reg").value;
    var  sexo= document.getElementById("sexo").checked;
    var  area_reg= document.getElementById("area_reg").value;
    var  descripcion_exp= document.getElementById("descripcion_exp").value;
    var  rol= document.getElementById("rol").checked;
    var  boletin= document.getElementById("boletin").checked;
    var  reg_boletin= document.getElementById("reg_boletin").value;


    if (name_reg.length>0 & email_reg.length>0 & area_reg!="no_select" & descripcion_exp.length>0 )
    {
        console.log("Listo para guardar registro");
        if (boletin)
        {
            $("#reg_boletin").val('Si');
        }
        else
        {
            $("#reg_boletin").val('no');
        }

    }
    else
    {
      console.log("Campos vacios");
      event.preventDefault();
      $('#staticBackdrop_2').modal('show');
    }

  }

  function modal_confirmar()
  {
    event.preventDefault();
    $('#staticBackdrop_3').modal('show');

  }
  function del()
  {
    $('#staticBackdrop_3').modal('hide');
    document.getElementById('frm_elimar').submit();
  }

  function modal_edit()
  {
    event.preventDefault();
    $('#staticBackdrop_5').modal('show');
  }

  function edit()
  {
    $('#staticBackdrop_5').modal('hide');
    document.getElementById('frm_edit').submit();
  }

</script>
<!-- modal.REGISTRO EMPLERADO -->
<div class="modal fade" id="staticBackdrop_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Solicitud</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color: #1a202c;">
                <div class="container">
                    <!-- formulario_dividido. -->
                    <form style="fieldset:not(:first-of-type) {display: none;}" id="regiration_form" novalidate action="{{ route('reg_empleado') }}" method="POST">
                        @csrf
                        <fieldset>
                            <h2 class="text-white">Paso 1</h2>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name_reg" placeholder="Nombre Completo" name="name_reg" required>
                                <label for="name_reg">Nombre Completo</label>
                                <br>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email_reg" placeholder="Email" name="email_reg" required>
                                <label for="email_reg">Email</label>
                                <br>
                            </div>
                            <b class="text-white">Sexo: </b>
                            <br><br>
                            <input class="form-check-input" type="radio" name="sexo" value="sexo_masculino" id="sexo"><label class="text-white">Masculino</label>
                            <br>
                            <input class="form-check-input" type="radio" name="sexo" value="sexo_femenino " id="sexo"><label class="text-white">Femelino</label>
                            <br><br>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <input type="button" class="next btn btn-primary" value="Siguiente" />
                        </fieldset>
                        <fieldset>
                            <h2 class="text-white"> Paso 2</h2>
                            <div class="form-floating">
                                <select class="form-select" id="area_reg" name="area_reg" aria-label="Floating label select example">
                                    <option selected value="no_select">Seleccione</option>
                                    <option value="Administrativa y Financiera">Administrativa y Financiera</option>
                                    <option value="Ingeniería">Ingeniería</option>
                                    <option value="Desarrollo de Negocio">Desarrollo de Negocio</option>
                                    <option value="Proyectos">Proyectos</option>
                                    <option value="Servicios">Servicios</option>
                                    <option value="Calidad">Calidad</option>
                                </select>
                                <label for="area">Area</label>
                                <br>
                            </div>
                            <div class="mb-3">
                                <label class="text-white" for="descripcion_exp" class="form-label">Descripcion de experiencia</label>
                                <textarea class="form-control" id="descripcion_exp" rows="3"></textarea>
                            </div>
                            <br>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <input type="button" name="previous" class="previous btn btn-danger" value="Atras" />
                            <input type="button" name="next" class="next btn btn-primary" value="Siguiente" />
                        </fieldset>
                        <fieldset>
                            <h2 class="text-white">Paso 3</h2>
                            <b class="text-white">Rol: </b>
                            <br>
                            <input class="form-check-input" type="radio" name="rol" id="rol" value="Desarrollador"><label class="text-white">Desarrollador</label>
                            <br>
                            <input class="form-check-input" type="radio" name="rol" id="rol" value="Analista"><label class="text-white">Analista</label>
                            <br>
                            <input class="form-check-input" type="radio" name="rol" id="rol" value="Tester"><label class="text-white">Tester</label>
                            <br>
                            <input class="form-check-input" type="radio" name="rol" id="rol" value="Diseñador"><label class="text-white">Diseñador</label>
                            <br>
                            <input class="form-check-input" type="radio" name="rol" id="rol" value="Profesional PMO"><label class="text-white">Profesional PMO</label>
                            <br>
                            <input class="form-check-input" type="radio" name="rol" id="rol" value="Profesional de servicios"><label class="text-white">Profesional de servicios</label>
                            <br>
                            <input class="form-check-input" type="radio" name="rol" id="rol" value="Auxiliar administrativo"><label class="text-white">Auxiliar administrativo</label>
                            <br>
                            <input class="form-check-input" type="radio" name="rol" id="rol" value="Codirector"><label class="text-white">Codirector</label>
                            <br><br>
                            <input class="form-check-input" type="radio" name="boletin" id="boletin" value="No"><label class="text-white">Resivir Boletin Informativo</label>
                            <input type="hidden" name="reg_boletin"  id="reg_boletin" value="">
                            <br><br>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <input type="button" name="previous" class="previous btn btn-danger" value="Atras" />
                            <input type="submit" class="btn btn-warning text-white" name="btn_reg" onclick="validar_registro()" value="Registrarme">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal. Campos Vacios-->
<div class="modal fade" id="staticBackdrop_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Solicitud</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color: #1a202c;">
                <h2 class="text-white">Hay campos vacios.</h2>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>

  <!-- modal.CONFIRMAR ACCIOON -->
<div class="modal fade" id="staticBackdrop_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Solicitud</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color: #1a202c;">
        <div class="container">
          <h2 class="text-white">Seguro que desea realizar la accion</h2>
        </div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" name="aceptar" id="aceptar" onclick="del()" class="btn btn-warning text-white">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- modal.CONFIRMAR ACCIOON -->
<div class="modal fade" id="staticBackdrop_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">Solicitud</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body" style="background-color: #1a202c;">
      <div class="container">
        <h2 class="text-white">Seguro que desea realizar la accion</h2>
      </div>
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      <button type="button" name="aceptar" id="aceptar" onclick="edit()" class="btn btn-warning text-white">Aceptar</button>
    </div>
  </div>
</div>
</div>

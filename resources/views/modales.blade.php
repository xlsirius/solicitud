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

  function verModal_Login()
  {
    $('#').modal('show');
  }
function verModal_Reg_Login()
{
  $('#').modal('show');
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
                    <form style="fieldset:not(:first-of-type) {display: none;}" id="regiration_form" novalidate action="" method="post">
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
                                <select class="form-select" id="area" aria-label="Floating label select example" onchange="verModal_3()">
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
                                <input class="form-check-input" type="radio" name="rol " id="rol" value="Auxiliar administrativo"><label class="text-white">Auxiliar administrativo</label>
                                <br>
                                <input class="form-check-input" type="radio" name="rol" id="rol" value="Codirector"><label class="text-white">Codirector</label>
                            <br><br>
                            <input class="form-check-input" type="radio" name="boletin" id="boletin" value="Codirector"><label class="text-white">Resivir Boletin Informativo</label>
                             <br><br>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <input type="button" name="previous" class="previous btn btn-danger" value="Atras" />
                            <input type="submit" class="btn btn-warning text-white" name="btn_reg" value="Registrarme">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

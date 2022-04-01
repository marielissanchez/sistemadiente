<?php require_once "menu.php"?>

  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	

</head>
<body>



    <div class="container"> </div>

    <!--Modal para crud-->
    <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby= "exampleModalLabel" aria-hidden="true"> </div>

              


     <div class="modal-dialog" roles="ducument">
     	<div class="modal-content" style="width: 730px; left: -79px; position: absolute; top:-259px;">
     		<div class="modal-header">
     			<h5 class="modal-title" id="exampleModalLabel"><img class="salud" src="img/salud.jpg"  style="top: -16px; position: relative; height: 54px; left: 76px;"></h5>
          <h4 style="top: 35px; position: relative; right: 206px;">Historial del Paciente</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" style="position: relative; top: -12px; left: 450px;">Número de Historia de Pacientes:</label>
            <input type="number" class="form-control" id="recipient-name" placeholder="Número de Historia:" required=""  style="width: 212px; top: 35px; left: 487px; position: absolute;">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombres del Pacientes:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required="" style="top: -8px; position:relative;">
          </div>
           <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Apellidos del Pacientes</label>
            <input type="text" class="form-control" name="apellido" id="apellido">
          </div>

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cedula del Pacientes:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>

            <div class="form-group" style="margin-bottom: 15px; ">
                   <label for="ocupacion" class="col-md-3 control-label">Nacionalidad:</label>
                    <div class="col-md-9">
                          <select class="form-control" name="ocupacion">
                     <option disabled="disabled" selected="selected">Nacionalidad</option>    <option>Venezolano</option> 
                        <option>Extrejeros</option> 
                           <option>Otros</option>  
                  </select>  
                        </div>
                    </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Dirección del Pacientes:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
            
             <div class="form-group"style="margin-bottom: 25px" >
            <label for="sexo" class="col-md-3 control-label" >Sexo:</label>
                    <div class="col-md-9">
                         <select class="form-control" name="sexo">
                     <option disabled="disabled" selected="selected">Sexo</option>  <option>Femenino</option> 
                        <option>Masculino</option> 
                           
                  </select>  
                        </div>

          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Edad:</label>
            <input type="number" class="form-control" id="recipient-name">
          </div>

           
          <div class="form-group" style="margin-bottom: 15px; ">
                   <label for="ocupacion" class="col-md-3 control-label">Ocupación:</label>
                    <div class="col-md-9">
                          <select class="form-control" name="ocupacion">
                     <option disabled="disabled" selected="selected">Ocupación</option>  <option>Estudiante</option> 
                        <option>Profesores</option> 
                         <option>Personal Administrativo</option>
                          <option>Familiares</option>  
                  </select>  
                        </div>
                    </div>

             
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" id="recipient-name">
          </div>

          <div class="form-group" style="margin-bottom: 15px; ">
                   <label for="ocupacion" class="col-md-3 control-label">Estado Civil:</label>
                    <div class="col-md-9">
                          <select class="form-control" name="ocupacion">
                     <option disabled="disabled" selected="selected">Estado Civil</option>  <option>Soltero</option> 
                        <option>Casado</option> 
                         <option>Otros</option> 
                  </select>  
                        </div>
                    </div>

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha:</label>
            <input type="date" class="form-control" id="recipient-name">
          </div>


        <div class="form-group" style="margin-bottom: 25px; text-indent: 34px;  ">
          <label for="habitos toxicos" class="col-md-9 control-label" style="top: 13px; text-align:center; text-indent:65px;  font-size:14px; ">Antecedentes Personales:</label>
          <label for="habitos toxicos" class="col-md-9 control-label" style="top: 4px; right: 250px;">1) Hábitos tóxicos :</label>
        <div class="form-group" style="margin-bottom: 5px; ">
        <label for="habitos toxicos" class="col-md-9 control-label" style="top: 10px; right: 235px;">Ingieres Alcohol:</label>
        <div class="form-group">
        <input type="text" class="form-control" id="recipient-name">
          </div>
          </div>  


          <label for="ingieres drogas" class="col-md-9 control-label" style="top: -18px; right: 232px;">Ingieres Drogas:</label>
        <div class="form-group" style="margin-bottom: 5px; ">
        <input type="text" class="form-control" name="drogas" placeholder="Ingieres Drogas" required>
          </div>
        </div>

          <label for="ingieres tabaco" class="col-md-9 control-label">Ingieres Tabaco:</label>
        <div class="form-group" style="margin-bottom: 5px; ">
        <input type="text" class="form-control" name="tabaco" placeholder="Ingieres Tabaco" required>
          </div>
        </div>

    <label for="ingieres cafe" class="col-md-9 control-label">Ingieres Café :</label>
        <div class="form-group" style="margin-bottom: 5px; ">
        <input type="text" class="form-control" name="cafe" placeholder="Ingieres Café " required>
          </div>
        </div>

      <div class="form-group" style="margin-bottom: 5px; ">
        <label for="fisiologicos" class="col-md-9 control-label" style="top: -87px; right: 228px;">2) Fisiológicos :</label>
        <div class="form-group" style="margin-bottom: 5px; ">
      <label for="fisiologicos" class="col-md-9 control-label" style="top: -87px; right: 203px;">Infancia :</label>
        <div class="col-md-9">
        <input type="text" class="form-control" name="infancia" placeholder="Infancia del Paciente" required>
          </div>
            </div>


            <div class="form-group" style="margin-bottom: 5px; ">
        <label for="fisiologicos" class="col-md-9 control-label">Dipsia :</label>
        <input type="text" class="form-control"name="dipsia" placeholder="Dipsia del Paciente" required>
          </div>
        </div>

      <div class="form-group" style="margin-bottom: 5px; ">
        <label for="Diuresis" class="col-md-9 control-label">Diuresis :</label>
        <input type="text" class="form-control" name="diuresis" placeholder="Diuresis del Paciente" required>
          </div>
          </div>  

          <div class="form-group" style="margin-bottom: 5px; ">
        <label for="otros" class="col-md-9 control-label" >Otros :</label>
        <input type="text" class="form-control"name="otros" placeholder="Otros del Paciente" required>
          </div>
        </div>

          <div class="form-group" style="margin-bottom: 5px; ">
        <label for="examen fisico regional" class="col-md-9 control-label" style="top: -169px; position:relative;  right:201px;  text-align: center; text-indent:227px; ">Examen Físico Regional :</label>
       
<div class="form-group" style="margin-bottom: 5px; ">
        <label for="impresion regional" class="col-md-9 control-label">Impresión Reneral :</label>
        <input type="text" class="form-control" name="impresion_regional" placeholder="Impresión Regional" required>
          </div>
          </div>


        

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="sumbit" id="btnGuardar" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>






   <!-- jQuery, popper.js, Bootstrap jp-->
   <script src="jQuery/jQuery=3.3.1.min.js"></script>
   <script src="popper/popper.min.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>

   <!-- datatable js -->
   <script type="text/javascript" src="datatables/datatables.min.js"></script>

   <script type="text/javascript" src="main.js"></script>





</body>
</html>
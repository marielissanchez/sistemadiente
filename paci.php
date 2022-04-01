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
     			<h5 class="modal-title" id="exampleModalLabel"></h5>
          <h4>Registrar Pacientes</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
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
            <label for="recipient-name" class="col-form-label">Núcleo:</label>
            <input type="number" class="form-control" id="recipient-name">
          </div>

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha:</label>
            <input type="date" class="form-control" id="recipient-name">
          </div>

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Hora:</label>
            <input type="time" class="form-control" id="recipient-name">
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
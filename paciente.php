<?php require_once "menu.php"?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Modal!</title>
  </head>
  <body>
    <div class="container text-center" style="width: 1900px; position: absolute;">
    <h1>ventadal(Emergente)!</h1>
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Abrir ventana modal</button>

    </div>
   
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 788px; margin-top: 29px; position: absolute; left:-133px; ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="left: 322px; position: absolute;">Registrar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" style="position: relative; top: 2px; left: 10px;">Nombres:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Ingresar Nombres de Paciente:" required=""  style="width: 632px; top: 19px; left: 109px; position: absolute;">
          </div>

          <div class="modal-body">
        <form>

        	<div class="mb-3">
            <label for="recipient-name" class="col-form-label"  style="position: relative; top: -25px; left: -9px;">Apellidos:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Ingresar Apellidos de Paciente:" required  style="width: 632px; top: -9px; left: 93px; position: absolute;">
          </div>

        <div class="mb-3">
            <label for="recipient-name" class="col-form-label" style="position: relative; top: -36px;">Cedula:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Ingresar Cedula de Paciente:" required="" style=" top:-74px; height: 36px; width: 255px; position: relative; left:78px;">
          </div>

           <div class="mb-3">
            <label for="recipient-name" class="col-form-label" style="position: relative; top: -126px; left: 345px;">Direccion:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Ingresar Cedula de Paciente:" required style=" top:-164px; height: 36px; width: 278px; position: relative; left:430px;">
          </div>


             <div class="form-group"style="margin-bottom: 25px" >
            <label for="sexo" class="col-md-3 control-label" style="left: 24px; top:80px; position: absolute;">Sexo:</label>
                    <div class="col-md-9" style="width: 257px; top: 76px; left: 94px; position: absolute;">
                         <select class="form-control" name="sexo">
                     <option disabled="disabled" selected="selected">Sexo</option>  <option>Femenino</option> 
                        <option>Masculino</option> 
                           
                  </select>  
                        </div>


                        <div class="mb-3">
            <label for="recipient-name" class="col-form-label"  style="position: relative; top: -174px; left: 355px;">Edad:</label>
            <input type="number" class="form-control" name="edad" placeholder="Ingresar Edad de Paciente:" required="" style="width: 277px; top: 76px; left: 447px; position: absolute;">
          </div>


          <div class="form-group" style="margin-bottom: 15px; ">
                    <label for="ocupacion" class="col-md-3 control-label" style="left:3px; top: 127px; position: absolute; ">Ocupación:</label>
                    <div class="col-md-9" style="margin-bottom: 15px; ">
                          <select class="form-control" style="top: 120px;  position: absolute; left:95px; width: 257px;" name="ocupacion">
                     <option disabled="disabled" selected="selected">Ocupación</option>  <option>Estudiante</option> 
                        <option>Profesores</option> 
                         <option>Personal Administrativo</option>
                          <option>Familiares</option>  
                  </select>  
                        </div>
                    </div>


                     <div class="mb-3">
            <label for="recipient-name" class="col-form-label"style="position: relative; top: -186px; left: 355px;">Núcleo:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Ingresar Núcleo:" required="" style=" top:-224px; height: 36px; width: 279px; position: relative; left:432px;">
          </div>
         
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label" style="position: relative; top: -229px; left: 10px;">Fecha:</label>
            <input type="date" class="form-control" name="fecha" placeholder="Ingresar Fecha de Paciente:" required="" style="width: 632px; top: 163px; left: 97px; position: absolute;">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" style="position: relative; top: -246px; left: 10px;">Hora:</label>
            <input type="time" class="form-control" name="hora" placeholder="Ingresar hora de Paciente:" required="" style="width: 632px; top: 205px; left: 97px; position: absolute;">
          </div>
          
          
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="top: 271px; position: absolute; left: 343px; width: 171px;">Cerrar</button>
        <button type="button" class="btn btn-primary" style="top: 271px; position: absolute;width: 171px; right: 51px;">Guardar</button>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
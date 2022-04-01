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
    <div class="modal-content" style="width: 858px; margin-top: 29px; position: absolute; left: -226px;">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel"><img class="salud" src="img/salud.jpg"  style="top: -16px; position: relative; height: 64px; left: 196px;"><img class="unef" src="img/001.png"  style="top: -1px; position: relative; height: 74px; right: 433px;"></h5>
       <h4 style="top: 40px; position: relative; right: 206px;">Registrar del Paciente</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombres del Pacientes:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de Paciente:" required=""   style=" width:270px;  top: 75px; left: 190px; position: absolute;">
          </div>
           <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="left: 474px; position: absolute; top: 75px;">Apellidos del Pacientes:</label>
            <input type="text" class="form-control" name="apellido" id="apellido"  placeholder="Apellido de Paciente:" required=""   style=" width:270px;  top: 75px; left: 650px; position: absolute;">
          </div>

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cedula del Pacientes:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Cedula de Paciente:" required="" style=" width:270px;  top: 115px; left: 190px; position: absolute;">
          </div>
         
</html>
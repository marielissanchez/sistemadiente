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

    <div hidden class="container text-center" style="width: 1900px; position: absolute;">
    <h1>ventadal(Emergente)!</h1>
     <button type="button" class="btn btn-primary" id="modalbtn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Abrir ventana modal</button>

    </div>
   
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 958px; margin-top: 29px; position: absolute; left: -226px;">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel"><img class="salud" src="img/salud.jpg"  style="top: -16px; position: relative; height: 64px; left: 196px;"><img class="unef" src="img/001.png"  style="top: -1px; position: relative; height: 74px; right: 433px;"></h5>
       <h4 style="top: 40px; position: relative; right: 206px;">Historial del Paciente</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" style="position: relative; top: -18px; left: 680px;">Número de Historia de Pacientes:</label>
            <input type="number" class="form-control" id="recipient-name" placeholder="Número de Historia:" required=""  style="width: 212px; top: 29px; left: 709px; position: absolute;">
          </div>

         
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
         
          
             <div class="form-group" style="margin-bottom: 15px; ">
                   <label for="ocupacion" class="col-md-3 control-label" style=" width:270px;  top: 119px; left: 520px; position: absolute;">Nacionalidad:</label>
                    <div class="col-md-9">
                          <select class="form-control" class="form-control" style="position: relative; top: -30px; width: 269px; left: 635px;"  name="nacionalidad">
                     <option disabled="disabled" selected="selected" >Nacionalidad</option>    <option>Venezolano</option> 
                        <option>Extrejeros</option> 
                           <option>Otros</option>  
                  </select>  
                        </div>
                    </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="left: 14px; position: absolute; top: 155px;">Dirección del Pacientes:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Dirección del Pacientes" required="" style=" width:270px;  top: 155px; left: 189px; position: absolute;">
          </div>
            
             <div class="form-group"style="margin-bottom: 25px" >
            <label for="sexo" class="col-md-3 control-label"  style=" width:270px;  top: 159px; left: 540px; position: absolute;" >Sexo:</label>
                    <div class="col-md-9">
                         <select class="form-control"  name="sexo" style="position: relative; top: -42px; width: 269px; left: 635px;">
                     <option disabled="disabled" selected="selected" >Sexo</option>  <option>Femenino</option> 
                        <option>Masculino</option> 
                           
                  </select>  
                        </div>

          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"style=" width:270px;  top: 194px; left: 78px; position: absolute;" >Edad:</label>
            <input type="number" class="form-control" id="recipient-name" name="edad" placeholder="Ingresar Edad" style="position: relative; top: -42px; width: 269px; left: 175px;">
          </div>

           
          <div class="form-group" style="margin-bottom: 15px; ">
                   <label for="ocupacion" class="col-md-3 control-label" style=" width:270px;  top: 199px; left: 535px; position: absolute;" >Ocupación:</label>
                    <div class="col-md-9">
                          <select class="form-control" name="ocupacion" style="position: relative; top: -78px; width: 269px; left: 635px;">
                     <option disabled="disabled" selected="selected">Ocupación</option>  <option>Estudiante</option> 
                        <option>Profesores</option> 
                         <option>Personal Administrativo</option>
                          <option>Familiares</option>  
                  </select>  
                        </div>
                    </div>

             
           <div class="form-group">
            <label for="recipient-name" class="col-form-label" style=" width:270px;  top: 234px; left: 20px; position: absolute;" >Fecha de Nacimiento:</label>
            <input type="date" class="form-control" id="recipient-name" placeholder="Fecha de Nacimiento" required=""  style="position: relative; top: -93px; width: 269px; left: 175px;">
          </div>

          <div class="form-group" style="margin-bottom: 15px; ">
                   <label for="ocupacion" class="col-md-3 control-label" style=" width:270px;  top: 245px; left: 535px; position: absolute;" >Estado Civil:</label>
                    <div class="col-md-9">
                          <select class="form-control" name="ocupacion" style="position: relative; top: -130px; width: 269px; left: 635px;">
                     <option disabled="disabled" selected="selected">Estado Civil</option>  <option>Soltero</option> 
                        <option>Casado</option> 
                         <option>Otros</option> 
                  </select>  
                        </div>
                    </div>

           <div class="form-group">
            <label for="recipient-name" class="col-form-label"  style="top: 274px; left: 31px; position: absolute;">Fecha de Ingreso:</label>
            <input type="date" class="form-control" id="recipient-name" placeholder="Fecha de ingreso"  style="position: relative; top: -143px; width: 729px; left: 174px;">
          </div>


        <div class="form-group" style="margin-bottom: 25px; text-indent: 34px;  ">
          <label for="habitos toxicos" class="col-md-9 control-label" style="top: 323px; text-align:center; text-indent:65px;  font-size:17px; position: absolute; ">Antecedentes Personales:</label>
          <label for="habitos toxicos" class="col-md-9 control-label" style="top: 332px; position: absolute; left: 1px;">1) Hábitos tóxicos :</label>

           <div class="form-group" style="margin-bottom: 15px; ">
                   <label for="ocupacion" class="col-md-3 control-label" style="top: 359px; left: 31px; position: absolute;" >Ingieres Alchol:</label>
                    <div class="col-md-9">
                          <select class="form-control" name="ocupacion" style="position: relative; top: -101px; width: 269px; left: 175px;">
                     <option disabled="disabled" selected="selected">Ingieres Alchol:</option>  <option>Si</option> 
                        <option>No</option> 
                  </select>  
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 15px; ">
                   <label for="ocupacion" class="col-md-3 control-label" style="top: 359px; left: 471px; position: absolute;" >Ingieres Drogas:</label>
                    <div class="col-md-9">
                          <select class="form-control" name="ocupacion" style="position: relative; top: -154px; width: 269px; left: 635px;">
                     <option disabled="disabled" selected="selected">Ingieres Drogas:</option>  <option>Si</option> 
                        <option>No</option> 
                  </select>  
                        </div>
                    </div>


                     <div class="form-group" style="margin-bottom: 15px; ">
                   <label for="ocupacion" class="col-md-3 control-label" style="top: 405px; left: 23px; position: absolute;" >Ingieres Tabaco:</label>
                    <div class="col-md-9">
                          <select class="form-control" name="ocupacion" style="position: relative; top: -166px; width: 269px; left: 175px;">
                     <option disabled="disabled" selected="selected">Ingieres Tabaco:</option>  <option>Si</option> 
                        <option>No</option> 
                  </select>  
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 15px; ">
                   <label for="ocupacion" class="col-md-3 control-label" style="top: 405px; left: 471px; position: absolute;" >Ingieres Cafe:</label>
                    <div class="col-md-9">
                          <select class="form-control" name="ocupacion" style="position: relative; top: -219px; width: 269px; left: 635px;">
                     <option disabled="disabled" selected="selected">Ingieres Cafe:</option>  <option>Si</option> 
                        <option>No</option> 
                  </select>  
                        </div>
                    </div>

          <div class="form-group" style="margin-bottom: 25px; text-indent: 34px;  ">
          <label for="habitos toxicos" class="col-md-9 control-label" style="top: 323px; text-align:center; text-indent:65px;  font-size:17px; position: absolute; ">Antecedentes Personales:</label>
          <label for="habitos toxicos" class="col-md-9 control-label" style="top: 436px; position: absolute; left: 1px;">2) Fisiológicos:</label>

           <div class="form-group" style="margin-bottom: 15px; ">
                   <label for="ocupacion" class="col-md-3 control-label" style="top: 459px; left: 31px; position: absolute;" >Infancia :</label>
                    <div class="col-md-9">
                          <select class="form-control" name="ocupacion" style="position: relative; top: -218px; width: 269px; left: 175px;">
                     <option disabled="disabled" selected="selected">Infancia:</option>  <option>Si</option> 
                        <option>No</option> 
                  </select>  
                        </div>
                    </div>
                 
                   
                    <div class="form-group" style="margin-bottom: 15px; ">
                   <label for="ocupacion" class="col-md-3 control-label" style="top: 450px; left: 494px; position: absolute;" >Dipsia:</label>
                    <div class="col-md-9">
                          <select class="form-control" name="ocupacion" style="position: relative; top: -274px; width: 269px; left: 635px;">
                     <option disabled="disabled" selected="selected">Dipsia del Paceinte:</option>  <option>Si</option> 
                        <option>No</option> 
                  </select>  
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 15px; ">
                   <label for="ocupacion" class="col-md-3 control-label" style="top: 497px; left: 34px; position: absolute;" >Diuresis:</label>
                    <div class="col-md-9">
                          <select class="form-control" name="ocupacion" style="position: relative; top: -283px; width: 269px; left: 175px;">
                     <option disabled="disabled" selected="selected">Diuresis del Paceinte:</option>  <option>Si</option> 
                        <option>No</option> 
                  </select>  
                        </div>
                    </div>

                     <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="left: 495px; position: absolute; top: 489px;">Otros:</label>
            <input type="text" class="form-control" name="otros" id="otros"  placeholder="Otros:" required=""   style=" width:270px;  top: 490px; left: 650px; position: absolute;">
          </div>

          <div class="form-group" style="margin-bottom: 5px; ">
        <label for="examen fisico regional" class="col-md-9 control-label" style="top: -289px; position:relative;  right:21px; font-size: 17px;  text-align: center; text-indent:297px; ">Examen Físico Regional :</label>

         <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="left: 5px; position: absolute; top: 529px;">Impresión Reneral:</label>
            <input type="text" class="form-control"  name="impresion_regional" placeholder="Impresión Regional" required style=" width:730px; top: 534px; left: 190px; position: absolute;">

            <div class="form-group" style="margin-bottom: 5px; ">
        <label for="examen fisico regional" class="col-md-9 control-label" style="top:-279px; left:56px;  text-align: center; text-indent:228px; position: relative; ">Examen Físico General :</label>

               <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="left: 73px; position: absolute; top: 604px;">Talla:</label>
            <input type="number" class="form-control"  name="impresion_regional" placeholder="Ingresar Talla de Paciente:" required style=" width:269px; top: 605px; left: 190px; position: absolute;">
     
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"style=" width:270px;  top: 604px; left: 495px; position: absolute;" >Peso:</label>
            <input type="number" class="form-control"  name="impresion_regional" placeholder="Ingresar Peso de Paciente:" required style=" width:269px; top: 605px; left: 650px; position: absolute;">

            <div class="form-group">
            <label for="recipient-name" class="col-form-label"style="top: 645px; left: 79px; position: absolute;" >P.A:</label>
            <input type="number" class="form-control"  name="impresion_regional" placeholder="Ingresar P.A:" required style=" width:730px; top: 649px; left: 190px; position: absolute;">

            <div class="form-group" style="margin-bottom: 5px; ">
        <label for="examen fisico regional" class="col-md-9 control-label" style="top:-179px; left:10px;  text-align: center; text-indent:228px; position: relative; ">Signos Vitales:</label>

       
               <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="left: 73px; position: absolute; top: 724px;">F.C:</label>
            <input type="text" class="form-control"  name="impresion_regional" placeholder="Ingresar F.C de Paciente:" required style=" width:269px; top: 725px; left: 190px; position: absolute;">
     
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"style=" width:270px;  top: 725px; left: 545px; position: absolute;" >T.A:</label>
            <input type="number" class="form-control"  name="impresion_regional" placeholder="Ingresar T.A de Paciente:" required style=" width:269px; top: 725px; left: 650px; position: absolute;">


               <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="left: 33px; position: absolute; top: 768px;">Peso Habitual:</label>
            <input type="number" class="form-control"  name="impresion_regional" placeholder="Ingresar Peso Habitual de Paciente:" required style=" width:269px; top: 768px; left: 190px; position: absolute;">
     
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"style=" width:270px;  top: 768px; left: 515px; position: absolute;" >Peso Actual:</label>
            <input type="number" class="form-control"  name="impresion_regional" placeholder="Ingresar Peso Actual de Paciente:" required style=" width:269px; top: 765px; left: 650px; position: absolute;">
                    
                     <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="left: 33px; position: absolute; top: 821px;">Diagnóstico :</label>
            <input type="number" class="form-control"  name="impresion_regional" placeholder="Ingresar Peso Habitual de Paciente:" required style=" width:269px; top: 768px; left: 190px; position: absolute;">
          <textarea type="text" class="form-control"  cols="2" rows="2" name="diagnostico" style="top: -89px; position: relative; left:174px; width: 727px;" placeholder="Diagnóstico " required>
            </textarea>
          </div>
          </div>    
        
       

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="top: 890px; position: absolute;width: 271px; left:201px;">Cancelar</button>
        <button type="button" class="btn btn-primary" style="top: 890px; position: absolute;width: 271px; left:491px;">Guardar</button>
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
    <script>
      document.getElementById("modalbtn").click();
    </script>
  </body>
</html>
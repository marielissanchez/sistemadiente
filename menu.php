<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>



</body>
</html>





    <header class="header2" >
      <h1 id="h1" style="top: 83px; font-size: 25px; text-align: center; text-indent: 126px; position: absolute;"> Sistema de Gestión Administrativo En el Área de Enfermería UNEFANB</h1>



   
    </header>

    <header>

       <div >
      <img class="unef" src="img/001.png" style="width: 75px;
    height: auto;
    top: 1px;
    position: fixed;
    bottom: 45px;
    left: 33px;
    color: #000">

        </div>
    
      <div class="navigation">
        <ul class="menu">
          <div class="close-btn"></div>
          <li class="menu-item"><a href="iniciosesion.php">Inicio</a></li>
          <li class="menu-item">

           
            
             <li class="menu-item">
            <a class="sub-btn" href="#">Usuarios<i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="#">Registros Usuarios</a></li>
              <li class="sub-item"><a href="usuarios.php">Listas de Pacientes</a></li>
            </ul>
          </li>
              
              <li class="menu-item">
            <a class="sub-btn" href="#">Pacientes<i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item id="><a href="paci.php">Registros de Pacientes</a></li>
              <li class="sub-item"><a href="indexxx.php">Listas de Pacientes</a></li>
            </ul>
          </li>

          <li class="menu-item">
            <a class="sub-btn" href="#"> Historias<i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="2histo.php">Registrar historia Paciente</a></li>
              <li class="sub-item"><a href="Registroshistorial.php">Lista de Paciente</a></li>
            
              <li class="sub-item more">
                <a class="more-btn" href="#">Registro de Recipe <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
                  <li class="more-item"><a href="#">Recipe de Paciente</a></li>
                  <li class="more-item"><a href="#">Lista de Recipe</a></li>
                </ul>
              </li>
            </ul>
          </li>
                 <li class="menu-item">
            <a class="sub-btn" href="#">Bitacora<i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="#">Registrar </a></li>
              <li class="sub-item"><a href="#">Lista de Paciente</a></li>
            
              <li class="sub-item more">
                <a class="more-btn" href="#">Registro de Recipe <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
                  <li class="more-item"><a href="#">Recipe de Paciente</a></li>
                  <li class="more-item"><a href="#">Lista de Recipe</a></li>
                </ul>
              </li>
            </ul>
          </li>
          
         <li class="menu-item"><a href="#">pppp</a></li>
          <li class="menu-item"><a href="#">Salir</a></li>
        </ul>
      </div>

      <div class="clockdate" style="margin-left:60px">
                  <span id="time" style="color:white;">aaa</span>
                  <span id="date" style="color:white">aa</span>
              </div>
        </ul>
      </div>
      <div class="menu-btn"></div>
    </header>


    <section class="section-home">
      <h1>Área de Enfermería UNEFANB</div>.</h1>
    </section>




  
<body onload="startTime()">

    <div class="clockdate">
        <span id="time" style="top: 232px; left: 432px; position: absolute;"></span>
        <span id="date" style="top: 287px; left: 543px; position: absolute;"></span>
    </div>

    <script>
        function startTime() {
            //declaramos las  variables que nos proporcionaran los datos como la hora, minutos etc.

            var today = new Date(),
                hours = today.getHours(),
                minutes = today.getMinutes(),
                date = today.getDate(),
                day = today.getDay(),
                month = today.getMonth();

            //utilizaremos operadores ternarios esto nos ayudara a mostrar la hora solo del 1 al 12
            hours = (hours == 0) ? 12 : hours;
            hours = (hours > 12) ? hours - 12 : hours;

            //pasaremos las horas y minutos a una funcion que crearemos mas adelante
            hours = checkTime(hours);
            minutes = checkTime(minutes);

            //primero para los dias y meses crearemos un arreglo esto por que la funcion que nos debuelve
            //los dias y meses nos los debuelbe en numero
            var dia = ["Domingo", " Lunes", "Martes", "Miercoles", "Jueves", "viernes", "Sabado"],
                mes = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
            //haora solo imprimimos los datos
            var hr = document.getElementById('time').innerHTML = hours + ":" + minutes,
                dt = document.getElementById('date').innerHTML = dia[day] + ", " + date + " De " + mes[month];

            //esta funcion hara que nuestro escript se ejecute constantemente
            var time = setTimeout(function() {
                startTime();
            }, 500);




        }
        //solo falta crear la funcion que nos diga si tine uno o dos dijitos
        //esto para que si solo tiene uno le agrege u  cero a la izquierda
        function checkTime(e) {
            if (e < 10) {
                e = "0" + e;
            }
            return e;
        }
    </script>




  </body>

</html>

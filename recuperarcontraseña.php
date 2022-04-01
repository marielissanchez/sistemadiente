<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Password Reset - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <header class="header">
      <div class="wrapper">
      <div class="logos">Sistema de Gestión Administrativo en el Área de Enfermería UNEFANB</div>


      <nav>
        <div >
                <img class="unef" src="img/001.png">
        </div>

            </nav>
    </div>
   </header>

   <body onload="startTime()">

<div class="clockdate">
        <span style="position: relative; font-size: 20px; right:35px; top:-547px; color: #000; " id="time"></span>
        <span style="position: relative; font-size: 20px;  left:19px;top:-575px; " id="date"></span>
    </div>
            
      

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container" style="margin-top: -27px; left: 112px; position: absolute;">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-7">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Recuperación de contraseña</h3></div>
                              <div class="card-body">
                              <div class="small mb-3 text-muted">Ingrese su dirección de correo electrónico y le enviaremos un enlace para restablecer su contraseña.</div>
                                <form>
                                <div class="form-floating mb-3">
                                      <input class="form-control"  name="email" id="email"  type="email" placeholder="Ingresar Correo Electrónico" required/>
                                      <label for="inputEmail">Dirección de correo Electrónico</label>
                                     </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="iniciosesion.php">Volver a iniciar sesión</a>
                                  <a class="btn btn-primary" href="#">Restablecer la contraseña</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="registroo.php">¿Necesito una cuenta? ¡Inscribirse</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto" style=" top:583px; width: 1349px; position: absolute;">
                    <div class="container-fluid px-6">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted" >Marielys Sanchez &copy; UNEFANB 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body >
<style>
    body {
    background:#007;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
}

header {
    width: 100%;
    top:-56px;
    position: relative; 
    height: 159px;
    overflow: hidden;
    background: #fff;
    margin-bottom:20px;
    padding: 0px;
    border-bottom: 5px solid block;

}

.unef {
    width: 75px;
    height: auto;
    top: 62px;
    position: absolute;
    bottom: 45px;
    left: 53px;
}
.wrapper {
    width: 90%;
    max-width: 1000px;
    margin: auto;
    overflow: hidden;
}
header .logos {
    color: #000;
    font-size: 28px;
    line-height: 196px;
    float: left;
    top: 12px;
    position: absolute;
    left: 143px;
}

span{
    display: block;
    font-weight: 30;

    font-family:all;
}

.clockdate{
float: right;
        font-size: 17px;
    color: #000;
    margin-right: 58px;
    top: 405px;

    position: relative;
}
</style>


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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RRHH</title>
    
    <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>

<!-- HOME -->

<div id="home">
    <div id="navbar">
        <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #437bb2; " >
            <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
            </button>

        <div class="collapse navbar-collapse "  id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto " style="margin-left:auto; margin-right:auto;">
                <li class="nav-item active">
                    <a class="nav-link" style="color:#fff;" href="#"><u>Home</u><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#fff;" href="#quienes">Quienes Somos</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" style="color:#fff;" href="#servicios">Servicios</a>
                </li>  
                <li class="nav-item">
                    <a class="nav-link" style="color:#fff;" href="#contacto">Contacto</a>
                </li> 
            </ul>

            <a class="navbar-brand" href="#">
                <img src={{ url ('assets\images\instagram.png')}}  width="30" height="30" alt="ig" loading="lazy">
            </a>
            <a class="navbar-brand" href="#">
                <img src={{ url ('assets\images\facebook.png')}} width="30" height="30" alt="fb" loading="lazy">
            </a>

        </div>
        </nav>
    </div>
    <div id="imagenprinc">
        <img src={{ url ('assets\images\imagen.jpg')}} alt="home" class="img-fluid">
    </div>
</div>

<!-- QUIENES SOMOS -->
<div id="quienes">
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #437bb2; " >
        <a class="navbar-brand" href="#home" style="margin-left:auto;">
            <img src={{ url ('assets\images\logo.png')}}  width="30" height="30" alt="logo" class="img-fluid">
        </a>
    </nav>
    <img src={{ url ('assets\images\imagen2.jpg')}} alt="qs" class="img-fluid">
    <div class="quienesSomos">        
        <br>
        <br>
        <h3>Quienes Somos</h3>
        <hr width="20%" align="left">
        <br>
        <p>EGICH es una empresa de Gestión Integral del Capital Humano, cuyo objetivo fundamental es contribuir a que las personas que integran una organizacion laboral se sientan parte y por lo tanto trabajen con PROPÓSITO para el logro de los objetivos propuestos.</p>
        <br>
        <p>La importancia de la Gestión Integral del Capital Humano, radica en que actualmente las organizaciones laborales deben dar respuesta a los cambios experimentados en la sociedad en general y del mundo laboral en particular, entre los que se destacan:</p>
        <br>

        <li>Aumento de la competencia y por lo tanto de la necesidad de ser competitivo.</li>
        <li>Las ventajas y los costos relacionados con el uso del Capital Humano.</li>
        <li>La crisis de productividad</li>
        <li>La necesidad de conocimiento técnico normativo.</li>
        <li>Las tendencias para la próxima década.</li>
        <li>Los síntomas de las alteraciones en el funcionamiento de los lugares de trabajo.</li>
        <li>El aumento del ritmo y complejidad de los cambios sociales, culturales, normativos, demográficos y educacionales.</li>
    </div>

</div>

<!-- Servicios -->
<div id="servicios">
    <p>Este es el servicios</p>
</div>

<!-- Contacto -->
<div class= "aaa" id="contacto">
    <p>Este es el contacto</p>
</div>

    
</body>
</html>
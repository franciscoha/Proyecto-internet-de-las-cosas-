<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Control de humedad y temperatura</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://kit.fontawesome.com/dd92907a44.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/bootstrap.css') !!}">
        

        <!-- Styles -->
        
    </head>
    <body class="content">
         <h1 class="title m-b-md">
                <i class="fas fa-cloud-sun"></i>    
                Control de Humedad y Temperatura
        </h1>
            <div class=" content container theme-showcase">
                <div class="componente">
                     <div class="icon temperature-icon">
                            <i class="fas fa-temperature-low fa-2x"></i>
                     </div>
                        <div>Temperatura</div>  
                        <div class="resultados" id="temperatura">°C</div>   
                </div>
                <div class="componente">
                        <div class="icon humidity-icon">
                            <i class="fas fa-tint fa-2x"></i>
                        </div>   

                        <div>Humedad</div>
                        <div class="resultados" id="Humedad">%</div>
                </div>
                <div class="componente">
                    <a class="btn btn-info" href="Estadisticas">
                        VER GRAFICOS
                    </a>
                </div>
            </div>
        </div>
                         <script>
                            function updateData2(){
                                var xmlhttp = new XMLHttpRequest();
                                xmlhttp.onreadystatechange=function(){
                                    if (xmlhttp.readyState==4 && xmlhttp.status==200){                                        
                                        var JSONObject = JSON.parse(xmlhttp.responseText);
                                        var jfeeds = JSONObject.feeds;
                                        console.log(jfeeds);
                                        document.getElementById("temperatura").innerHTML =JSONObject.field1+"°C";
                                        document.getElementById("Humedad").innerHTML =JSONObject.field2 +"%";
                                    }
                                }
                                xmlhttp.open("GET", "https://api.thingspeak.com/channels/1066501/feeds/last.json?key=0TAPX8LPTR7BY1V3",true);
                                xmlhttp.send();
                            }
                            window.onload = function() {
                                setInterval(updateData2, 1000);
                            }
                            </script>
                            <link rel="stylesheet" href="{!! asset('js/bootstrap.js') !!}">
    </body>
</html>

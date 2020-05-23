<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas Temperatura</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">
    <script src="https://kit.fontawesome.com/dd92907a44.js" crossorigin="anonymous"></script>
        
</head>
<body >
    <div class="content">
        <div class="title m-b-md">
            <i class="fas fa-cloud-sun"></i>    
            Control de Humedad y Temperatura
        </div>
        <div class="container theme-showcase">
                
                <div >
                    <a class="btn btn-info" href="/">
                        REGRESAR       
                    </a>
                </div>
                <div>
                    <iframe width="450" height="260" style="max-width:98%;border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1066501/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Temperatura&type=line"></iframe>
                </div>
                <div>
                    <iframe width="450" height="260" style="max-width:98%;border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1066501/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Humedad&type=line&yaxis=%25+Humedad"></iframe>
                </div>
            </div>            
        </div>
    <link rel="stylesheet" href="{!! asset('js/bootstrap.js') !!}">
</body>
</html>
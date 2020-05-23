<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas Temperatura</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/dd92907a44.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">
</head>
<body class="content">
    <div class=" content container theme-showcase">
        <h1 class="title m-b-md">
                    <i class="fas fa-cloud-sun"></i>    
                    Control de Humedad y Temperatura
        </h1>
        <div class="componente">
            <a class="btn btn-info" href="/">
                REGRESAR       
            </a>
        </div>
        <div>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1066501/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Temperatura&type=line"></iframe>
        </div>
        <div>
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1066501/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Humedad&type=line&yaxis=%25+Humedad"></iframe>
        </div>
    </div>
</body>
</html>
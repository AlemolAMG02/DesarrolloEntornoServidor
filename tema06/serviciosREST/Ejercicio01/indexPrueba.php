<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>El tiempo en Málaga</h2>
        <?php
        //$datos = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Málaga,\Spain&units=metric&appid=60ceb76aa521a61a93e3ade60f14479b");
        $datos = file_get_contents("http://api.openweathermap.org/data/2.5/weather?id=2514392&units=metric&appid=60ceb76aa521a61a93e3ade60f14479b");
        echo "<h3>Datos en bruto (en formato JSON): </h3>$datos<hr>";
        $tiempo = json_decode($datos);
        echo "<h3>Datos en un objeto: </h3>";
        print_r($tiempo);
        echo "<hr>";
        echo "<h3>Datos sueltos: </h3>";
        echo "Temperatura: " . $tiempo->main->temp . "ºC<br>"; //$tiempo->{"main"}->{"temp"}
        echo "Humedad: " . $tiempo->main->humidity . "%<br>";
        echo "Presión: " . $tiempo->main->pressure . "mb<br>";
        ?>
    </body>
</html>

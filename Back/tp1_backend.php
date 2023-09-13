<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Imprima por pantalla: “Hola mundo”.//
    echo "Hola Mundo <br><br>";
    //Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.//
    $saludo = "Hola Mundo! <br><br>";
    echo $saludo;
    //Crear dos variables enteras.//
    $cuaderno = 1000;
    $lapicera = 500;

    //mostrar por pantalla, la suma://
    $sumatitulo = "Suma <br>";
    echo $sumatitulo;

    $suma = $cuaderno + $lapicera;
    echo $suma;
    print("</br><br>");

    //mostrar por pantalla, la resta://
    $restatitulo = "Resta <br>";
    echo $restatitulo;
    
    $resta = $cuaderno - $lapicera;
    echo $resta;
    print("</br><br>");

    //mostrar por pantalla, la multiplicación.//
    $multiplicaciontitulo = "Multiplicacion <br>";
    echo $multiplicaciontitulo;

    $multiplicacion = $cuaderno * $lapicera;
    echo $multiplicacion;
    print("</br><br>");

    //mostrar por pantalla, la división entera.//
    $divisiontitulo = "Division entera <br>";
    echo $divisiontitulo;

    $division = $cuaderno / $lapicera;
    echo $division;
    print("</br><br>");

    //mostrar por pantalla, el resto de la división entera.//
    $restotitulo = "Resto de la división entera <br>";
    echo $restotitulo;

    $resto = $cuaderno % $lapicera;
    echo $resto;
    print("</br><br>");

    //Transformación de grados Celsius a Fahrenheit, para el valor 20°C.//
    $grados_celsius_a_fahrenheit_titulo = "De 20° Celsius a Fahrenheit <br>";
    echo $grados_celsius_a_fahrenheit_titulo;

    $celcius = 20;
    $Fahrenheit = ($celcius * 9 / 5) + 32;
    echo $Fahrenheit;
    print("</br><br>");

    //Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.//
    $perimetro_rectangulo_titulo = "Perimetro de un Rectangulo <br>";
    echo $perimetro_rectangulo_titulo;
        
    $base = 18;
    $altura = 12;

    $perimetro_rectangulo = $base + $base + $altura + $altura;
    echo $perimetro_rectangulo;
    print("</br><br>");
    
    $area_rectangulo_titulo = "Area de un rectagulo <br>";
    echo $area_rectangulo_titulo;

    $area_rectangulo = $base * $altura;
    echo $area_rectangulo;
    print("</br><br>");

    //Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.//
    $area_perimetro_circulo_titulo = "Perimetro y area de un circulo de 30cm de radio <br>";
    echo $area_perimetro_circulo_titulo;

    $Pi = 3.14;
    $radio = 30;

    $area_perimetro_circulo = $Pi * ($radio * $radio);
    echo $area_perimetro_circulo;
    print("</br><br>");
      
  ?>
    
</body>
</html>
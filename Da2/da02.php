<?php

$nDados = $_POST["nDados"];
$nCaras = $_POST["nCaras"];
$oponente = $_POST["oponente"];
$puntuacion1;
$puntuacion2;
$puntuacion3;
$puntuacionTotal;
$resultado;
$fotoDado1;
$fotoDado2;
$fotoDado3;

if ($nDados == 1){
    if ($nCaras == 4){
        $puntuacion1 = rand(1,4);
        $puntuacionTotal = $puntuacion1;
    }
    if ($nCaras == 6){
        $puntuacion1 = rand(1,6);
        $puntuacionTotal = $puntuacion1;
    }
    if ($nCaras == 8){
        $puntuacion1 = rand(1,8);
        $puntuacionTotal = $puntuacion1;
    }
    if ($nCaras == 10){
        $puntuacion1 = rand(1,10);
        $puntuacionTotal = $puntuacion1;
    }
    if ($nCaras == 12){
        $puntuacion1 = rand(1,12);
        $puntuacionTotal = $puntuacion1;
    }
    if ($nCaras == 20){
        $puntuacion1 = rand(1,20);
        $puntuacionTotal = $puntuacion1;
    }
$fotoDado1 = $nCaras."-".$puntuacion1;
$fotoDado2 = "b";
$fotoDado3 = "b";
}
if ($nDados == 2){
    if ($nCaras == 4){
        $puntuacion1 = rand(1,4);
        $puntuacion2 = rand(1,4);
        $puntuacionTotal = $puntuacion1 + $puntuacion2;
    }
    if ($nCaras == 6){
        $puntuacion1 = rand(1,6);
        $puntuacion2 = rand(1,6);
        $puntuacionTotal = $puntuacion1 + $puntuacion2;
    }
    if ($nCaras == 8){
        $puntuacion1 = rand(1,8);
        $puntuacion2 = rand(1,8);
        $puntuacionTotal = $puntuacion1 + $puntuacion2;
    }
    if ($nCaras == 10){
        $puntuacion1 = rand(1,10);
        $puntuacion2 = rand(1,10);
        $puntuacionTotal = $puntuacion1 + $puntuacion2;
    }
    if ($nCaras == 12){
        $puntuacion1 = rand(1,12);
        $puntuacion2 = rand(1,12);
        $puntuacionTotal = $puntuacion1 + $puntuacion2;
    }
    if ($nCaras == 20){
        $puntuacion1 = rand(1,20);
        $puntuacion2 = rand(1,20);
        $puntuacionTotal = $puntuacion1 + $puntuacion2;
    }
$fotoDado1 = $nCaras."-".$puntuacion1;
$fotoDado2 = $nCaras."-".$puntuacion2;
$fotoDado3 = "b";
}
if ($nDados == 3){
    if ($nCaras == 4){
        $puntuacion1 = rand(1,4);
        $puntuacion2 = rand(1,4);
        $puntuacion3 = rand(1,4);
        $puntuacionTotal = $puntuacion1 + $puntuacion2 + $puntuacion3;
    }
    if ($nCaras == 6){
        $puntuacion1 = rand(1,6);
        $puntuacion2 = rand(1,6);
        $puntuacion3 = rand(1,6);
        $puntuacionTotal = $puntuacion1 + $puntuacion2 + $puntuacion3;
    }
    if ($nCaras == 8){
        $puntuacion1 = rand(1,8);
        $puntuacion2 = rand(1,8);
        $puntuacion3 = rand(1,8);
        $puntuacionTotal = $puntuacion1 + $puntuacion2 + $puntuacion3;
    }
    if ($nCaras == 10){
        $puntuacion1 = rand(1,10);
        $puntuacion2 = rand(1,10);
        $puntuacion3 = rand(1,10);
        $puntuacionTotal = $puntuacion1 + $puntuacion2 + $puntuacion3;
    }
    if ($nCaras == 12){
        $puntuacion1 = rand(1,12);
        $puntuacion2 = rand(1,12);
        $puntuacion3 = rand(1,12);
        $puntuacionTotal = $puntuacion1 + $puntuacion2 + $puntuacion3;
    }
    if ($nCaras == 20){
        $puntuacion1 = rand(1,20);
        $puntuacion2 = rand(1,20);
        $puntuacion3 = rand(1,20);
        $puntuacionTotal = $puntuacion1 + $puntuacion2 + $puntuacion3;
    }
$fotoDado1 = $nCaras."-".$puntuacion1;
$fotoDado2 = $nCaras."-".$puntuacion2;
$fotoDado3 = $nCaras."-".$puntuacion3;
}
if ($puntuacionTotal > $oponente){
    $resultado = 0;
}
else if($puntuacionTotal == $oponente){
    $resultado = 1;
}
else{
    $resultado = 2;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>RESULTADOS</h1>
    <div>
        <img src="img/<?php echo $fotoDado1 ?>.png" height="100px" width="100px">
        <img src="img/<?php echo $fotoDado2 ?>.png" height="100px" width="100px">
        <img src="img/<?php echo $fotoDado3 ?>.png" height="100px" width="100px">
    </div>
    <div class="puntos">
        Puntos obtenidos: <input type="text" value="<?php echo $puntuacionTotal;?>" class="input">
    </div>
    <div>
        <h3>
            <?php
                if ($resultado == 0){
                    echo "GANAS!!";
                }
                else if ($resultado == 1){
                    echo "EMPATAS";
                }
                else{
                    echo "PIERDES!";
                }
            ?>
        </h3>
    </div>
</body>
</html>
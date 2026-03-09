<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 2</title>
</head>
<body>
    <h1>LP3 Aula 2</h1>
    <?php

    $xuxu = 4;
    echo "Isso é um texto: $xuxu <br>";
    echo '$xuxu <br>';
    echo 4 . "<br>";
    echo $xuxu;

    ?>
    
    <h3>Lista</h3>
    <ul>

        <?php
        if ($xuxu % 2 == 0) {
            $resto = "par";
        } else {
            $resto = "impar";
        }
      
        ?>
      
        <?php if($xuxu % 2 == 0) {  ?>
        <li>A variavel xuxu é par</li>
        <li>hurrasco</li>
        <div style="display: flex;">
            <div>
                <p style="color:blue;">Bom dia</p>
            </div>

            <div>
                <h1>Boa tarde</h1>
            </div>
        </div>
        <?php } else { ?>
        <li>A variavel xuxu é impar</li>
        <?php } ?>

    </ul>

</body>
</html>
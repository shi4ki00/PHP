<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 3</title>
</head>
<body>
    <h1>LP3 aula 3</h1>
    

    <div style="display: flex; background-color:antiquewhite; border: 2px; border-style:solid; width: 60px;">
    <div>
    
    <?php 
    /*comentario*/
    # comentario

        for ($i=2; $i <= 10; $i+=2) { 
        echo "$i <br>";
        
        }
    ?></div> <br> <div><?php
        $i = 1;
        
        while($i <= 10){
            echo "$i <br>";


            $i+=2;
        }

    ?>
    </div>
    </div>

    <h4>Multiplos de 3 entre 0 e 100</h4>
    <ul>
    <?php   
    /*
    for($i = 3; $i <= 100; $i+=3){
      
    ?>  <li>Número: <?php echo "$i"; ?></li><?php
        
    }
    */ ?>
    </ul>

    <?php
    for($i = 100;$i >= 0; $i-=5){ 
    echo "<br> $i";

    if($i == 0){
        echo " Acabou!";
    }
    }
    ?>
    <br><br>
    <?php  
    
    $ns = 0;
    $soma = 0;
    $media = 0;
    for($i = 14;$i < 73;$i++){
    $soma = $soma + $i;
    $ns++;

    $media = ($soma / $ns);

    }
    echo "$media";

    ?>
    <br><br>
    <?php 
    
    for ($i=30; $i >= 1; $i--) { 

    if($i % 4 == 0){
    echo "<br> [$i]";
    } else {
        echo "<br> $i";
    }
    }
    ?>





</body>
</html>
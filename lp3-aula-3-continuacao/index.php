<!DOCTYPE html>
<html lang="\Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 4</title>
</head>
<body>
    

    <?php 

    for($i = -10;$i <= 10; $i++){
        echo "$i ";
    }
    
    ?>
    <br><br>
    <?php 
    
    $i = 0;
    $soma = 0;
    while($i <= 500){
        
    if($i % 2 == 1){
        $soma+= $i;
    }       
    
    $i+=3;
    }

    echo "$soma";
    ?>

    <br><br>
    <?php  
    for($i = 100;$i >= 0;$i-=10){
    echo "$i ";

    if($i == 0){
        echo " Acabou!";
    }

    $i-= 10;
    }

    
    ?>
    <br><br>
    <?php 
    
    for($i = 99;$i >= 1;$i -= 2){
    if($i % 5 == 0){
        echo "[$i]";
    } else{
    echo " $i";
    }

    } 
     
    ?>
    <br><br>

    <?php  
    
    for($i = 150;$i >= 0; $i-=5){
        echo "$i ";
    }
    
    ?>

    <br><br>

    <?php  
    $i = 150;
    while($i >= 0){
        echo "$i ";

    $i-= 5;
    }
    
    ?>

</body>
</html>
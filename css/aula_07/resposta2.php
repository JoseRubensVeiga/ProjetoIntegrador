<h3>Calculando...<h3><hr>
<?php
   /* 
   echo "Olá, ";
   echo $_POST['nome'];
   echo " você viveu ";
   echo $_POST["idade"] * 365;
   echo " dias.";
   echo "<br>";
    */
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $anos = $idade * 365;

    echo "Olá, " .$nome. " você viveu " .$anos. " dias<br>";
    if ($idade < 18){
        echo "Menor de idade";
        echo "<br><img src=''>";
    }else {
        echo "Maior de idade";
        echo "<br><img src=''>";
    }
?>
<input type="button" value="Voltar" onclick="window.history.back()">
<h3>Resposta<h3><hr>
<?php
    echo "Meu nome é ";
    echo $_POST['nome'];
    echo "<br>";
    echo "A laranja eu  ";
    echo $_POST['laranja'];
    echo "<br>";
    echo "Meu amigo é o ";
    echo $_POST['amigo'];
    echo "<br>";
?>
<input type="button" value="Voltar" onclick="window.history.back()">
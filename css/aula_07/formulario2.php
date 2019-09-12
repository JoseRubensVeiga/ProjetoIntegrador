<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="receber2.php" method="post">
        <select name="estado">
            <option value="SP">São Paulo</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="SR">São Roque</option>
        </select>
       <input type="submit" value="Enviar">
       <br>
       Mensagem:<br>
       <textarea readonly="readonly" name="texto" style="resize:none;" cols="19" rows="5">
        Sua anta!!!
       </textarea>
       <br>
       <input type="checkbox" checked> Li e concordo.
    </form>
</body>
</html>                                 
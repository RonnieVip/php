<html>
    <head>
        <title>
            Exemplo Form
        </title>
    </head> 
    <body>
        <form method="POST">
            <table>
                <tr>
                    <td>Nome</td> 
                    <td><input type="text"name="nome"></td>
                <tr>
                    <td>Idade</td>
                    <td><input type="number" name="idade"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"></td>
                </tr>
            </table> 
        </form>           
    </body>  
</html>
<?php

$nome  = $_POST["nome"];
$idade = $_POST["idade"];

echo"<br>".$nome;
echo"<br>".$idade;
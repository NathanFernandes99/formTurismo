<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor</title>
    <style>
        body{
            background-image: url(Rio.png);
            background-repeat: no-repeat;
            background-size: 105vw;
            background-attachment: fixed;
            justify-content: center;
            display: flex;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            gap: 80px;
        }
        div{
            border-radius: 50px 0px 50px 0px;
            background-color: white;
            padding: 50px;
            width: 200px;
        }
    </style>
</head>
<body>
    
</body>
</html>

<div>
    <?php
        $regiao = ["Opção inválida","Rio de Janeiro", "Recife", "Gramado", "Curitiba", "Bonito", "Balneário Camboriú"];
        echo "<h3>Escolha a região para passsar suas férias</h3>";
        echo "1. Rio de Janeiro<br>";
        echo "2. Recife<br>";
        echo "3. Gramado<br>";
        echo "4. Curitiba<br>";
        echo "5. Bonito<br>";
        echo "6. Balneário Camboriú<br><br>";
    ?>
    
    <form action="#" method="post">
        <input type="number" name="num" placeholder="1 até 6">
        <input type="submit" name="enviar">
    </form>
    
    <?php
        if(@$_REQUEST['enviar']){
            $escolha = $_POST['num'];
            echo "opcão escolhida foi: <h2>$regiao[$escolha]</h2>";
        }
    ?>
</div>
<div>
    <p>Vetores são como variáveis que podem conter mais de um dado, em apenas uma dimensão (uma linha)</p>
    <p>Geralmente usadas para formulários, onde pode chamar seus dados usando a chave, e o valor:</p>
    <pre>
$chave=[valor1, valor2, valor3...]
$chave[$valor];
    </pre>
    <p>Os valores começam em 0, e podem armazenar tanto números quanto caracteres no mesmo vetor</p>
</div>

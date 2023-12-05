<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Brazil</title>

    <title>Adventure Brazil</title>
    <meta name="description" content="Viaje para qualquer lugar do Brasil com os melhores preços">
    
    <style>
    body{
        display: flex;
        flex-direction: column;
        background-image: url(gramado.jpg);
        background-repeat: no-repeat;
        background-size: 105vw;
        background-attachment: fixed;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        align-items: center;
        gap: 50px;
    }

    h1{
        margin-top: 50px;
        font-size: 80px;
        color: white;
        text-shadow: 2px 2px 5px black;
    }
    
    .navegacao{
        border-radius: 50px 0px 50px 0px;
        display: flex;
        justify-content: space-evenly;
        margin-top: 0px;
        background-color: white;
        width: 600px;
        height: 75px;
        justify-content: center;
        align-items: center;
    }
    li{
        display: inline-block;
        margin: 10px;
        list-style: none;
    }
    a{
        transition: 0.2s;
    }

    a:link:hover{
        color:gray;
    }

    a:link{
        font-size: 20px;
        text-decoration:none;
        color:black;
    }

    a:visited{
        color:black;
    }
    a:visited:hover{
        color:gray;
    }

    .cadastro{
        border-radius: 50px 0px 50px 0px;
        display: flex;
        flex-direction: column;
        padding-top: 10px;
        background-color: white;
        width: 600px;
        height: 1100px;
    }
    input{
        margin: 10px;
    }

    form{
        margin-left: 50px;
        margin-right: 50px;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .dadosCliente{
        margin-top: 50px;
        border-radius: 50px 0px 50px 0px;
        display: flex;
        flex-direction: column;
        padding-top: 20px;
        background-color: white;
        width: 600px;
        height: 1100px;
    }
</style>
</head>

<body>
<h1>Gramado</h1>
<div class="navegacao">
        <a href="index.html">
            <li>Página Inicial</li>
        </a>|</li>
        <a href="pagerio.php">
            <li>Cadastre-se</li>
        </a>
        </a>|</li>
        <a href="vetores.php">
        <li>Vetores</li>
        </a>
    </ul>    
</div>
<div class="cadastro">
   
    <form action="#" method="post">
        <h3>Dados cliente</h3>
        Nome: <input type="text" name="nome"><br>
        Telefone: <input type="number" name="telefone" maxlength="11"><br>
        E-mail: <input type="email" name="email"><br>
        Endereço: <input type="text" name="endereco"><br>
        Data de nascimento: <input type="date" name="dataNasc"><br>
        <div>
            Gênero: <br>
            <input type="radio" name="sexo" value="Masculino">M
            <input type="radio" name="sexo" value="Femenino">F
            <input type="radio" name="sexo" value="Outros">Outros
        </div><br>
        RG: <input type="number" name="rg" maxlength="10"><br>
        CPF: <input type="number" name="cpf" maxlength="11"><br>
        Quantidade de passageiros: <br><br>
        <select name="passageiros" size="3">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select><br>
            <div>
                Trecho: <br>
                <input type="radio" name="trecho" value="Ida">Ida: 
                <input type="radio" name="trecho" value="Volta">Volta: 
                <input type="radio" name="trecho" value="Ida e Volta">Ida e Volta
            </div><br>
        Data saída: <input type="date" name="dataS">
        Data volta: (opcional) <input type="date" name="dataV">
        <div>
            Formas de pagamento: <br>
            Débito: <input type="checkbox" name="pagamento1" id="pagamento1" value="on">
Crédito: <input type="checkbox" name="pagamento2" id="pagamento2" value="on">
PIX: <input type="checkbox" name="pagamento3" id="pagamento3" value="on">
Boleto: <input type="checkbox" name="pagamento4" id="pagamento4" value="on">
        </div>
        <input type="submit" name="enviar">
    </form>
    <br>
    <br>
    <br>
    <div class="dadosCliente">
        <form>
            <?php
                

            if(@$_REQUEST['enviar']){
                $nome = $_POST['nome'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $endereco = $_POST['endereco'];
                $dataNasc = $_POST['dataNasc'];
                $sexo = $_POST['sexo'];
                $rg = $_POST['rg'];
                $cpf = $_POST['cpf'];
                $passageiros = $_POST['passageiros'];
                $trecho = $_POST['trecho'];
                $dataS = $_POST['dataS'];
                $dataV = $_POST['dataV'];
                //------ ECHO ------//
                echo "<h3>Impressão dos dados:</h3>";

                echo "Nome: <br>". $nome;
                echo "<br>";
                echo "<br>";
                echo "Telefone: <br>". $telefone;
                echo "<br>";
                echo "<br>";
                echo "E-mail: <br>". $email;
                echo "<br>";
                echo "<br>";
                echo "Endereço: <br>". $endereco;
                echo "<br>";
                echo "<br>";
                echo "Data de Nacimento: <br>". $dataNasc;
                echo "<br>";
                echo "<br>";
                echo "Sexo: <br>". $sexo;
                echo "<br>";
                echo "<br>";
                echo "RG: <br>". $rg;
                echo "<br>";
                echo "<br>";
                echo "CPF: <br>". $cpf;
                echo "<br>";
                echo "<br>";
                echo "Qtd. Passageiros: <br>". $passageiros;
                echo "<br>";
                echo "<br>";
                echo "Trecho: <br>". $trecho;
                echo "<br>";
                echo "<br>";
                echo "Saída: <br>". $dataS;
                echo "<br>";
                echo "<br>";
                echo "Volta: <br>". $dataV;
                echo "<br>";
                echo "<br>";
                echo "Forma de pagamento: <br>";
                if(@$_REQUEST['pagamento1']){
                    echo "Débito<br>";
                }
                if(@$_REQUEST['pagamento2']){
                    echo "Crédito<br>";
                }
                if(@$_REQUEST['pagamento3']){
                    echo "PIX<br>";
                }
                if(@$_REQUEST['pagamento4']){
                    echo "Boleto <br>";
                }
                echo "<br>";
                echo "Origem ou Destino: Gramado";
                echo "<br>";
                echo "<br>";
            }
            ?>
        </form>
    </div>
</div>
</body>
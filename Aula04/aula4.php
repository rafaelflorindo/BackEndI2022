<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap');
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    text-decoration: none;
    font-size: 1em;
    font-family: 'Roboto', sans-serif;
}
section{
    border: 1px solid black;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    margin: 0 auto;
    margin-top: 10px;
    width: 70%;			
}
h1{
    background-color: black;
    color: white;
    padding: 5px;
    font-size: 1.5em;
    border-bottom: 20px;
}
h2{
    background-color: silver;
    color: #333;
    padding: 5px;
    font-size: 1.5em;
}
p{
    color: #333;
    padding: 15px;
    font-size: 1.5em;
}
</style>

<section>
    <h1>Validações de Variáveis</h1>
    <h2>is_null</h2>
    <p>Verificar se a variável é nula.</p>
    <p>
        <?php
            //validações e function
            $teste = null;
            //$teste = 1;
            echo "Valor = " . $teste . "<br>";
            echo is_null($teste)? "Variável Nula" : "Variável não Nula";
        ?>
    </p>
    <h2>isset</h2>
    <p>Verificar se a variável existe.</p>
    <p>
        <?php
            //$teste = null;
            //$teste = 1;
            echo "Valor = " . $teste . "<br>";
            echo isset($teste)? "Variável existe" : "Variável não existe";
        ?>
    </p>
    <h2>empty</h2>
    <p>Verificar se a variável está vazia.</p>
    <p>
        <?php
            //$teste = null;
            //$teste = 1;
            echo "Valor = " . $teste . "<br>";
            echo empty($teste)? "Variável vazia" : "Variável não vazia";
        ?>
    </p>
</section>
<section>
    <h1>Funcões</h1>
    <h2>Funcões Nativas do PHP</h2>
    <p>
        <a href="https://www.php.net/manual/pt_BR/indexes.functions.php">https://www.php.net/manual/pt_BR/indexes.functions.php</a>
    </p>
    <h2>Funcões declaradas pelo desenvolvedor</h2>
    <p>
        
    </p>
</section>
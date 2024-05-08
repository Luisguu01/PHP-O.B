<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>POO</title>
</head>
<body>
    <div class="container">
    <div class ="row">
        <div class="col p-3 m-3 bg-light">
            <h1>Orientacao a objeto com PHP</h1>
        </div>
    </div>
    <div class="row p-3">
    <div class="col">
        <h3> Classes Em PHP</h3>
        <p>Para declarar uma clase em PHP ultilizamos a palavra reservada class</p>
        <code>
            class Produto{
        public $descricao;
        public $estoque;
        public $preco;
                }
        </code>
        <p>Crie um arquivo Produto.php</p>
        <p>Para usar a classe e necessario importar o arquivo.php da classe com o comando <code>require_once 'Produto.php';</code></p>
        <code>
        <br>$p1 = new Produto;</br>
        <br>   $p1 -> descricao = "BIscoito Salgado"; //Editando valor de um produto</br>
        <br>  $p1 ->estoque = 10;</br>
        <br>   $p1 ->preco = 1.5;</br>
        </code>
        <?php
            require_once 'Produto.php';
            $p1 = new Produto;
            $p1 -> descricao = "Biscoito Salgado"; //Editando valor de um produto
            $p1 ->estoque = 10;
            $p1 ->preco = 1.5;
            print "Produto - descricao: {$p1-> descricao}";
        ?>
        <p>Para Visualizar o valor dos atributos ultiliza-se o nome da variavel -> atributo</p>
        <code>
            print "Produto - descrição: {$p1->descricao}";
        </code>
            <h4>Metodos Da Classe</h4>
            <p>Classe possuem metodos para declara-los necessario a seguinte estrutura</p>
            <code>
            public function aumentarEstoque($unidades){<br>
    if(is_numeric($unidades) AND $unidades > 0){<br>
        $this->estoque += $unidades;<br>
    }<br>
}<br>
            </code>
            <p>Para ultilizar objeto -> metodo(parametro)</p>
            <?php
            print "<p> O estoque do produto e {$p1->estoque}</p>";
            $p1->aumentarEstoque(2);
            print "<p>O novo estoque do produto e {$p1->estoque}</p>";
            ?>
            <h4>Visibilidade</h4>
            <p>Os atributos sao definidos com o operador de visibilidade private para testar vamos criar a classe Produto2 no arquivo Produto2.php</p>
            <p>Para importar a classe use <code>require_once 'Produto2.php'</code></p>
            <?php
            require_once 'Produto2.php';
            $p2 = new Produto2("1", 2, 1.0) ;
            $p2 -> setDescricao("Chocolate 70% Cacau");
            $p2->setEstoque(2);
            $p2->setPreco(7.9);
            print("<p>O objeto p2 possui os seguintes valores</p>");
            print ("<p>Descrição: {$p2->getDescricao()}
            -Estoque: {$p2->getEstoque()}
            -Preço: {$p2->getPreco()}</p>");
            ?>
            <code>
            require_once 'Produto2.php';<br>
            $p2 = new Produto2("1", 2, 1.0)<br>
            $p2 -> setDescricao("Chocolate 70% Cacau");<br>
            $p2->setEstoque(2);<br>
            $p2->setPreco(7.9);<br>
            print("O objeto p2 possui os seguintes valores");<br>
            print ("Descrição: {$p2->getDescricao()}<br>
            -Estoque: {$p2->getEstoque()}<br>
            -Preço: {$p2->getPreco()}");<br>
            </code>
            <h4>Objetos Compostos</h4>
            
    </div>
    </div>
    </div>
</body>
</html>

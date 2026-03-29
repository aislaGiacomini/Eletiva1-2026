<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 3</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercício 3 - Produto</h1>
<?php 
    session_start();
    if(!isset($_SESSION['produto'])){
        $_SESSION['produto'] = [];
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        

        if($nome != ""){
            $_SESSION['produto'][$codigo] = [
                'nome' => $nome,
                'preco' => $preco
            ]; 
        }
    }
    foreach($_SESSION['produto'] as $chave => &$dados){
        if($dados['preco'] > 100){
            $dados['preco'] *= 0.9;
        }
    }
    if(count($_SESSION['produto']) == 5){
        $produto = $_SESSION['produto'];
        uasort($produto, function ($a, $b) {
            return strcmp($a['nome'], $b['nome']);
        });
        foreach($produto as $chave => $valor){
            echo "<p>O produto $chave é: {$valor['nome']} R$ {$valor['preco']} </p>";
        }
    }

        

?>

<form method="post">
<div class="mb-3">
              <label for="codigo" class="form-label">Insira o código do produto</label>
              <input type="number" id="codigo" name="codigo" class="form-control" required="">
            </div><div class="mb-3">
              <label for="produto" class="form-label">Insira o nome do produto</label>
              <input type="text" id="produto" name="nome" class="form-control" required="">
            </div><div class="mb-3">
              <label for="preco" class="form-label">Insira o preco do produto </label>
              <input type="number" id="preco" name="preco" class="form-control" required="">
            </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>
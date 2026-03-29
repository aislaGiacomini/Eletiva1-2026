<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 4</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercício 4 - Item</h1>
<?php 
    session_start();
    if(!isset($_SESSION['item'])){
        $_SESSION['item'] = [];
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        

        if($nome != ""){
          $_SESSION['item'][$nome] = ['preco' => $preco];
        }
    }
    foreach($_SESSION['item'] as $chave => &$dados){
            $dados['preco'] = $dados['preco'] * 1.15;
    }

    if(count($_SESSION['item']) == 3){
        $item = $_SESSION['item'];
        uasort($item, function ($a, $b) {
            return $a['preco'] <=> $b['preco'];
        });
    foreach($item as $chave => $valor){
            echo "<p>O item $chave é: R$ ". ($valor['preco']) . "</p>";
    }
    }
    
?>

<form method="post">
            <div class="mb-3">
              <label for="nome" class="form-label">Insira o nome do produto</label>
              <input type="text" id="nome" name="nome" class="form-control" required="">
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
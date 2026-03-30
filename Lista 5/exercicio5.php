<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 5</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercício 5 - Livro</h1>
<?php 
    session_start();
    if(!isset($_SESSION['livro'])){
        $_SESSION['livro'] = [];
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $titulo = $_POST['titulo'];
        $qtdEstoque = $_POST['qtdEstoque'];
        
        if($qtdEstoque < 5){
            echo "<p> A quantidade do estoque do livro $titulo esta abaixo de 5!</p>";
            $_SESSION['livro'][$titulo] = ['qtdEstoque' => $qtdEstoque];
        }
        else{
          $_SESSION['livro'][$titulo] = ['qtdEstoque' => $qtdEstoque];
        }
    }
  
    

    if(count($_SESSION['livro']) == 5){
        $livro = $_SESSION['livro'];
        ksort($livro);
        foreach($livro as $chave => $valor){
            echo "<p>O livro $chave tem " . ($valor['qtdEstoque']) . " livros em estoque</p>";
        }
    }
    
?>

<form method="post">
            <div class="mb-3">
              <label for="titulo" class="form-label">Insira o titulo do livro</label>
              <input type="text" id="titulo" name="titulo" class="form-control" required="">
            </div><div class="mb-3">
              <label for="qtdEstoque" class="form-label">Insira o a quantidade de livros </label>
              <input type="number" id="qtdEstoque" name="qtdEstoque" class="form-control" required="">
            </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>
<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 8</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercicio 8</h1>
<form method="post">
<div class="mb-3">
              <label for="valorBase" class="form-label">Insira o valor da base do retângulo </label>
              <input type="number" id="valorBase" name="valorBase" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valorAlt" class="form-label">Insira o valor da altura do retângulo</label>
              <input type="number" id="valorAlt" name="valorAlt" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php   
    if($_SERVER ['REQUEST_METHOD'] == 'POST'){
        $valorBase = $_POST['valorBase'];
        $valorAlt = $_POST['valorAlt'];

        $valorArea = $valorAlt * $valorBase;
        echo "O valor da area do retangulo é: $valorArea";
    }
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>
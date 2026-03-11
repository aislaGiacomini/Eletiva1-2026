<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 1</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercício 1</h1>
<form method="post">
<div class="mb-3">
              <label for="num1" class="form-label">Insira um numero </label>
              <input type="number" id="num1" name="num1" class="form-control" required="">
            </div><div class="mb-3">
              <label for="num2" class="form-label">Insira um numero</label>
              <input type="number" id="num2" name="num2" class="form-control" required="">
            </div><div class="mb-3">
              <label for="num3" class="form-label">Insira um numero</label>
              <input type="number" id="num3" name="num3" class="form-control" required="">
            </div><div class="mb-3">
              <label for="num4" class="form-label">Insira um numero </label>
              <input type="number" id="num4" name="num4" class="form-control" required="">
            </div><div class="mb-3">
              <label for="num5" class="form-label">Insira um numero </label>
              <input type="number" id="num5" name="num5" class="form-control" required="">
            </div><div class="mb-3">
              <label for="num6" class="form-label">Insira um numero</label>
              <input type="number" id="num6" name="num6" class="form-control" required="">
            </div><div class="mb-3">
              <label for="num7" class="form-label">Insira um numero </label>
              <input type="number" id="num7" name="num7" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $num4 = $_POST['num4'];
        $num5 = $_POST['num5'];
        $num6 = $_POST['num6'];
        $num7 = $_POST['num7'];

        $menor = 99999;

        if($num1 < $menor){
            $menor = $num1;
        }
        if($num2 < $menor){
            $menor = $num2;
        }
        if($num3 < $menor){
            $menor = $num3;
        }
        if($num4 < $menor){
            $menor = $num4;
        }
        if($num5 < $menor){
            $menor = $num5;
        }
        if($num6 < $menor){
            $menor = $num6;
        }
        if($num7 < $menor){
            $menor = $num7;
        }
        echo "O menor numero é: $menor";
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>
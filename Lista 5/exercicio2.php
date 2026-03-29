
<?php
    session_start();
    if(!isset($_SESSION['alunos'])){
        $_SESSION['alunos'] = [];
    }



    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nomes = $_POST['nome'];
        $notas1 = $_POST['nota1'];
        $notas2 = $_POST['nota2'];
        $notas3 = $_POST['nota3'];

        $alunos = $_SESSION['alunos'];

        for($i = 0; $i < count($nomes); $i++){
        $nome = trim($nome[$i]);
        $nota1 = (float)$notas1[$i];
        $nota2 = (float)$notas2[$i];
        $nota3 = (float)$notas3[$i];

        if($nome !== ""){
            $media = ($nota1 + $nota2 + $nota3) / 3;
            $alunos[$nome] = $media;
        }
        }

       $_SESSION['alunos'] = $alunos;
    }
    $alunos = $_SESSION['alunos'];
    ksort($alunos);
    foreach($alunos as $chave => $valor){
        echo "<p>A media do aluno $chave é: $valor </p>";
    }

?>

<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercicio 2 - Notas dos alunos</h1>
        
        <form method="post">
            <?php for($i = 0; $i < 5; $i++): ?>
            <div class="mb-3">
              <label for="nome" class="form-label">Insira o nome do aluno</label>
              <input type="text" id="nome" name="nome[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="nota1" class="form-label">Insira a nota 1</label>
              <input type="number" id="nota1" name="nota1[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="nota2" class="form-label">Insira a nota 2</label>
              <input type="number" id="nota2" name="nota2[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="nota3" class="form-label">Insira a nota 3</label>
              <input type="number" id="nota3" name="nota3[]" class="form-control" required="">
            </div>
            <p>-----------------------------------------------------------------------------</p>
            <?php endfor ?>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>
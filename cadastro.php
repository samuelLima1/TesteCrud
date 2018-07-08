<?php

  include "conexao.php"
  
?>

<html lang="pt-br">

<head> 
<title> Criando CRUD para avaliação </title>
</head>
<body>

  <h1>Aluno:</h1>
  
  <form method="POST" action="pagehome.php">
  <div>
    <label>ID do Aluno:</label>
    <label>Nome Completo:</label>
    <label>Data de Nascimento:</label>
    <label>Logradouro:</label>
    <label>Numero:</label>
    <label>Bairro:</label>
    <label>Cidade:</label>
    <label>Cidade:</label>
    <label>Estado:</label>
    <label>Cep:</label>
    <label>Data de Criação:</label>
    <label>ID do Curso:</label>
  </div>
    <br/><br/>
  
    <h1>Curso:</h1>
    
    <form method="POST" action="pagehome.php">
  <div>
    <label>ID do Curso:</label>
    <label>Nome do Curso:</label>
    <label>Data de Criação:</label>
    <label>ID do Professor:</label>
  </div>  
</body>

</html>

<?php

mysqli_close($con);

?>

<?php
include "conexao.php"
?>

<html lang="pt-br">

<head> 

<title> Criando CRUD para Teste Prático </title>

</head>

<body>

  <h1>Aluno:</h1>
  
 <form method="POST" action="pagehome.php">
   
<div>
		
	<fieldset>
    <label>ID do Aluno:</label> <input type="number" id="idAluno" name="idAluno"/><br/>
    <label>Nome Completo:</label> <input type="text" id="nomeAluno" name="nomeAluno"/><br/>
    <label>Data de Nascimento:</label> <input type="date" id="dataNascimento" name="dataNascimento"/><br/>
    <label>Logradouro:</label> <input type="text" id="logradouro" name="logradouro"/><br/>
    <label>Numero:</label> <input type="number" id="numero" name="numero"/><br/>
    <label>Bairro:</label> <input type="text" id="bairro" name="bairro"/><br/>
    <label>Cidade:</label> <input type="text" id="cidade" name="cidade"/><br/>
    <label>Estado:</label> <input type="text" id="estado" name="estado"/><br/>
    <label>Cep:</label> <input type="number" id="cep" name="cep"/><br/>
    <label>Data de Criação:</label> <input type="date" id="dataCriacao" name="dataCriacao"/><br/>
    <label>ID do Curso:</label> <input type="number" id="idCurso" name="idCurso"/><br/>
	</fieldset>
  </div>
   
    <br/>
     
<h1>Curso:</h1>

    <form method="POST" action="pagehome.php">

  <div>

    <fieldset>
    <label>ID do Curso:</label> <input type="number" id="idCurso" name="idCurso"/>
    <label>Nome do Curso:</label> <input type="text" id="nomeCurso" name="nomeCurso"/>
    <label>Data de Criação:</label> <input type="date" id="dataCriacaoCurso" name="dataCriacao"/>
    <label>ID do Professor:</label> <input type="number" id="idProfessor" name="idProfessor"/>
    </fieldset>

  </div>

<h1>Professor:</h1>  
      
<form method="POST" action="pagehome.php">

  <div>
   
 	<fieldset>
    <label>ID do Professor:</label> <input type="number" id="idProfessor" name="idProfessor"/>
    <label>Nome do Professor:</label> <input type="text" id="nomeProfessor" name="nomeProfessor"/>
    <label>Data de Criação:</label> <input type="date" id="dataCriacaoProfessor" name="dataCriacaoProfessor"/>
    <label>Data de nascimento:</label> <input type="date" id="dataNascimentoProfessor" name="dataNascimentoProfessor"/>
	</fieldset>

  </div>
	      
</body>

</html>

<?php
  
mysqli_close($con);

?>

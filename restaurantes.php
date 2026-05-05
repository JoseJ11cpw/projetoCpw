<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A ilha dos Açores</title>
    <link rel="icon" href="imagens/favicon.ico" type="image/ico"> <!--Favicon-->
</head>
<body>
    <?php include 'base de dados/conexao.php'; ?>
<div class="container-fluid">
    <div class="col-md-12 column" id="header">
        <?php include 'header.php';?>
    </div>
</div>
<br><br>



<input type="text" id="pesquisa" placeholder="Pesquisar...">
<div id="resultados"></div>

  <select id="filtroLocal">
    <option value="todos">Filtrar</option>
    <option value="São Miguel">São Miguel</option>
    <option value="Ribeira Grande">Ribeira Grande</option>
    <option value="Lagoa">Lagoa</option>
  </select>
</div>

<br><br>

<div class="row">
    <?php 
    $sql = "SELECT nome, localizacao, imagem FROM restaurantes";  
        // Execute the SQL query
        $result = $conn->query($sql);
     

// Process the result set
if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {?>
    <div class="card custom-card item" style="width: 34rem; height : 15rem; ">
        <img class="custom-card-img" src="imagens/imgRestaurantes/<?php echo $row['imagem'];?>" alt="Card image cap">
    <div class="custom-card-body">
        <h1 class="nome"><?php echo $row['nome'];?></h1>
        <p><?php echo $row['localizacao'];?></p>
    </div>

</div>
<?php
}

}
else
    {
        echo "Sem resultados";
    }
$conn->close();

    ?>
    

    <?php include 'footer.php';?>
</div>

<script src="js/pesquisa.php"></script>
</body>
</html>
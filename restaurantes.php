<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A ilha dos Açores</title>
    <link rel="icon" href="Imagens/favicon.ico" type="image/ico"> <!--Favicon-->
</head>
<body>
    <?php include 'base de dados/bd.php'; ?>
    <?php include 'header.php';?>
    
    <?php 
    $sql = "SELECT nome, localização FROM restaurantes";  
        // Execute the SQL query
        $result = $conn->query($sql);

// Process the result set
if ($result->num_rows > 0) {
  // Output data of each row?>
  <table>
  <?php
  while($row = $result->fetch_assoc()) {?>
    <tr>
        <th>
            <?php echo "Nome";?>
        </th>
        <th> 
            <?php echo "Morada";?>
        </th>
    </tr>
    <tr>
        <td>
            <?php echo $row["nome"];?>
        </td>    
        <td>
            <?php echo $row["localização"];?>
        </td>
    </tr>
  <?php
    }
    ?>
  </table>
<?php
}
else {
  echo "0 results";
}

$conn->close();
    
    
    
    
    ?>

    <?php include 'footer.php';?>

</body>
</html>
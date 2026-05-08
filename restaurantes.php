<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A ilha dos Açores</title>
    <link rel="icon" href="imagens/favicon.ico" type="image/ico">
</head>
<body>

<?php include 'base de dados/conexao.php'; ?>

<div class="container-fluid">
    <div class="col-md-12 column" id="header">
        <?php include 'header.php'; ?>
    </div>
</div>

<br><br>

<form method="GET" action="" class="search-form">

    <div class="search-box">
        <input type="text" id="searchInput" name="pesquisa"
               placeholder="Pesquisar restaurante..."
               value="<?php echo $_GET['pesquisa'] ?? ''; ?>">

        <span id="clearSearch" class="clear-btn">✖</span>
    </div>

    <button type="submit">Pesquisar</button>
</form>

<br>

<div class="row">

<?php

$pesquisa = $_GET['pesquisa'] ?? '';

if (!empty($pesquisa)) {

    $sql = "SELECT nome, localizacao, imagem 
            FROM restaurantes 
            WHERE nome LIKE ?";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Erro no prepare: " . $conn->error);
    }

    $param = "%$pesquisa%";
    $stmt->bind_param("s", $param);

    $stmt->execute();
    $result = $stmt->get_result();

} else {

    $sql = "SELECT nome, localizacao, imagem FROM restaurantes";
    $result = $conn->query($sql);
}

/* =========================
   MOSTRAR CARDS
========================= */

if ($result && $result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        ?>

        <div class="card custom-card item" style="width: 34rem; height: 15rem;">
            <img class="custom-card-img"
                 src="imagens/imgRestaurantes/<?php echo $row['imagem']; ?>"
                 alt="Card image">

            <div class="custom-card-body">
                <h1 class="nome"><?php echo $row['nome']; ?></h1>
                <p><?php echo $row['localizacao']; ?></p>
            </div>
        </div>

        <?php
    }

} else {
    echo "Sem resultados";
}

$conn->close();

?>

<?php include 'footer.php'; ?>

</div>
<script src="js/pesquisa.js"></script>

</body>
</html>
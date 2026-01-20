<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A ilha dos Açores</title>
    <link rel="icon" href="Imagens/favicon.ico" type="image/ico"> <!--Favicon-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> <!--Ligar Bootsrap-->
    <link rel="stylesheet" href="css/styles.css"> <!-- Ligar ao Css-->
    <link rel="stylesheet" href="css/stylesNav.css">
</head>

<body>
<div class="container">    
<div class="row clearfix">
    <div class="col-md-12 column" id="header">
        <?php include 'header.php';?>
    </div>
</div>

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/imgAçores1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/imgAçores2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/imgAçores3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/imgAçores4.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--CARROSSEL-->

    <br><br>

    <div class="row">
        <div class="col-md-4">
            <p>Restaurantes</p>
        </div>
        <div class="col-md-4">
            <p>Alojamentos</p>
        </div>
        <div class="col-md-4">
            <p>Experiências</p>
        </div>
    </div>


    <br><br>

    <div id="footer">
        <?php include 'footer.php';?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script> <!--Ligar Bootsrap-->
    </script>

</body>
</html>
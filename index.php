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
    <link rel="stylesheet" href="css/fontes.css"> <!-- Ligar ao Css onde tem as fontes-->
</head>
<body>

<div class="container-fluid">
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

    <br><br><br>
    <section class="secTexto">
        <div class="Overlay">
        <div class="Texto">
            <h1>Tradições e Cultura da ilha dos Açores</h1>
            <p>Os Açores são um arquipélago português situado no meio do Atlântico, conhecido pelas suas paisagens deslumbrantes, vulcões majestosos e uma cultura única que reflete séculos de história e tradição. Cada ilha tem o seu próprio encanto, mas existe um fio condutor que une todo o arquipélago: a valorização da natureza, da gastronomia e das tradições comunitárias.
<br>A cultura açoriana destaca-se pela música, dança e festas tradicionais, que celebram a vida comunitária e as raízes locais. A gastronomia, ligada à terra e ao mar, é rica e autêntica, com pratos e produtos típicos que encantam visitantes e locais. O artesanato e as festividades populares completam esta identidade vibrante, mostrando uma cultura viva, orgulhosa e cheia de história.</p>
        </div>
    </section>

    <br><br><br>

    <div class="row">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="imagens/restaurante.png" alt="Card image cap">
            <div class="card-body">
                <a class="card-text" href="restaurantes.php"><p>Restaurantes</p> </p></a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="imagens/alojamentos.png" alt="Card image cap">
            <div class="card-body">
                <a class="card-text" href="restaurantes.php"><p>Alojamentos</p> </p></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="imagens/visitar.png" alt="Card image cap">
            <div class="card-body">
                <a class="card-text" href="restaurantes.php"><p>Visitar</p> </p></a>
            </div>
        </div>
        
    </div>


    <br><br>

    <div class="footer">
        <?php include 'footer.php';?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script> <!--Ligar Bootsrap-->
    </script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bienvenida</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    *{
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }
    header {
        background-color: gainsboro;
        color: black;
        padding: 10px 0;
        text-align: center;
        }
    nav {
        margin-top: 10px;
        }
    nav a {
        color: white;
        text-decoration: none;
        margin: 0 15px;
        }
    main {
        padding: 20px;
        }
    .section {
        margin-bottom: 30px;
        border-bottom: 1px solid #ccc;
        padding-bottom: 20px;
        }
    .cards-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        }
    .card {
        border: 1px solid #ccc;
        border-radius: 10px;
        overflow: hidden;
        width: 300px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    .card-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        }
    .card-body {
        padding: 15px;
        }
    .card-title {
        font-size: 1.5em;
        margin: 0 0 10px;
        }
    .card-text {
        font-size: 1em;
        margin: 0 0 15px;
        }
    .caja {
        border: 1px solid #ccc;
        overflow: hidden;
        width: 300px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
        }
    #gruposProducto {
        background-color: whitesmoke;

    }
    #FAQS {
        background-color: white;
        
    }
    #contacto {
        background-color: white;
        
    }
    </style>
</head>

<body>

<?php
/*session_start();

if(!isset($_SESSION['user'])){
    echo " la session no ha sido iniciada";
    header("Location: ../index.php");
    exit();
}

$user = $_SESSION['user'];*/

if (($_SERVER['REQUEST_METHOD'] == 'GET') && isset($_GET['error'])) { // Validaciones

    if ( $_GET['error'] == 'Printed') {
        echo '<div class="alert alert-success" role="alert">Se ha generado el listado en DIR Prints.pdf.</div>';
    };
    if ( $_GET['error'] == 'FailedStmt') {
        echo '<div class="alert alert-success" role="alert">No se ha podido hacer la actualizacion.</div>';
    };
    
};

$title="Bienvenid@ a nuestra tienda Outlet";
include "../includes/header.php"; 

?>
<main>
<section id="inicio" class="section">
        <h2>Inicio</h2>
        <p>Poner aqui la navegación.</p>
</section>

<section id="gruposProducto" class="section">
        <h2>Productos</h2> // carrusel
        <div class="cards-container">
                <div class="card">
                    <img src="../img/chica.jpeg" alt="ImagenCamarasANA" class="card-img">
                    <div class="card-body">
                        <h3 class="card-title">Cámaras Analógicas</h3>
                        <p class="card-text">Contenido de ejemplo para el grupo de  productos camaras. Esto es una vista previa.</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/chica2.jpeg" alt="ImagenCamarasDIG" class="card-img">
                    <div class="card-body">
                        <h3 class="card-title">Cámaras Digitales</h3>
                        <p class="card-text">Contenido de ejemplo para el grupo de productos de Cámaras Digitales. Esto es una vista previa.</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/chico.jpeg" alt="ImagenObjetivosMAN" class="card-img">
                    <div class="card-body">
                        <h3 class="card-title">Objetivos Manuales</h3>
                        <p class="card-text">Contenido de ejemplo para el grupo de objetivos manuales. Esto es una vista previa.</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/chica.jpeg" alt="ImagenObjetivosAUT" class="card-img">
                    <div class="card-body">
                        <h3 class="card-title">Objetivos automáticos</h3>
                        <p class="card-text">Contenido de ejemplo para el grupo de objetivos automáticos. Esto es una vista previa.</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/chica2.jpeg" alt="ImagenFiltros" class="card-img">
                    <div class="card-body">
                        <h3 class="card-title">Filtros</h3>
                        <p class="card-text">Contenido de ejemplo para el grupo de Filtros. Esto es una vista previa.</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/chico.jpeg" alt="ImagenSoportes" class="card-img">
                    <div class="card-body">
                        <h3 class="card-title">Tripodes y Soportes</h3>
                        <p class="card-text">Contenido de ejemplo para el grupo de Soportes. Esto es una vista previa.</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/chica.jpeg" alt="ImagenAdaptadores" class="card-img">
                    <div class="card-body">
                        <h3 class="card-title">Adaptadores</h3>
                        <p class="card-text">Contenido de ejemplo para el grupo de Adaptadores. Esto es una vista previa.</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/chica2.jpeg" alt="ImagenBaterias" class="card-img">
                    <div class="card-body">
                        <h3 class="card-title">Baterias</h3>
                        <p class="card-text">Contenido de ejemplo para el grupo de productos de Baterias. Esto es una vista previa.</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/chico.jpeg" alt="ImagenCables" class="card-img">
                    <div class="card-body">
                        <h3 class="card-title">Cables</h3>
                        <p class="card-text">Contenido de ejemplo para el grupo de Cables. Esto es una vista previa.</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/chica.jpeg" alt="ImagenBolsas" class="card-img">
                    <div class="card-body">
                        <h3 class="card-title">Bolsas y Fundas</h3>
                        <p class="card-text">Contenido de ejemplo para el grupo de bolsas y fundas. Esto es una vista previa.</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/chica2.jpeg" alt="ImagenAccesorios" class="card-img">
                    <div class="card-body">
                        <h3 class="card-title">Accesorios</h3>
                        <p class="card-text">Contenido de ejemplo para el grupo de Accesorios. Esto es una vista previa.</p>
                        <a href="#">Leer más</a>
                    </div>
        </div>
    </section>

    <section id="FAQS" class="section">
            <h2>FAQS</h2>
            <p>Aquí van tres divs, para explicar cuanto tarda en llegar un pedido, la politica de devoluciones, o el medio de pago.</p>
            <div class="cards-container">
                <div class="caja">

                    <div class="card-body">
                        <h3 class="card-title">Cuanto tarda en llegar un pedido</h3>
                        <p class="card-text">Aqui se explicará como se hacen los envios. Esto es una vista previa.</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
                <div class="caja">

                    <div class="card-body">
                        <h3 class="card-title">Política de devoluciones</h3>
                        <p class="card-text">Aqui se explicará la política de devoluciones. Esto es una vista previa.</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
                <div class="caja">

                    <div class="card-body">
                        <h3 class="card-title">Medios de Pago</h3>
                        <p class="card-text">Aqui se explicará cómo hacer el pago. Esto es una vista previa.</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
    </section>

    <section id="contacto" class="section">
            <h2>Contacto</h2>
            <p>Aqui se  agregará un enlace de email y un enlace para chat.</p>
    </section>
    </main>
</body>
</html>
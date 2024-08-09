<?php 

$title="Tienda Productos";
require "../model/Connection.php";
require "../model/Producto.php";
$producto = new Producto();
$categorias = $producto->categorias();

if (isset ($_GET['id'])){
    $id = $_GET['id'];
    $producto->setId($id);
    $result = $producto->leer();
    $nombre = $descripcion= $URLFoto = $AlTFoto = $categoria = "";
    $precioUnitario = $fecha = $nombreCat = "";

    if ($result) {
        $nombre = $producto->getNombre();
        $descripcion = $producto->getDescripcion();
        $URLFoto = $producto->getURLFoto();
        $ALTFoto = $producto->getAlTFoto();
        $categoria = $producto->getCategoria();
        $precioUnitario = $producto->getPrecioUnitario();
        $fecha = $producto->getFecha();
        $nombreCat = $producto->getNombreCategoria();
        $ubicacion = $producto->getUbicacion();
        }
    };
if (isset($_POST['actualizar'])){
    print_r ($_POST);
    $producto->setNombre($_POST['nombre']);
    $producto->setDescripcion($_POST['descripcion']);
    $producto->setPrecioUnitario($_POST['precioUnitario']);
    $producto->setURLFoto($_POST['URLFoto']);
    $producto->setALTFoto($_POST['ALTFoto']);
    $producto->setCategoria($_POST['categoria']);
    $producto->setUbicacion($_POST['ubicacion']);

    $producto->actualizar();

    echo "<script>  alert('Datos actualizados');
                document.location='../view/listadoProductos.php';
    </script>";
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tienda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>




<?php include "../includes/header.php"; ?>
<h2>Actualizar producto</h2>
<div class="container mt-3">
    
    <form action="" method="post">
        <div class="mb-3">
            <label for="nombre">Nombre Producto:</label>
            <input type="text" class="form-control" id="nombre" placeholder="Introduzca nombre producto" name="nombre" value="<?=$nombre;?>" >
        </div>
        <div class="mb-3">
            <label for="descripcion">Descripcion:</label>
            <input type="text" class="form-control" id="descripcion" placeholder="Introduzca descripcion" name="descripcion" required value="<?=$descripcion;?>">
        </div>
        <div class="mb-3">
            <label for="precio">Precio Unitario:</label>
            <input type="numeric" class="form-control" id="precio" placeholder="Introduzca Precio" name="precioUnitario" required value="<?=$precioUnitario;?>">
        </div>
        <div class="mb-3">
            <label for="URLFoto">URLFoto:</label>
            <input type="text" class="form-control" id="URLFoto" placeholder="Introduzca URLFoto" name="URLFoto" required value="<?=$URLFoto;?>">
        </div>
        <div class="mb-3">      
            <label for ="ALTFoto">ALTFoto</label>
            <input type="text" class="form-control" id="ALTFoto" placeholder="Introduzca texto para Foto" name="ALTFoto" required value="<?=$ALTFoto;?>">
        </div>
        
        <div class="mb-3">      
            <label for ="ubicacion">Ubicacion (*Codigo de contenedor) </label>
            <input type="text" class="form-control" id="ubicacion" placeholder="Introduzca Ubicacion" name="ubicacion" required>
        </div>
        <div>
            <label for ="categoria">Categoria</label>    
            <select id= "categoria" name="categoria" >
<?php
                foreach ($categorias as $cat)
                {
                    if ($cat['id'] == $categoria) {
                        echo "<option value='$cat[id]' selected='selected'>$cat[nombre]</option>";
                    } else {
                         echo "<option value='$cat[id]'>$cat[nombre]</option>";
                    }

                }
?>
            </select>
            
        </div>
        <br>
        <button name="actualizar" type="submit" class="btn btn-primary" value="Actualizar">Submit</button>
    </form>
</div>

<?php include "../includes/footer.php"; ?>

</body>
</html>
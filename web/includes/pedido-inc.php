<?php

session_start();

print_r($_SESSION);

if (!isset ($_SESSION['user'])){
            header("Location: ../view/bienvenida.php?error='noLogged'");
            // " No es posible comprar sin estar identificado";
            exit();
        }
require "../model/Connection.php";
require "../model/Carrito.php";
require "../controler/carritoContr.php";
require "../model/Pedido.php";
require "../controler/pedidoContr.php";


if (isset ($_GET['id'])){

    $id = $_GET['id']; // identificador del carrito
    $carrito = new CarritoContr ($id,"",$_SESSION['userId']); // comprueba datos correctos

    $result = $carrito->compruebaUserCarrito();
    if (!$result) {
        header("Location: ../view/bienvenida.php?error='internalError'");
        echo " El carrito no corresponde al user";
        exit();
    };

    
// crea un pedido 
    $pedido = new PedidoContr("","",$_SESSION['userId']);
    
    $pedido->crearPedido(); // guarda el pedidoid creado en la variable $this->pedidoid
    echo "numero de pedido creado ". $pedido->getPedidoid();

    $lineas = $carrito->traerLineas();
    foreach ($lineas as $linea) {
    
        $pedido->setproductoid($linea['productos_pro_id']);
        $pedido->setcantidad($linea['lincar_cantidad']);
        $pedido->setPrecioUnitario($linea['lincar_precioUnitario']);
        $pedido->crearLinea();
        // ??actualizar existencias
        };
    
    
    $carrito->borrarCarrito(); // Borra el carrito

    echo "  <script>  
                 alert('Datos guardados correctamente');
            </script>";
    header("Location: ../view/verProductos.php?info=deliver");     
}

?>
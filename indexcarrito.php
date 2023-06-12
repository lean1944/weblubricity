<?php   
include 'Configuracion.php';

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Carrito de Compras</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/fondo.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="./carrito/jquery,min.js"></script>
    <script src="./carrito/bootstraflp.min.js"></script>

    <style>
        .container {
    padding: 20px; 
    }

    .cart-link {
    width: 100%;
    text-align: right;
    display: block;
    font-size: 50px;
    color: #000;
    }

    .panel-body{
        color: white;
        background: #593196;
    }
   .caption{
    background: #c9a6fd;
    }
    </style>
   
</head>

<body>

    
    <div class="container">
        <div class="panel panel-default">
            

            <div class="panel-body">
                <a href="productos.php " class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Volver a vista de productos</a>
                <center><h1>TIENDA DE PRODUCTOS</h1></center>
                <a href="VerCarta.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                <div id="products" class="row list-group">
                    <div cllas="row">
                    <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM mis_productos ORDER BY id DESC LIMIT 100");
                    if ($query->num_rows > 0) {
                        while ($row = $query->fetch_assoc()) {
                    ?>
                            <div class="item col-lg-4">
                                <div class="thumbnail">
                                    <div class="caption">
                                        
                                        <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                                        <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="lead"><?php echo '$' . $row["price"] . ' AR'; ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>">Enviar al Carrito</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        <?php }
                    } else { ?>
                        <p>Producto(s) no existe.....</p>
                    <?php } ?>
                </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
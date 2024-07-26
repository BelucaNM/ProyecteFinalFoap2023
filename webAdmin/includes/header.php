<header>
   <div id="header" class = "container mt-3 clearfix">
        <span class="h1 float-start">obJEtivos</span>     
        <span class="float-start"><img id="logo" src="..\img\logo.jpg" class = "rounded-circle"></span>
        <span class="h1 float-end"><?=$title;?></span>
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">

           <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav  me-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href="tiendas.php">Tiendas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pedidos.php">Pedidos</a>
                </li>
            </ul>
            <div class="d-flex">
                <ul class="navbar-nav  me-auto">
                
                   <li class="nav-item">
                        <a class="nav-link" href="usuarios_login.php">Iniciar Session</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="../includes/logout.php">Logout</a>
                    </li>
                </ul>


            </div>
        </div>
    </div>
</nav>

</header>
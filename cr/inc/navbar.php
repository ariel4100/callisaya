<?php
session_start();
?>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <!-- Navbar brand -->
                    <a class="navbar-brand" href="#">CR</a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PRODUCTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=#"">CONTACTO</a>
                    </li>
                    <?php if(isset($_SESSION['estado']))
                    {
                    ?>                  
                    <!-- Basic dropdown -->
                    <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Configuracion</button>

                        <div class="dropdown-menu">
                            <?php if($_SESSION['estado'] == 1)
                            {
                            ?> 
                            <a class="dropdown-item" href="#">Config</a>
                            <?php
                            }
                            ?>
                            <a class="dropdown-item" href="#">Mi cuenta</a>
                            <a class="dropdown-item" href="view/cerrarsession.php">Cerrar session</a>
                        </div>
                    </div>
                                    
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!-- Collapsible content -->
        </div>
    </nav>
<!--/.Navbar-->
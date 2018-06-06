<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CR - <?php echo $this->title ?></title>
    <?php include_once 'inc/link.php'; ?>
</head>
<body>
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
                <li class="nav-item <?php //echo $pagina == 'Index' ? 'active' : '' ?>">
                    <a class="nav-link" href="index.php?c=Usuarios&a=Index">INICIO</a>
                </li>
                <li class="nav-item <?php//echo $pagina == 'nosotros' ? 'active' : '' ?>">
                    <a class="nav-link" href="?c=Usuarios&a=nosotros">NOSOTROS</a>
                </li>
                <li class="nav-item <?php //echo $pagina == 'producto' ? 'active' : '' ?>">
                    <a class="nav-link" href="?c=Usuarios&a=producto">PRODUCTOS</a>
                </li>
                <li class="nav-item <?php //echo $pagina == 'contacto' ? 'active' : '' ?>">
                    <a class="nav-link" href="?c=Usuarios&a=contacto">CONTACTO</a>
                </li>
                <?php if(isset($_SESSION['estado']))
                    {
                    ?>                  
                    <!-- Basic dropdown -->
                    <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopuc="true" aria-expanded="false">Configuracion</button>

                        <div class="dropdown-menu">
                            <?php if($_SESSION['estado'] == 1)
                            {
                            ?> 
                            <a class="dropdown-item" href="?c=Usuarios&a=">Config</a>
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

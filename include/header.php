<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$file_name = $components[3];
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicous</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if ($file_name == "index.php" || $file_name == "") {
                                        echo "active";
                                    } ?>"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item <?php if ($file_name == "menu.php") {
                                        echo "active";
                                    } ?>"><a href="menu.php" class="nav-link">Menu</a></li>
                <li class="nav-item <?php if ($file_name == "services.php") {
                                        echo "active";
                                    } ?>"><a href="services.php" class="nav-link">Services</a></li>
                <li class="nav-item <?php if ($file_name == "about.php") {
                                        echo "active";
                                    } ?>"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item <?php if ($file_name == "contact.php") {
                                        echo "active";
                                    } ?>"><a href="contact.php" class="nav-link">Contact Info</a></li>
            </ul>
        </div>
    </div>
</nav>
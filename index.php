<?php

include_once("includes/header.php");
if(isset ($_GET['pagina'])) {
    $paginas = $_GET["pagina"];
    if($paginas == "inicio") {
    include_once("pages/home.php");
    } else if ($paginas == "blog") {
        include_once("pages/blog.php");
    } else if ($paginas  == "contato") {
        include_once("pages/contact.php");
    } else if ($paginas  == "sobre") {
        include_once("pages/fullwidth.php");
    } 
} else {
    include_once("pages/home.php");
}
include_once("includes/footer.php");

<?php
include_once("includes/header.php");

$_GET["pagina"];
if($_GET["pagina"] == "inicio") {
include_once("pages/home.php");
} else if ($_GET["pagina"] == "blog") {
    include_once("pages/blog.php");
} else if ($_GET["pagina"] == "contato") {
    include_once("pages/contact.php");
} else if ($_GET["pagina"] == "sobre") {
    include_once("pages/fullwidth.php");
}

include_once("includes/footer.php");

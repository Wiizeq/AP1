<!DOCTYPE html>
<html lang="fr-FR">
<heade>
    <meta charset="utf-8" />
    <title>CESI AP - Blog/e-commerce</title>
    <link rel="stylesheet" href="./assets/css/style.css"
</heade>
<body>
    <div id="container">





<?php
include "./includes/header.php";

$page = $_GET['page'] ?? "";
$page = "./includes/" . $page . ".inc.php";

$files = glob("./includes/*.inc.php");

if (in_array($page, $files))
    include $page;
else
    include "./includes/home.inc.php";


include "./includes/footer.php";

?>

</body>
</html>




<?php 
require_once ('util/db_manager.php');

if (isset($_POST["cara1"])) {
    echo "Me encantó";
    rating(5);
  }

if (isset($_POST["cara2"])) {
    echo "Me gustó";
    rating(4);
}

if (isset($_POST["cara3"])) {
    echo "Estuvo regular";
    rating(3);
}

if (isset($_POST["cara4"])) {
    echo "No me gustó mucho";
    rating(2);
}
if (isset($_POST["cara5"])) {
    echo "No me ó nada";
    rating(1);
}

?>
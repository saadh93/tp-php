<?php
if(isset($_GET["id"])) 
{
    $id=$_GET["id"];
    if(!empty($id) && is_numeric($id))
    {
        include("connexion.php");
        $query="delete from category where id=$id";
        $conn->exec($query);
        header("location:category_list.php");
    }
}

?>
<?php
$libelle= "";
$id="";
if(isset($_GET["id"])) 
{
    $id=$_GET["id"];
    if(!empty($id) && is_numeric($id))
    {
        include("connexion.php");
        $query="select * from category where id=$id";
        $result = $conn->query($query);
        $data = $result->fetchAll();
        $libelle=$data[0]["libelle"];
        $id=$data[0]["id"];
       
    }
}
if((isset($_POST["libelle"]) && isset($_POST["id"]) ))
{

    $libelle = $_POST["libelle"];
    $id=$_POST["id"];
    if(!empty($libelle) && !empty($id) && preg_match("/[A-Za-z]{3,30}/",$libelle) && is_numeric($id))
    {
        // code pour insertion
        include("connexion.php");
        $query = "update category set libelle='$libelle' where id='$id'";
        $conn->exec($query);
        header("location:category_list.php");
        
        
    }
    }

?>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>ajout dune categorie</h1>
        <form method="post" action="#">
            <input type="hidden" name="id" value='1' />
        
        libelle:<input type="text" require pattern="[A-Za-z]{3,30}"class="form-control" name="libelle"/>
        
        <input type="submit" class="btn btn-primary" />
        </form>
    </div>
    
</body>

</html>
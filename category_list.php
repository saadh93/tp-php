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
        <h1> liste des etudiants<h1>
            <table class="table table-bordered table-hover table-stripped">
                <tr><th>Note</th><th>ID eleve</th><th>Action</th></tr>
                <?php
                include("connexion.php");
                $query= "select * from category";
                $result= $conn->query($query);
                $data = $result->fetchAll();
                for($i=0;$i<count($data);$i++)
                {
                    $id=$data[$i]["id"];
                    $libelle=$data[$i]["libelle"];
                    echo "<tr><td>$id</td><td>$libelle</td>";
                    echo "<td>";
                    echo "<a href='delete_category.php?id=$id' onclick= 'return confirm(\"etes vous sur de suprimer..?\");' class='btn btn-danger'>supprimmer</a>";
                   
                    echo "</tr>";
                }
                ?>
<?php
  //connexion a la base de données

  //récupération de l'id dans le lien

  //requête de suppression

  //redirection vers la page index.php

$id = $_GET['id'];
$sql = "DELETE FROM dp-partiel WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>

<?php require("tp6_fonctions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
</head>
<body>
    <h2>Ajouter un client:</h2>
    <form action="client.php" method='post'>
        <table>
            <tr>
                <td>ID</td>
                <td><input type="number" name="id_client"></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom_client"> </td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td><input type="text" name="prenom_client"> </td>
            </tr>
            <tr>
                <td>Ville</td>
                <td><input type="text" name="ville_client"> </td>
            </tr>
            <tr>
                <td><input type="submit" value="Ajouter"> </td>
                <td><input type="reset" value="Vider les champs"></td>
            </tr>
        </table>
    </form>
    <?php if(isset($_POST['id_client']) && isset($_POST['nom_client']) &&
    isset($_POST['prenom_client']) && isset($_POST['ville_client'])){
        $id_client = $_POST["id_client"];
        $nom = $_POST["nom_client"];
        $prenom = $_POST["prenom_client"];
        $ville = $_POST["ville_client"];
        ajout_client($id_client, $nom, $prenom, $ville);
    } ?>
    <hr>

    <h2>Supprimer un client</h2>
    <form action="client.php" method="get">
        ID: <input type="number" name="id_client" required>&nbsp;
        <input type="submit" value="Supprimer">
    </form>
    <?php if(isset($_GET["id_client"])){
        suppr_client($_GET["id_client"]);
    } ?>
    <hr>


    <?php affiche_noms_clients(); ?>
</body>
</html>
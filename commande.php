<?php require("tp6_fonctions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
</head>
<body>
    <h2>Ajouter une commande:</h2>
    <form action="commande.php" method='post'>
        <table>
            <tr>
                <td>ID</td>
                <td><input type="number" name="id_commande"></td>
            </tr>
            <tr>
                <td>ID produit</td>
                <td><input type="text" name="id_produitC"> </td>
            </tr>
            <tr>
                <td>ID clinet</td>
                <td><input type="text" name="id_clinetC"> </td>
            </tr>
            <tr>
                <td>Quantite</td>
                <td><input type="text" name="quantite_produit"> </td>
            </tr>
            <tr>
                <td><input type="submit" value="Ajouter"> </td>
                <td><input type="reset" value="Vider les champs"></td>
            </tr>
        </table>
    </form>
    <?php if(isset($_POST['id_commande']) && isset($_POST['id_produit']) &&
    isset($_POST['id_client']) && isset($_POST['quantite_produit'])){
        $id_commande = $_POST["id_commande"];
        $id_produit = $_POST["id_produitC"];
        $id_client = $_POST["id_clientC"];
        $quantite = $_POST["quantite_produit"];
        ajout_commande($id_commande, $id_produit, $id_client, $quantite);
    } ?>
    <hr>

    <h2>Supprimer une commande</h2>
    <form action="commande.php" method="get">
        ID: <input type="number" name="id_commande" required>&nbsp;
        <input type="submit" value="Supprimer">
    </form>
    <?php if(isset($_GET["id_commande"])){
        suppr_commande($_GET["id_commande"]);
    } ?>
    <hr>
    <?php  affiche_commandes(); ?>
</body>
</html>
<?php require("tp6_fonctions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit</title>
</head>
<body>
    <h2>Ajouter un produit:</h2>
    <form action="produit.php" method='post'>
        <table>
            <tr>
                <td>ID</td>
                <td><input type="number" name="id_produit"></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom_produit"></td>
            </tr>
            <tr>
                <td>Prix</td>
                <td><input type="number" name="prix_produit"> </td>
            </tr>
            <tr>
                <td>Quantite</td>
                <td><input type="number" name="quantite_produit"> </td>
            </tr>
            <tr>
                <td><input type="submit" value="Ajouter"> </td>
                <td><input type="reset" value="Vider les champs"></td>
            </tr>
        </table>
    </form>
    <?php if(isset($_POST['id_produit']) && isset($_POST['nom_produit']) &&
    isset($_POST['prix_produit']) && isset($_POST['quantite_produit'])){
        $id_produit = $_POST["id_produit"];
        $nom = $_POST["nom_produit"];
        $prix = $_POST["prix_produit"];
        $quantite = $_POST["quantite_produit"];
        ajout_produit($id_produit, $nom, $prix, $quantite);
    } ?>
    <hr>

    <h2>Supprimer un produit</h2>
    <form action="produit.php" method="get">
        ID: <input type="number" name="id_produit" required>&nbsp;
        <input type="submit" value="Supprimer">
    </form>
    <?php if(isset($_GET["id_produit"])){
        suppr_produit($_GET["id_produit"]);
    } ?>
    <hr>


    <?php affiche_produits(); ?>
</body>
</html>
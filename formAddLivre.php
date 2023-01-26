<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de livre</title>
    <link rel="stylesheet" type="text/css" href="./css/form.css">
</head>

<body>
    <header>
        <h1>Ajouter un livre</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">Livres</a>
                    <div class="options">
                        <ul>
                            <li><a href="./afficheLivre.php">Afficher les livres</a></li>
                            <li><a href="./formAddLivre.php">Ajouter un livre</a></li>
                            <li><a href="./formLivreParAuteur.php">Afficher livres par auteur</a></li>
                            <li><a href="./formLivreParTitre.php">Afficher livres par Titre</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <form action="./traitementInsertion.php" method="POST">

        <label for="ISBN">ISBN :</label>
        <input type="text" id="ISBN" name="ISBN" required>
        <br>
        <label for="Titre">Titre :</label>
        <input type="text" id="Titre" name="Titre" required>
        <br>
        <label for="Theme">Thème :</label>
        <input type="text" id="Theme" name="Theme" required>
        <br>
        <label for="Nb_pages">Nb_pages :</label>
        <input type="text" id="Nb_pages" name="Nb_pages" required>
        <br>
        <label for="Format">Format :</label>
        <input type="text" id="Format" name="Format" required>
        <br>
        <label for="Nom_auteur">Nom auteur :</label>
        <input type="text" id="Nom_auteur" name="Nom_auteur" required>
        <br>
        <label for="Prenom_auteur">Prénom auteur :</label>
        <input type="text" id="Prenom_auteur" name="Prenom_auteur" required>
        <br>
        <label for="Editeur">Editeur :</label>
        <input type="text" id="Editeur" name="Editeur" required>
        <br>
        <label for="Annee_edition">Année édition :</label>
        <input type="text" id="Annee_edition" name="Annee_edition" required>
        <br>
        <label for="Prix">Prix :</label>
        <input type="text" id="Prix" name="Prix" required>
        <br>
        <label for="Langue">Langue :</label>
        <input type="text" id="Langue" name="Langue" required>
        <br><br>
        <input type="submit" value="Ajouter">
    </form>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>
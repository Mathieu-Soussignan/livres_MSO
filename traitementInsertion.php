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
    <?php
    if (
        isset($_POST['ISBN']) && isset($_POST['Titre']) && isset($_POST['Theme']) && isset($_POST['Nb_pages'])
        && isset($_POST['Format']) && isset($_POST['Nom_auteur']) && isset($_POST['Prenom_auteur']) && isset($_POST['Editeur'])
        && isset($_POST['Annee_edition']) && isset($_POST['Prix']) && isset($_POST['Langue'])
    ) {
        $connex = mysqli_connect('localhost', 'root', '', 'bdp6');
        $ISBN = $_POST['ISBN'];
        $Titre = $_POST['Titre'];
        $Theme = $_POST['Theme'];
        $Nb_pages = $_POST['Nb_pages'];
        $Format = $_POST['Format'];
        $Nom_auteur = $_POST['Nom_auteur'];
        $Prenom_auteur = $_POST['Prenom_auteur'];
        $Annee_edition = $_POST['Annee_edition'];
        $Prix = $_POST['Prix'];
        $Langue = $_POST['Langue'];
        $Editeur = $_POST['Editeur'];

        $query = "INSERT INTO livres (ISBN, Titre, Theme, Nb_pages, Format, Nom_auteur, Prenom_auteur, Annee_edition, Prix, Langue, Editeur) 
            VALUES ('$ISBN', '$Titre', '$Theme', '$Nb_pages', '$Format', '$Nom_auteur', '$Prenom_auteur', '$Annee_edition', '$Prix', '$Langue', '$Editeur')";
        $result = mysqli_query($connex, $query);

        if ($result) {

            header("Location: ./afficheLivre.php");
        } else {
            echo "Erreur lors de l'ajout du livre : " . mysqli_error($connex);
        }
        mysqli_close($connex);
    }
    ?>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>
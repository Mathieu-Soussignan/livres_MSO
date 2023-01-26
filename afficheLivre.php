<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des livres</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <header>
        <h1>Liste des livres</h1>
        <nav>
            <ul>
                <li><a href="./index.php">Accueil</a></li>
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
    <main>
        <table>
            <tr>
                <th>ISBN</th>
                <th>Titre</th>
                <th>Thème</th>
                <th>Nb_pages</th>
                <th>Format</th>
                <th>Nom auteur</th>
                <th>Prénom auteur</th>
                <th>Editeur</th>
                <th>Année édition</th>
                <th>Prix</th>
                <th>Langue</th>
            </tr>
            <?php
            $connex = mysqli_connect('localhost', 'root', '', 'bdp6');
            $query = "SELECT * FROM livres";
            $result = mysqli_query($connex, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['ISBN'] . "</td>";
                echo "<td>" . $row['Titre'] . "</td>";
                echo "<td>" . $row['Theme'] . "</td>";
                echo "<td>" . $row['Nb_pages'] . "</td>";
                echo "<td>" . $row['Format'] . "</td>";
                echo "<td>" . $row['Nom_auteur'] . "</td>";
                echo "<td>" . $row['Prenom_auteur'] . "</td>";
                echo "<td>" . $row['Editeur'] . "</td>";
                echo "<td>" . $row['Annee_edition'] . "</td>";
                echo "<td>" . $row['Prix'] . "</td>";
                echo "<td>" . $row['Langue'] . "</td";
                echo "</tr>";
            }
            mysqli_close($connex);
            ?>
        </table>
    </main>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>
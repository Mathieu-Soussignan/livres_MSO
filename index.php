<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <header>
        <h1>Bienvenue sur la page d'accueil</h1>
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
    <main class="image">
        <p style="text-align: center;">
            <img src="./img/book.jpg" alt="livre ouvert" style="width: 50%; margin: auto;">
        </p>
    </main>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>
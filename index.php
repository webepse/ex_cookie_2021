<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="wrapper">
            <h1>Exercice cookie</h1>
        </div>
    </header>
    <section>
        <div class="wrapper">
            <div id="form">
                <form action="traitement.php" method="POST">
                    <div class="form-group">
                        <label for="nom">Nom: </label>
                        <input type="text" name="nom" id="nom">
                    </div>
                    <div class="form-group">
                        <label for="style">Choisir le thème</label>
                        <select name="style" id="style">
                            <option value="1">Style 1</option>
                            <option value="2">Style 2</option>
                            <option value="3">Style d'origine</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Envoyer">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <div class="wrapper">
            <p>
                Copyright &copy; EPSE 2021
            </p>
        </div>
    </footer>
</body>
</html>
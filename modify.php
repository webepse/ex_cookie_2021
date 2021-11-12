<?php
    // gérer les personnes qui n'ont pas de cookie
    if(!isset($_COOKIE['nom']) OR !isset($_COOKIE['style']))
    {
        header("LOCATION:index.php");
    }

    // tester si formulaire envoyé
    if(isset($_POST['style']))
    {
        // gestion erreur
        $err=0;
        if(empty($_POST['style']))
        {
            $err=1;
        }else{
            $choice=htmlspecialchars($_POST['style']);
            if($choice == 1)
            {
                $style="style1.css";
            }elseif($choice == 2)
            {
                $style="style2.css";
            }else{
                $style="style.css";
            }
        }

        if($err==0)
        {
            setcookie('style', $style, time() + 365*24*3600, null, null, false, true);
            header("LOCATION:index.php");
        }else{
            header("LOCATION:modify.php?error=".$err);
        }

    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        echo '<link rel="stylesheet" type="text/css" href="'.$_COOKIE['style'].'">';
    ?>
   
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
                <form action="modify.php" method="POST">
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
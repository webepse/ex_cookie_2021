<?php 
    // vérifier si le formulaire a été envoyé

    if(isset($_POST['nom']))
    {
        // vérifier mon formulaire
        $err=0;
        if(empty($_POST['nom']))
        {
            $err=1;
        }else{
            $nom = htmlspecialchars($_POST['nom']);
        }

        if(empty($_POST['style']))
        {
            $err=2;
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

        // vérifier si err 
        if($err==0)
        {
            setcookie('nom', $nom, time() + 365*24*3600, null, null, false, true);
            setcookie('style', $style, time() + 365*24*3600, null, null, false, true);
            header("LOCATION:index.php");
        }else{
            header("LOCATION:index.php?error=".$err);
        }


    }else{
        // si form pas envoyé, redirection vers index
        header("LOCATION:index.php");

    }




?>
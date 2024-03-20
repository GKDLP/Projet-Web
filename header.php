
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="StyleMydil.css" rel="stylesheet">
    <title>Wiki-Mydil</title>
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <ul class="header__nav__ul">
                <img class="header__nav__ul__logo" src="Icone/EPSIwebp.webp" alt="Nik Zebi">
                <li class="header__nav__ul__li"><a class="header__nav__ul__li__link" href="#accueil"> Accueil</a>
                    <ul class="header__nav__ul__li__ul">
                        <li class="header__nav__ul__li__ul__li"><a class="header__nav__ul__li__ul__li__link" href="#Connexion"> Se connecter</a></li>
                        <li class="header__nav__ul__li__ul__li"><a class="header__nav__ul__li__ul__li__link" href="formulaire.html"> Inscription</a></li>
                    </ul>
                </li>
                <li class="header__nav__ul__li"><a class="header__nav__ul__li__link" href="#Projet"> Projets</a>
                    <ul class="header__nav__ul__li__ul">
                        <li class="header__nav__ul__li__ul__li"><a class="header__nav__ul__li__ul__li__link" href="FormCP.html"> Création de projet</a></li>
                        <li class="header__nav__ul__li__ul__li"><a class="header__nav__ul__li__ul__li__link" href="projet.php"> Derniers Projets</a></li>
                    </ul>
                <li class="header__nav__ul__li"><a class="header__nav__ul__li__link" href="#Contact"> Nous contacter</a>
                    <ul class="header__nav__ul__li__ul">
                        <li class="header__nav__ul__li__ul__li"><a class="header__nav__ul__li__ul__li__link" href=""> A propos de nous ...</a></li>
                        <li class="header__nav__ul__li__ul__li"><a class="header__nav__ul__li__ul__li__link" href=""> Nous laisse un commentaire</a></li>
                    </ul>
                </li>
                <div class="header__nav__ul__barre">
                    
                    <input type="text" name="text" class="header__nav__ul__barre__recherche__search" placeholder="Recherchez ici!">
                    <input type="image" name="submit" class="header__nav__ul__barre__recherche__submit" src="Icone/Search.svg">
                    
                </div>
                <div class="header__nav__ul__border">
                    <a href="formulaire.html" target="_blank">
                        <img src="Icone/iconeprofile.webp" alt="Icône de Profil" class="header__nav__ul__border__icone">
                    </a>
                </div>
            </ul>
        </nav>
    </header>
<style>


.header__nav{
    box-shadow: 0 0 0 black;
}
.header__nav__ul__li__link{
    color : rgb(207, 205, 205);
}
body{
    font-family: 'Source code pro',Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    margin: 0px;
    padding: 0px;
  
  }
  
  nav{
    background-color: #424558;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: flex-end;
  
  }
  
  nav > ul{
    margin: 0px;
    padding: 0px;
    display: flex;
    text-align: center;
    align-items: center;
    gap: 10px;
    
  }
  
  h1{
    display: flex;
    flex-direction: column;
  }
  
  nav > ul::after{
    content: "";
    display: block;
    clear: both;
  
  }
  
  nav > ul > li{
    float:left;
    position: relative;
  
  }
  
  nav > ul > li > a{
    padding: 20px 30px;
    color: #020202;
  
  }
  
  nav > ul > li:hover a{
    padding: 15px 30px 20px 30px;
    color: #faebd7;
  
  }
  
  nav li{
    list-style-type: none;
  
  }
  
  .header__nav__ul__li__ul{
    display: none;
  
  }
  
  nav a{
    display: inline-block;
    text-decoration: none;
  
  }
  
  nav li:hover .header__nav__ul__li__ul{
    display: inline-block;
    position: absolute;
    top: 100%;
    left: 0px;
    padding: 0px;
    z-index: 1000;
  
  }
  
  .header__nav__ul__li__ul li{
    border-bottom: 1px solid #CCC;
  
  }
  
  .header__nav__ul__li__ul li a{
    padding: 15px 30px;
    font-size: 13px;
    color: #222538;
    width: 270px;
  
  }
  
  .header__nav__ul__li:hover{
    border-top: 5px solid #e44d26;
    background-color: rgb(228, 77, 38, 0.15);
  
  }
  
  .header__nav__ul__li .header__nav__ul__li__ul{
    background-color: rgb(230, 100, 40);
  
  }
  
  .header__nav__ul__li__ul li:hover a{
    color: #EEE;
    font-weight: bold;
  
  }
  
  .header__nav__ul__li .header__nav__ul__li__ul li:hover{
    background-color: rgb(210, 77, 60);
  
  }
  
  .header__nav__ul__barre{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
  
  }
  
  .header__nav__ul__barre__recherche__search{
    width: 60%;
    font-size: 17px;
    border-radius: 10px;
  
  }
  
  .header__nav__ul__barre__recherche__submit{
    display: flex;
    width: 100px;
    height: 30px;
    background-color: rgba(230, 100, 40, 0.671);
    transition: 0.2s;
    border-radius: 5px;
    box-shadow: 2px 2px 20px 0px #0000008c;
  
  }
  
  .header__nav__ul__barre__recherche__submit:hover{
    background-color: rgba(230, 100, 40);
  
  }
  
  .header__nav__ul__border__icone{
    width: 50px;
    height: auto;
    border-radius: 25px;
  
  }
  
  .header__nav__ul__logo{
    margin-top: 0px;
  
  }

</style>
</html>
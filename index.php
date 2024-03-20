<?php
  include 'header.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="StyleMydil.css" rel="stylesheet">
    <title>Wiki-Mydil</title>
</head>
<body>
  
    <section class="section">
        <div class="section__acceuil">
            <div class="section__acceuil__workshop">
                <div class="section__acceuil__workshop__bulle">
                    <h1>Workshop</h1>
                </div>
                <div class="section__acceuil__workshop__content">
                    <img class="section__acceuil__workshop__img" src="Illustrations_Projets/workshop_orig.jpg" alt="Workshop">
                    <p class="section__acceuil__workshop__text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus autem earum hic explicabo ad, quaerat iure aspernatur dolore pariatur, id, qui laudantium consequatur distinctio officiis at nesciunt! Excepturi, veniam? Culpa.
                    </p>
                </div>
            </div>
            <div class="section__acceuil__openinno">
                <div class="section__acceuil__openinno__bulle">
                    <h1>OpenInnovation</h1>
                </div>
                <div class="section__acceuil__openinno__content">
                    <img class="section__acceuil__openinno__img" src="Illustrations_Projets/OIP.jfif" alt="OpenInnovation">
                    <p class="section__acceuil__openinno__text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus autem earum hic explicabo ad, quaerat iure aspernatur dolore pariatur, id, qui laudantium consequatur distinctio officiis at nesciunt! Excepturi, veniam? Culpa.
                    </p>
                </div>
            </div>
            <div class="section__acceuil__Autres">
                <div class="section__acceuil__autre__bulle">
                    <h1>Autres</h1>
                </div>
                <div class="section__acceuil__autres__content">
                    <img class="section__acceuil__autres__img" src="Illustrations_Projets/Autre.webp" alt="Autres">
                    <p class="section__acceuil__autres__text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus autem earum hic explicabo ad, quaerat iure aspernatur dolore pariatur, id, qui laudantium consequatur distinctio officiis at nesciunt! Excepturi, veniam? Culpa.
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>
<style>

body{
  font-family: 'Source code pro',Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  margin: 0px;
  padding: 0px;

}

.section{
  background-color: #4245589f;
  display: flex;
  justify-content: center;
  background: url(./Illustrations_Projets/international_sejour-Universite-Grenoble-Alpes.jpg) fixed;
  background-size: cover;
  
}

.section__acceuil{
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: rgb(228, 228, 228);
    box-shadow: 0 0 20px 20px #0000002b;
    width: 75%;

}

.section__acceuil__workshop,.section__acceuil__openinno,.section__acceuil__Autres{
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: 0 0 0;
    border-radius: 15px;
   
}

.section__acceuil__workshop__bulle,.section__acceuil__openinno__bulle,.section__acceuil__autre__bulle{
    background-color: rgba(184, 52, 0, 0.603);
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 30px;
    margin: 5px;
}

.section__acceuil__workshop__content,.section__acceuil__openinno__content,.section__acceuil__autres__content{
    display: flex;
    flex-direction: center;

}

.section__acceuil__workshop__img,.section__acceuil__openinno__img,.section__acceuil__autres__img{
    border-radius: 25px;
    height: auto;
    width: 30%;
    padding: 15px;

}

.section__acceuil__openinno__text,.section__acceuil__workshop__text,.section__acceuil__autres__text{
    border:solid rgba(184, 52, 0, 0.603) 5px;

}


  
  h1{
    display: flex;
    flex-direction: column;
  }
  
  
</style>
</html>
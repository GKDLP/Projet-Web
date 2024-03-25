<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
</head>
<style>
body{
  font-family: Georgia, Times, 'Times New Roman', serif;
  margin: 0px;
  padding: 0px;
  
  

}

.section_footer{
    background-color: #272935;
  display: flex;
  justify-content: center;
  background-size: cover;
  
  
}
.section__footer__grid{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    align-items: center;
    justify-items: center;
    margin: 2rem;
    
}

.section__footer__grid__text{
    text-decoration: none;
    color: #EEE;
  font-weight: bold;
  font-size: smaller;
}
.section__footer__grid__text:hover{
    transform: scale(1.06);
}
.section__footer__grid__container{
    display: flex;
    flex-direction: column;
    gap:2.5rem ;}
    
</style>
<body>
    <section class="section_footer">
        <div class="section__footer__grid">
            <img src="./EPSIwebp.webp" alt="logoEPSI">
            <div class="section__footer__grid__container">
                <a class="section__footer__grid__text" href="#" target="_blank">Politique de protection des données personnelles</a>
                <a class="section__footer__grid__text" href="#" target="_blank">Conditions générales d'utilisation</a>
</div>
            <div class="section__footer__grid__container">
                <a class="section__footer__grid__text" href="#" target="_blank">Cookies</a>
                <a class="section__footer__grid__text" href="#" target="_blank">Mentions légales</a>
            </div>
        </div>
    </section>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,200&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/c1e9242e48.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <title>Simon Poirou</title>
   </head>
   <header id="home" class="pt-5 pb-5 mt-0 align-items-center d-flex">
      <div class="container-fluid welcome">
         <div class="row  justify-content-center align-items-center d-flex text-center h-100">
            <div class="col-12 col-md-8  h-50 ">
               <h1 class="display-4  text-light mb-2 mt-5"><strong>Simon Poirou</strong> </h1>
               <p class="lead  text-light mb-5">Développeur frontend</p>
               <p><a href="#about" class="btn bg-light shadow-lg btn-round text-dark btn-lg btn-rised">Voir plus</a></p>
               <div class="btn-container-wrapper p-relative d-block  zindex-1">
                  <a class="btn btn-link btn-lg   mt-md-3 mb-4 scroll align-self-center text-light" href="#about">
                  <i class="fa fa-angle-down fa-4x text-light"></i>
                  </a>   
               </div>
            </div>
         </div>
      </div>
   </header>
   <div id="mobile-nav"><i class="fas fa-bars"></i></div>
        <nav>
            <ul class="menu">
              <li><a href="#welcome"><i class="menu-icon fas fa-home"></i>Accueil</a></li>
              <li><a href="#about"><i class="menu-icon fas fa-info-circle"></i>A propos</a></li>
              <!-- <li><a href="#skills"><i class="menu-icon fas fa-tools"></i>Compétence</a></li> -->
              <li><a href="#projects"><i class="menu-icon fas fa-code"></i>projets</a></li>
              <li><a href="#contact"><i class="menu-icon far fa-address-card"></i>contact</a></li>
            </ul>
            
          </nav>
    </div>
   <section id="about">
      <div class="container">
         <div class="row">
            <div class="col-lg"><img class="mt-4 img-fluid" src="images/dev.png" alt="dev"></div>
            <div class="col-lg">
               <h2 class="mt-4 mb-5">A propos...</h2>
               <p>Passionné depuis tout petit d'informatique et plus particulièrement de développement, je ne cesse d'apprendre. j'ai commencé par le langage C et je me suis ensuite tourné vers le web. J'ai suivi une formation à la "3W Academy" à Nantes. Maintenant je cherche à me perfectionner en intégration.</p>
            </div>
         </div>
      </div>
  </section>

   <section id="projects" class="shadow bg-light pt-5 pb-5">
       <h2 class="text-center mb-4">Projets</span></h2>
       <p class="text-center pb-2">Quelques un des mes projets</p>
    <div class="container">
    <div class="row">
        <div class="col-sm">
         <div class="card w-100 shadow" style="width: 18rem;">
            <img class="card-img-top" src="images/projects/site1.png" alt="">
            <div class="card-body">
              <h5 class="card-title">Projet 1</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic distinctio corporis qui est possimus voluptatibus quibusdam.</p>
              <a href="#" class="btn btn-primary">Voir</a>
            </div>
          </div>
        </div>
        <div class="col-sm">
         <div class="card w-100 shadow" style="width: 18rem;">
            <img class="card-img-top" src="images/projects/site2.png" alt="">
            <div class="card-body">
              <h5 class="card-title">Projet 2</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic distinctio corporis qui est possimus voluptatibus quibusdam.</p>
              <a href="#" class="btn btn-primary">Voir</a>
            </div>
          </div>
        </div>
        <div class="col-sm">
         <div class="card w-100 shadow" style="width: 18rem;">
            <img class="card-img-top" src="images/projects/site3.png" alt="">
            <div class="card-body">
              <h5 class="card-title">Projet 3</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic distinctio corporis qui est possimus voluptatibus quibusdam.</p>
              <a href="#" class="btn btn-primary">Voir</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   </section>
   <section id="contact">
      <h2 class="text-center pt-3">Contact</h2>
      <form action="https://formspree.io/f/xvoorolg" method="POST" class="w-75 mx-auto pt-3 pb-3">
         <div class="form-group">
           <label for="exampleFormControlInput1">Adresse mail</label>
           <input type="email" name="_replyto" class="form-control" placeholder="prenom@exemple.com">
         </div>
         <div class="form-group">
           <label for="exampleFormControlTextarea1">Message</label>
           <textarea class="form-control" name="message" rows="3"></textarea>
         </div>
         <div class="text-center">
         <button type="submit" class="center btn btn-primary mb-2">Envoyer !</button>
         </div>
       </form>
   </section>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="js/main.js"></script>
   <script src="js/swipe.js"></script>
   </body>
</html>
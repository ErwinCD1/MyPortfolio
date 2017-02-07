<!-- SlideShow -->  <!-- Slide pris sur le web et adapter pour mon site -->  


 <div id="slider">
    <!-- La banderolle qui contiens toute les images -->
      <div id="mask">
        <ul id="image_container">
          <li><a href="#"><img src="http://media-cache-ec0.pinimg.com/originals/9d/ed/e1/9dede1296a1dbcaf32e1da7017b0a3ad.jpg" width="960" height="370"></li>
          <li><a href="#"><img src="http://media-cache-ak0.pinimg.com/originals/a9/17/c3/a917c3342ab9c27de2bdd18788145205.jpg" width="960" height="370"></li>
          <li><a href="#"><img src="http://media-cache-ak0.pinimg.com/originals/1c/62/9a/1c629a5d2eeabb97812930507cec6b77.jpg" width="960" height="370"></li>
          <li><a href="#"><img src="http://media-cache-ak0.pinimg.com/originals/57/55/ad/5755adcd0ca62fceeafb3e9f36ff362d.jpg" width="960" height="370"></li>
          <li><a href="#"><img src="http://media-cache-ec0.pinimg.com/originals/b8/c6/6a/b8c66add56720dc25251102ad4657982.jpg" width="960" height="370"></li>
        </ul>
      </div>
      <img src="http://i.imgur.com/qQ1vtV1.png?1" id="glass">
      <!-- Disposition des pointeurs -->
      <div id="encart">
        <ul id="dots">
          <!-- les petits points qui affichent ou nous en somme sur le slide -->
          <li class="button1" onClick="changeImage(1)" ></li>
          <li class="button2" onClick="changeImage(2)" ></li>
          <li class="button3" onClick="changeImage(3)" ></li>
          <li class="button4" onClick="changeImage(4)" ></li>
          <li class="button5" onClick="changeImage(5)" ></li>
        </ul>
      </div>
      <!-- fin du quote -->
      <!-- Les fleches de navigations -->
      <img src="http://i.imgur.com/19M7Bw8.png?1" id="fleche_gauche" class="fleche" onClick="prevImage()" >
      <img src="http://i.imgur.com/ubJ6l7P.png?1" id="fleche_droite" class="fleche" onClick="nextImage()" >
    </div>
    <script>
      // Des Variables pour pouvoir modifier facilement ce qui doit l'être
      var secDuration = 5;
      var image = 1;
      var maxImages = 5;
      var slider = document.getElementById('slider');
      var timeout
      
      // La fonction qui change les images. Peut pointer vers une image spécifique, ou bien être appelée vide, pour passer ç celle d'apres
      function changeImage(requiredImage) {    
        // Début de l'algorithme  .
        if (!requiredImage && requiredImage != 0){ //Si nous n'avons pas spécifié une image
          if(image < maxImages){// Si l'image n'est pas la dernière, on avance d'une image
            image++;
          }
          else{
            image = 1;//Si Nous sommes sur la dernière, on reviens au début 
          }
        }
        else{ // Si nous avont spécifié une image
          if(requiredImage > maxImages){//Si nous avons spécifié une image au dela de la dernière, on revient à la première
            image = 1;
          }
          else if(requiredImage < 1){ //Si nous avons spécifié une image 0 ou moins, on vas à la dernière image
            image = maxImages;
          }
          else{
            image = requiredImage; // Sinon, on va à l'image spécifiée.
          }
        }
        //On dit au slider à travers sa classe quelle image il doit afficher
        slider.className = "image"+image;
        
        // On nettoie et relance le timeout
        clearTimeout(timeout)
        timeout = setTimeout("changeImage()",secDuration*1000);
      }
      
      //Deux petites fonctions tres compréhensibles
      function nextImage(){
        changeImage(image+1);
      }
      function prevImage(){
        changeImage(image-1);
      }
      
      //On met le slide sur l'image par défaut, ici la 1ere
      changeImage(1);
    </script>
    
<!-- END SlideShow -->
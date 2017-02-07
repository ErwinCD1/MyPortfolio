<!DOCTYPE HTML PUBLIC "
-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php $title = "Maps"; ?>
<html>
  
<?php include("include/head.php"); ?>
    <div id="body">
      
<?php include("include/menu.php"); ?>
 

  <div id="contact" class="map">
                   <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                   src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=iut+belfort&amp;
                   aq=&amp;sll=46.22475,2.0517&amp;sspn=21.776664,38.803711&amp;ie=UTF8&amp;hq=iut+belfort&amp;hnear=&amp;
                   radius=15000&amp;t=m&amp;ll=47.643963,6.840703&amp;spn=0.071946,0.071946&amp;output=embed">
                 </iframe><br /><small>
    </div> <br />

   <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
      
      <script>
          function initialisation(){
            var cinema_quais = new google.maps.LatLng(47.6193757,6.861667);
            var cinema_lumina = new google.maps.LatLng(47.489325,6.838428);
            var cinema_molliere = new google.maps.LatLng(47.820229,6.376401);
            var cinema_lumiere = new google.maps.LatLng(47.634453,6.139885);
            var cinema_arts = new google.maps.LatLng(47.240813,6.024174);

            var optionsCarte = { zoom: 7, center: cinema_quais,   mapTypeId: google.maps.MapTypeId.ROADMAP  };
            var maCarte = new google.maps.Map(document.getElementById("EmplacementDeMaCarte"), optionsCarte);
             
            var optionsMarqueur = ({position: cinema_quais, map: maCarte,title: "Cinéma des quais"})
            var marqueur = new google.maps.Marker(optionsMarqueur);
            var optionsMarqueur = ({position: cinema_lumina, map: maCarte,title: "Cinéma Lumina"})
            var marqueur = new google.maps.Marker(optionsMarqueur);
            var optionsMarqueur = ({position: cinema_molliere, map: maCarte,title: "Cinéma Espace Molière"})
            var marqueur = new google.maps.Marker(optionsMarqueur);
            var optionsMarqueur = ({position: cinema_lumiere, map: maCarte,title: "Majestic Espace des Lumières"})
            var marqueur = new google.maps.Marker(optionsMarqueur);
            var optionsMarqueur = ({position: cinema_arts, map: maCarte,title: "Cinéma Pathé Beaux Arts"})
            var marqueur = new google.maps.Marker(optionsMarqueur);

            var optionsCarte2 = { zoom: 7, center: cinema_quais,   mapTypeId: google.maps.MapTypeId.HYBRID, disableDefaultUI:true, scrollwheel:false };
            var maCarte2 = new google.maps.Map(document.getElementById("EmplacementDeMaCarte2"), optionsCarte2);
             

             }
      </script>

 <center> <body onload="initialisation()">
      <div id="EmplacementDeMaCarte" style="width:700px; height:600px;"></div>
      <div id="EmplacementDeMaCarte2"></div>
      <div id="information_carte"></div><br />
  </body> </center>
</html>











<!-- <!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>essai Google Maps JavaScript API v3</title>
    <?php include("head.php"); ?>
    <style>
  #EmplacementDeMaCarte { height: 500px;  width: 700px;
  margin:50px auto;
  } 
  </style>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<?php
//--------------------------------connexion BDD
$ma_connexion_mysql = mysqli_connect('localhost','root','tvolqogk','echarle3');
if (!$ma_connexion_mysql){
   print("<div class=\"alert alert-danger\">");
   print("<br />Code d'erreur de connexion: ".mysqli_connect_error());
   print("<br />Message d'erreur de connexion: ".mysqli_connect_error());
   print("</div>");
   exit();
}
?>
<?php
$query = "select cinema.nom_dept, cinema.lat_dept, cinema.long_dept,
(sum(cinema.nbre_etu_1A_dept) + sum(cinema.nbre_etu_2A_dept)) from cinema group by cinema.nom_dept;"; 
$reponse=mysqli_query($ma_connexion_mysql,$query);

while ($line =  mysqli_fetch_array($reponse)) 
{  
    $data[]=$line; 
} 
mysqli_free_result($reponse); 
?>


    <script>
  function initialise() {
     var centreCarte = new google.maps.LatLng(47.642734,6.839632);
           var optionsCarte = { zoom: 8, center: centreCarte,   mapTypeId: google.maps.MapTypeId.ROADMAP  };
           var maCarte = new google.maps.Map(document.getElementById("EmplacementDeMaCarte"), optionsCarte);
           var optionsMarqueur = ({position: centreCarte, map: maCarte,title: "Titre  : département informatique"})
           var marqueur = new google.maps.Marker(optionsMarqueur);
    <?php foreach($data as $cinema): ?>
        var monIcon = new google.maps.MarkerImage( 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=' + <?php echo $cinema[3] ?> + '|FF0000|000000' );
        var mesLatLng = new google.maps.LatLng(<?php echo $cinema[1] ?>,<?php echo $cinema[2] ?>);
        var montexte="<?php echo $cinema[0] ?>";
        var optionsMarqueur = ({position: mesLatLng, map: maCarte,title: montexte, icon: monIcon}); 
        var marqueur = new google.maps.Marker(optionsMarqueur);

        var infowindow = new google.maps.InfoWindow({content: montexte });
        google.maps.event.addListener(marqueur, 'click', function() {infowindow.open(maCarte,marqueur); });

    <?php endforeach; ?>
  }
google.maps.event.addDomListener(window, 'load', initialise);

  </script>
  </head>
  <body onload="initialise()">
  <?php include("menu.php"); ?>
<div class="container">
<div class="alert alert-info">
    <div id="EmplacementDeMaCarte"></div>
</div></div>
<?php include("footer.php"); ?> -->
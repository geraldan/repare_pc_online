/*declenchement a la fin de la lecture du css sinon le js ce lance tout de suite et il fait une erreur */
window.onload = function() {
    // création de la map
    map = new OpenLayers.Map("map");
    map.addLayer(new OpenLayers.Layer.OSM());
    var lonLat = new OpenLayers.LonLat(4.990678, 45.828183)
        .transform(
          new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
          map.getProjectionObject() // to Spherical Mercator Projection
        );

    var gra = new OpenLayers.LonLat(5.590088, 47.447798)
        .transform(
          new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
          map.getProjectionObject() // to Spherical Mercator Projection
        );

    var vie = new OpenLayers.LonLat(4.865646, 45.513533)
        .transform(
          new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
          map.getProjectionObject() // to Spherical Mercator Projection
        );
        
    var zoom=6;
    var markers = new OpenLayers.Layer.Markers( "Markers" );
    //markers.bindPopup("<p>Paris</p>");
    map.addLayer(markers);

    markers.addMarker(new OpenLayers.Marker(lonLat));
    markers.addMarker(new OpenLayers.Marker(gra));
    markers.addMarker(new OpenLayers.Marker(vie));

    map.setCenter (lonLat, zoom);

    var posGray = document.getElementById("OL_Icon_26");
    var posVienne = document.getElementById("OL_Icon_30");
    var posBeynost = document.getElementById("OL_Icon_22");
    //recherche de l'id
    var adress = document.getElementById("adress");
    var tel = document.getElementById("tel");
    var cb = document.getElementById("fillCenter");
    var btn = document.getElementById("send");

    //affiche les informations
    posBeynost.addEventListener("click" , function () {
        var a = "Beynost rue des petits poids";
        var b = "03 20 10 10 10";
        var c = "Beynost";
        //ecrire les informations
        
        // l'id innerHTML = a;
        adress.innerHTML = a;
        tel.innerHTML = b;
        cb.value = c;
        // ajout du style display block
        btn.style.display = "block";
    });

    //affiche les informations
    posVienne.addEventListener("click" , function () {
      var a = "Vienne rue des girafes";
      var b = "03 48 36 10 10";
      var c = "Vienne";
      //ecrire les informations

      // l'id innerHTML = a;
      adress.innerHTML = a;
      tel.innerHTML = b;
      cb.value = c;
      // ajout du style display block
      btn.style.display = "block";

    });

    //affiche les informations
    posGray.addEventListener("click" , function () {
      var a = "Gray rue des salieres";
      var b = "03 20 45 10 10";
      var c = "Gray";
      //ecrire les informations
      
      // l'id innerHTML = a;
      adress.innerHTML = a;
      tel.innerHTML = b;
      cb.value = c;
      // ajout du style display block
      btn.style.display = "block";
  });
}
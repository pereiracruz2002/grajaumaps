<?php include_once('header.php') ?>
                    
                    <script>

function initialize() {
    var myLatlng = new google.maps.LatLng(-23.745687716160287, -46.68639569999999);

    var mapOptions = {
      zoom: 15,
      center: myLatlng
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    var map2 = new google.maps.Map(document.getElementById('map-canvas2'), mapOptions);

    var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">Uma denúncia</h1>'+
        '<div id="bodyContent">'+
        '<p>Aqui vem a denúncia.</p> <a href="javascript:void(0)" onclick="alert(1)" id="teste">aaaa</a>'+
        '</div>'+
        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        animation: google.maps.Animation.DROP,
        title: 'Uma denúncia'
    });
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });
 

}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
        
    <div class="row">
        <article>
            <div id="map-canvas"></div>
        </article>   
    </div> 
</div> <!-- #container-fluid -->
<div class="container-fluid">
    <div class="row paddingTop10">
        <div class="col-md-2 col-md-offset-4">
            <a href="#" class="btn btn-primary btn-rounded btn-lg" data-toggle="modal" data-target="#denuncia">
                Faça sua Denúncia
            </a>
        </div>
            <div class="col-md-6">
                <a class="btn btn-primary btn-rounded btn-lg" data-toggle="modal" data-target="#comoFunciona" href="#">Como Funciona</a>
            </div>
        </div>    
    </div> <!-- #main-container -->
</div>
<?php include_once('footer.php') ?>

<?php include_once('header.php') ?>

        <div class="main-container">
            <div class="main wrapper clearfix">
                <article>
                    
                    <script>
                    function initialize() {
                        var mapOptions = {
                            zoom: 4,
                            center:  new google.maps.LatLng(-16.037716138237464, -51.0948105405151),
                            panControl: false,
    						zoomControl: true,
    						scaleControl: false,
    						streetViewControl:false,
    						mapTypeControl:false
                        };

                   
                        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);


                        <?php foreach ($lojas as $item):?>
                        var <?php echo $item->uf ?>_infowindow = new google.maps.InfoWindow({

                            content: 
                            '<div class="content">'+
                            '<div class="bodyContent">'+
                            '<a href="javascript:void(0);" onclick=infoUf("<?php echo $item->uf ?>")><?php echo number_format($item->total, 0, '','.') ?> lojas</a>'+
                            '</div>'+
                            '</div>'

                        });
                        var <?php echo $item->uf ?>_Latlng = new google.maps.LatLng(<?php echo trim($item->lat) ?>, <?php echo trim($item->long) ?>);
                        var <?php echo $item->uf ?>_marker = new google.maps.Marker({
                            position: <?php echo $item->uf ?>_Latlng,
                            map: map,
                            animation: google.maps.Animation.DROP,
                            title: '<?php echo $item->uf ?>'
                        });
                        google.maps.event.addListener(<?php echo $item->uf ?>_marker, 'click', function() {
                            <?php echo $item->uf ?>_infowindow.open(map,<?php echo $item->uf ?>_marker);
                        });
                        <?php endforeach; ?>

                        map.data.loadGeoJson('<?php echo base_url() ?>Brasil.json');
                        var featureStyle = {
                                fillColor: '#777777',
                                strokeWeight: 0.5
                            }
                        map.data.setStyle(featureStyle);

                    }
                    google.maps.event.addDomListener(window, 'load', initialize);
                    </script>
                    <div id="map-canvas"></div>
                </article>
                <?php include_once('sidebar.php') ?>                
            </div> <!-- #main -->
        </div> <!-- #main-container -->
<?php include_once('footer.php') ?>

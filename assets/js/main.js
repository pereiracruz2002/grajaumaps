	
function infoUf(uf) {
    $.ajax({
        url: base_url+'mapa/parceiros/'+uf,
        beforeSend: function(){
            $('.container-lojas').html('<p class="text-center white"><i class="fa fa-refresh fa-5x fa-spin"></i></p>')
            //ga.push(['_trackPageview', ]);
            ga('send', 'pageview', base_url+'mapa/parceiros/'+uf);
        }, success: function(data){
            $('.container-lojas').html(data)
        }
    })
}

$('body').on('click', '.content-lojas li a', function(e){
    e.preventDefault()
    var elm = $(this)
    $.ajax({
        url: elm.attr('href'),
        beforeSend: function(){
            $('.container-lojas').html('<p class="text-center white"><i class="fa fa-refresh fa-5x fa-spin"></i></p>')
            ga('send', 'pageview', elm.attr('href'));
        }, success: function(data){
            $('.container-lojas').html(data)
        }
    })

})
$('body').on('click', '.btn-ir-loja a', function(e){
    var elm = $(this)
    ga('send', 'pageview', elm.attr('href'));
})

$(function(){
    $('.container-lojas').slimScroll({
        height: '470px'
    });
});


 $(document).ready(function(){ 	
$(".open_fancybox").click(function() {
    
    $.fancybox.open([
        {
            href : '/img/verstka/3333333.jpg',
            title : 'manual 1st title'
        },
        {
            href : 'http://fancyapps.com/fancybox/demo/2_b.jpg',
            title : '2nd title'
        },
        {
            href : 'http://fancyapps.com/fancybox/demo/3_b.jpg',
            title : '3rd title'
        }
    ], {
        nextEffect : 'none',
        prevEffect : 'none',
        padding    : 0,
        helpers    : {
            title : {
                type: 'over'  
            },
            thumbs : {
                width  : 75,
                height : 50,
                source : function( item ) {
                    return item.href.replace('_b.jpg', '_s.jpg');
                }
            }
        }
    });
    
    return false;
}); 
// end fancy box 



// end
});

 var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
  });
}



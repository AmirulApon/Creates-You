
$('.reels-carousel').owlCarousel({
    items:1,
    merge:true,
    loop:true,
    margin:10,
    video:true,
    nav:true,
    dots:false,
    responsive:{
        480:{
            items:2
        },
        600:{
            items:4
        }
    }
})
$('.reel-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

// --------lightbox-photogallery-------
 lightGallery(document.querySelector('.gallery1'));
 
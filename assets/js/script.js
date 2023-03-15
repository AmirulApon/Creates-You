
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
 
//  ================downloader==============

window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'invoice.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
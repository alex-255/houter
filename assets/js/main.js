window.addEventListener("load", () => {

    const header = document.getElementById("header");
    const hamburger = header.querySelector(".hamburger");
    const overlay = header.querySelector(".overlay");
    
    // closing/opening menu on mobile devices
    hamburger.onclick  = function(){
      header.classList.toggle("menu-opened");  
    };
    overlay.onclick  = function(){
      header.classList.toggle("menu-opened");  
  };


});

( function( $ ) {
    
    $(document).ready(function(){
        $('.menu-area--slider').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            autoplay: true,
            // adaptiveHeight: true,
            responsive: [
              
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 2
                }
              },
                {
                  breakpoint: 900,
                  settings: {
                    slidesToShow: 1,
                    dots: false,
                    arrows: false
                  }
                }
            ]
        });

        // Fancybox.bind("[data-fancybox]", {

        // });

      });

} )( jQuery );
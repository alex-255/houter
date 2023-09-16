( function( $ ) {



window.addEventListener("load", () => {

    const header = document.getElementById("top-part");
    const hamburger = header.querySelector(".hamburger");
    const overlay = header.querySelector(".overlay");
    
    // closing/opening menu on mobile devices
    hamburger.onclick  = function(){
      header.classList.toggle("menu-opened");  
    };
    overlay.onclick  = function(){
      header.classList.toggle("menu-opened");  
  };


  document.querySelectorAll(".our-rec--top-bar--menu--item").forEach(function (item) {
    
      item.addEventListener("click", function(event) {
        event.preventDefault();

        if (item.classList.contains("house")) {
          document.querySelectorAll(".our-rec--slider--item.house").forEach((element)=>{
            element.classList.add("shown");
          });
          document.querySelectorAll(".our-rec--slider--item:not(.house)").forEach((element)=>{
            element.classList.remove("shown");
          });

          item.classList.add("shown");
          document.querySelectorAll(".our-rec--top-bar--menu--item:not(.house)").forEach((element)=>{
            element.classList.remove("shown");
          });
        } 
        
        if (item.classList.contains("villa")) {
          document.querySelectorAll(".our-rec--slider--item.villa").forEach((element)=>{
            element.classList.add("shown");
          });
          document.querySelectorAll(".our-rec--slider--item:not(.villa)").forEach((element)=>{
            element.classList.remove("shown");
          });

          item.classList.add("shown");
          document.querySelectorAll(".our-rec--top-bar--menu--item:not(.villa)").forEach((element)=>{
            element.classList.remove("shown");
          });
        } 
        
        if (item.classList.contains("apartment")) {
          document.querySelectorAll(".our-rec--slider--item.apartment").forEach((element)=>{
            element.classList.add("shown");
          });
          document.querySelectorAll(".our-rec--slider--item:not(.apartment)").forEach((element)=>{
            element.classList.remove("shown");
          });

          item.classList.add("shown");
          document.querySelectorAll(".our-rec--top-bar--menu--item:not(.apartment)").forEach((element)=>{
            element.classList.remove("shown");
          });

          $('.our-rec--slider').slick('unslick');
          $('.our-rec--slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            arrows: true
          });

        }

        if (item.classList.contains("all")) {
          document.querySelectorAll(".our-rec--slider--item").forEach((element)=>{
            element.classList.add("shown");
          });

          item.classList.add("shown");
          document.querySelectorAll(".our-rec--top-bar--menu--item:not(.all)").forEach((element)=>{
            element.classList.remove("shown");
          });
        }
      });
    

    

  });
  
  

});









    
    $(document).ready(function(){
      $('.menu-area--slider').slick({
          // infinite: true,
          slidesToShow: 2,
          slidesToScroll: 1,
          dots: false,
          arrows: true,
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

      $('.our-rec--slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        responsive: [
          {
            breakpoint: 1350,
            settings: {
              arrows: false
            }
          },
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 2,
              arrows: false
            }
          },
            {
              breakpoint: 900,
              settings: {
                slidesToShow: 1,
                arrows: false
              }
            }
        ]
    });

        // Fancybox.bind("[data-fancybox]", {

        // });

      });

} )( jQuery );
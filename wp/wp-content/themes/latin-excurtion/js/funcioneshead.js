
function vidplay() {
       var video = document.getElementById("Video1");
       var button = document.getElementById("play");
       if (video.paused) {
          video.play();
          button.textContent = "||";
       } else {
          video.pause();
          button.textContent = ">";
       }
    }

    function restart() {
        var video = document.getElementById("Video1");
        video.currentTime = 0;
    }

    function skip(value) {
        var video = document.getElementById("Video1");
        video.currentTime += value;
    } 

/******************************************************************************lightSlider************************************************************************************************/
$(document).ready(function() {
    $('#content-slider').lightSlider({
        item:4,
        loop:false,
        slideMove:2,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        responsive : [
            {
                breakpoint:800,
                settings: {
                    item:4,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:2,
                    slideMove:1
                  }
            }
        ]
    });  
  });
/*****************************************************************************************************************************************************************************************/
/********************************************************************************Click Nav************************************************************************************************/
$(document).ready(function(){
                $(".nav li").click(function() {
                    $(this).siblings("li").removeClass("active");
                    $(this).addClass("active");
                });
            });
/*****************************************************************************************************************************************************************************************/
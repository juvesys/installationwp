<?php get_header(); ?>

  <div class="video " >
    <div class="video-slider">
                <div class="cont">
                  <div id='miVideo' onClick="padding0();"></div>

                  <script type='text/javascript'>

                      jwplayer('miVideo').setup({

                          file: 'https://www.youtube.com/watch?v=fcH8cibH5Yc',
                          width: '100%',
                    height: '760px',
                      image: 'http://localhost/3/images/baner.jpg',
                      mediaid: 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                    
                    stretching:'fill',
                    
                    
                    aspectratio: '16:8',
                    displaydescription:'true',

                      });
                </script>
                  


                <script>

                    (function ($) {
                        $(document).ready(function () {

                            // An example of playing with the Video.js javascript API
                            // Will start the video and then switch the source 3 seconds latter
                            // You can look at the doc there: http://docs.videojs.com/docs/guides/api.html
                            videojs('vid1').ready(function () {
                                var myPlayer = this;
                                myPlayer.src({type: 'video/youtube', src: 'https://www.youtube.com/watch?v=y6Sxv-sUYtM'});

                                $("#change").on('click', function () {
                                    myPlayer.src({type: 'video/youtube', src: 'https://www.youtube.com/watch?v=09R8_2nJtjg'});
                                });
                            });

                        });
                    })(jQuery);
                </script>
                </div>
                
            </div>
  </div>
  <div  class="nav-country " >  
    <div class="container">
          <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
              
            </div>
            <div class="cont-nav-contry col-xs-8 col-sm-8 col-md-8 col-lg-8">
              <nav class="hidden-xs ">
                <ul class="new-nav-contry">
                          <li class="contry-menu-item-1"><br><br><a href="#">Argentina</a></li>
                    <li class="contry-menu-item-2"><br><br><a href="#">Brazil</a></li>
                    <li class="contry-menu-item-3"><br><br><a href="#">Chile</a></li>
                    <li class="contry-menu-item-4"><br><br><a href="#">Colombia</a></li>
                    <li class="contry-menu-item-5"><br><br><a href="#">Cuba</a></li>
                    <li class="contry-menu-item-6"><br><br><a href="#">Ecuador</a></li>
                    <li class="contry-menu-item-7"><br><br><a href="#">Galpagos</a></li>
                    <li class="contry-menu-item-8"><br><br><a href="#">Panama</a></li>
                    <li class="contry-menu-item-9"><br><br><a href="peru.html">Peru</a></li>
                    <li class="contry-menu-item-10"><br><br><a href="#">uruguay</a></li>
            </ul>
              </nav>
              <div class="demo visible-xs ">
                <div class="item">
                  <ul id="content-slider" class="content-slider">
                            <li class="contry-menu-item-1"><br><br><a href="#">Argentina</a></li>
                    <li class="contry-menu-item-2"><br><br><a href="#">Brazil</a></li>
                    <li class="contry-menu-item-3"><br><br><a href="#">Chile</a></li>
                    <li class="contry-menu-item-4"><br><br><a href="#">Colombia</a></li>
                    <li class="contry-menu-item-5"><br><br><a href="#">Cuba</a></li>
                    <li class="contry-menu-item-6"><br><br><a href="#">Ecuador</a></li>
                    <li class="contry-menu-item-7"><br><br><a href="#">Galpagos</a></li>
                    <li class="contry-menu-item-8"><br><br><a href="#">Panama</a></li>
                    <li class="contry-menu-item-9"><br><br><a href="peru.html">Peru</a></li>
                    <li class="contry-menu-item-10"><br><br><a href="#">uruguay</a></li>
                  </ul>
              </div>
        </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
              
            </div>
      </div>
    </div>
  </div>
 <div  class="section1" > 
    <div class="container">
          <div class="row">
            <div class=" col-sm-4 col-md-4 col-lg-4 col-xs-6 column1 text-right">
              <div class="subContainer">
                <div class="title-1">Crafted</div>
                <div class="title-2">ITINERARIES</div>
                <div class="small_text">LEARN MORE</div>
                <div class="display_content1">
                  <span class="fa fa-angle-up "> </span>
                </div>
              </div>
              
        </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6 column2 text-center">
              <div>A LAND OF RICHES</div>
              <div class="title-2">SOUTH AMERICA</div>
              <div class="small_text">LEARN MORE</div>
              <div class="display_content2">
                <span class="fa fa-angle-up"> </span>
              </div>
        </div>
            <div class="col-sm-4 col-md-4 col-lg-4 hidden-xs column3">
              <div class="subContainer">
                <div class="title-1">Local</div>
                <div class="title-2">AWESOMENESS</div>
                <div class="small_text">LEARN MORE</div>
                <div class="display_content3">
                  <span class="fa fa-angle-up "></span>
                </div>
              </div>
        </div>
      </div>
      <div class="row hidden_content link1">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <p class="itineraries_title">Our itineraries are recognized by Conde Nast and Travel + Leisure.</p>
              <p class="text">15+ years ago, it hit us that our decades of travel in Central and South America, with all the discoveries and local connections we’d made, represented some very special: a framework for crafting off-the-beaten-path travel experiences packed with authentic moments and local characters. This is what travel aught to be. Transformative. Eye-opening</p>
              
              <div class="col-sm-3 col-md-3 ">
                <img src="images/viajes-enavion.png">
              </div>
              <div class="col-sm-3 col-md-3 ">
                <img src="images/reco-2011.png">
              </div>
              <div class="col-sm-3 col-md-3 ">
                <img src="images/reco-2013.png">
              </div>
              <div class="col-sm-3 col-md-3 ">
                <img src="images/recoespecial.png">
              </div>

            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <p class="text">Hzztt. Local. The stuff of great stories. Yes we seek to discover new lands through the stories of their people, but as travelers we also seek to craft the our own stories along the way – to know foreign places in personal terms.</p>
              <p class="text"><b>So this is what we do.</b> We craft beautifully chroreographed itineraries. Whether you’re imagining a stylish nature adventure or an exotic family reunion, whether you have a thousand ideas, or aren’t sure where to start, the Latin Excursions team can craft a completely custom experience. Or guide you towards the right Pre-designed Journey.</p>
            </div>
            <div class="col-md-4 col-sm-4 ">
              <img src="images/mapa.jpg">
            </div>
            <div class="close_hidden_content visible-sm visible-md visible-lg">
              <div class="equis">X</div>
              <div class="close_link">CLOSE</div>
            </div>
      </div>
      <div class="row hidden_content link2">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <p class="itineraries_title">Our itineraries are recognized by Conde Nast and Travel + Leisure.</p>
              <p class="text">15+ years ago, it hit us that our decades of travel in Central and South America, with all the discoveries and local connections we’d made, represented some very special: a framework for crafting off-the-beaten-path travel experiences packed with authentic moments and local characters. This is what travel aught to be. Transformative. Eye-opening</p>
              
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <p class="text">Hzztt. Local. The stuff of great stories. Yes we seek to discover new lands through the stories of their people, but as travelers we also seek to craft the our own stories along the way – to know foreign places in personal terms.</p>
              <p class="text"><b>So this is what we do.</b> We craft beautifully chroreographed itineraries. Whether you’re imagining a stylish nature adventure or an exotic family reunion, whether you have a thousand ideas, or aren’t sure where to start, the Latin Excursions team can craft a completely custom experience. Or guide you towards the right Pre-designed Journey.</p>
            </div>
            <div class="col-md-4 col-sm-4 ">
              <img src="images/mapa.jpg">
            </div>
            <div class="close_hidden_content visible-sm visible-md visible-lg">
              <div class="equis">X</div>
              <div class="close_link">CLOSE</div>
            </div>
      </div>
      <div class="row hidden_content link3">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <p class="itineraries_title">Our itineraries are recognized by Conde Nast and Travel + Leisure.</p>
              <p class="text">15+ years ago, it hit us that our decades of travel in Central and South America, with all the discoveries and local connections we’d made, represented some very special: a framework for crafting off-the-beaten-path travel experiences packed with authentic moments and local characters. This is what travel aught to be. Transformative. Eye-opening</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <p class="text">Hzztt. Local. The stuff of great stories. Yes we seek to discover new lands through the stories of their people, but as travelers we also seek to craft the our own stories along the way – to know foreign places in personal terms.</p>
              <p class="text"><b>So this is what we do.</b> We craft beautifully chroreographed itineraries. Whether you’re imagining a stylish nature adventure or an exotic family reunion, whether you have a thousand ideas, or aren’t sure where to start, the Latin Excursions team can craft a completely custom experience. Or guide you towards the right Pre-designed Journey.</p>
            </div>
            <div class="col-md-4 col-sm-4 ">
              <img src="images/mapa.jpg">
            </div>
            <div class="close_hidden_content visible-sm visible-md visible-lg">
              <div class="equis">X</div>
              <div class="close_link">CLOSE</div>
            </div>
      </div>
      <script>
          var a=0; 
          var b=0;
          var c=0;
              $('.column1').click(function(){ // primera forma
                      
              });

          $('.column1').click(function() {
          a+=1;
           if(a == 1){
           $(".link1 ").css('display', 'block');
           $(".link2").css('display', 'none');
           $(".link3 ").css('display', 'none');
           $(".display_content1 ").css('display', 'block');
           $(".display_content2").css('display', 'none');
           $(".display_content3").css('display', 'none');
           $(".section1 .column1").css('color', '#f03288');
           $(".section1 .column2").css('color', '#000');
           $(".section1 .column3").css('color', '#000');
           }
            if(a == 2){
          $(".link1 ").css('display', 'none');
            $(".display_content1 ").css('display', 'none');
            $(".link2").css('display', 'none');
            $(".display_content2").css('display', 'none');
            $(".link3 ").css('display', 'none');
            $(".display_content3").css('display', 'none');
            $(".section1 .column1").css('color', '#000');
             $(".section1 .column2").css('color', '#000');
            $(".section1 .column3").css('color', '#000');
            a = 0;
           }
          });

          $('.column2').click(function() {
            b+=1;
           if(b == 1){
            $(".link1 ").css('display', 'none');
            $(".link2").css('display', 'block');
            $(".link3 ").css('display', 'none');
            $(".display_content1 ").css('display', 'none');
            $(".display_content2").css('display', 'block');
            $(".display_content3").css('display', 'none');
            $(".section1 .column1").css('color', '#000');
            $(".section1 .column2").css('color', '#f03288');
            $(".section1 .column3").css('color', '#000');
          }
          if(b == 2){
          $(".link1 ").css('display', 'none');
            $(".display_content1 ").css('display', 'none');
            $(".link2").css('display', 'none');
            $(".display_content2").css('display', 'none');
            $(".link3 ").css('display', 'none');
            $(".display_content3").css('display', 'none');
            $(".section1 .column1").css('color', '#000');
             $(".section1 .column2").css('color', '#000');
            $(".section1 .column3").css('color', '#000');
            b = 0;
           }

          });

          $('.column3').click(function() {
            c+=1;
           if(c == 1){
            $(".link1 ").css('display', 'none');
            $(".link2").css('display', 'none');
            $(".link3 ").css('display', 'block');
            $(".display_content1 ").css('display', 'none');
            $(".display_content2").css('display', 'none');
            $(".display_content3").css('display', 'block');
            $(".section1 .column1").css('color', '#000');
            $(".section1 .column2").css('color', '#000');
            $(".section1 .column3").css('color', '#f03288');
            }
            if(c == 2){
          $(".link1 ").css('display', 'none');
            $(".display_content1 ").css('display', 'none');
            $(".link2").css('display', 'none');
            $(".display_content2").css('display', 'none');
            $(".link3 ").css('display', 'none');
            $(".display_content3").css('display', 'none');
            $(".section1 .column1").css('color', '#000');
             $(".section1 .column2").css('color', '#000');
            $(".section1 .column3").css('color', '#000');
            c = 0;
           }
          });
          
          


          $('.close_hidden_content,.display_content1').click(function() {
            $(".link1 ").css('display', 'none');
            $(".display_content1 ").css('display', 'none');
            $(".link2").css('display', 'none');
            $(".display_content2").css('display', 'none');
            $(".link3 ").css('display', 'none');
            $(".display_content3").css('display', 'none');
            $(".section1 .column1").css('color', '#000');
             $(".section1 .column2").css('color', '#000');
            $(".section1 .column3").css('color', '#000');
          });

          

          </script>
      <div class="row">
        <div class="light_center_image">
          <img src="images/light.png">
        </div>
      </div>
    </div>
  </div>
  <div class="section2">
    <div class="container">
      <div class="row">
        <div class="img-had vissible-xs hidden-sm hidden-md hidden-lg">
          <div class="subContainer text-center">
              <img src="images/img-two-ways.png">
          </div>
        </div>

      </div>
      <div class="row hidden-xs vissible-sm vissible-md vissible-lg">
              <div class="col-md-5 col-sm-5 col-xs-6 column1">
                <div class="subContainer text-center">
                  <div class="cont-our"><span class="guion-largo">––––––</span><span class="our-left">OUR</span> <span class="guion-largo">––––––</span></div>
                  <div class="cont-costum"><span class="custom">CUSTOM</span></div>
                  <div class="cont-journey"><span class="journey">JOURNEYS</span></div>
                </div>
              </div>
              <div class="col-md-2 col-sm-2 hidden-xs column2">
                <div class="subContainer text-center">
                <img src="images/img-two-ways.png">
                </div>
              </div>
              <div class="col-md-5 col-sm-5 col-xs-6 column3">
                <div class="subContainer text-center">
                <div class="cont-our"><span class="guion-largo">––––––</span><span class="our-rigth">OUR</span> <span class="guion-largo">––––––</span></div>
                  <div class="cont-costum"><span class="custom">CUSTOM</span></div>
                  <div class="cont-journey"><span class="journey">JOURNEYS</span></div>
                  <div class="display_content">
                </div>
                </div>
              </div>
        </div>
        <div class="row vissible-xs hidden-sm hidden-md hidden-lg">
              <div class="col-md-5 col-sm-5 col-xs-6 column1">
                <div class="subContainer text-center for-click-left">
                  <div class="cont-our"><span class="guion-largo">––––––</span><span class="our-left">OUR</span> <span class="guion-largo">––––––</span></div>
                  <div class="cont-costum"><span class="custom">CUSTOM</span></div>
                  <div class="cont-journey"><span class="journey">JOURNEYS</span></div>
                  <div class="display_content">
                  <span class="see-down fa fa-angle-down vissible-xs hidden-sm hidden-md hidden-lg"> </span>
                  <span class="click-to-see hidden-xs hidden-sm hidden-md hidden-lg">click to see</span>
                </div>
                </div>
              </div>
              <div class="col-md-2 col-sm-2 hidden-xs column2">
                <div class="subContainer text-center">
                <img src="images/img-two-ways.png">
                </div>
              </div>
              <div class="col-md-5 col-sm-5 col-xs-6 column3">
                <div class="subContainer text-center  for-click-rigth for-click-color ">
                <div class="cont-our"><span class="guion-largo">––––––</span><span class="our-rigth">OUR</span> <span class="guion-largo">––––––</span></div>
                  <div class="cont-costum"><span class="custom">CUSTOM</span></div>
                  <div class="cont-journey"><span class="journey">JOURNEYS</span></div>
                  <div class="display_content">
                  <span class="see-down fa fa-angle-down hidden-xs hidden-sm hidden-md hidden-lg"> </span>
                  <span class="click-to-see vissible-xs hidden-sm hidden-md hidden-lg">click to see</span>
                </div>
                </div>
              </div>
        </div>
        <script>
          var a=0; 
          var b=0;
          var c=0;
           
          $('.for-click-rigth').click(function() {
            //$('.for-click-left span').css('color', '#B0B0B0');
            $( '.cont-journey-left' ).addClass( "hidden-xs" );
            $( '.for-click-rigth' ).removeClass( "for-click-color" );
            $( '.for-click-left' ).addClass( "for-click-color" );
            $( '.cont-journey-rigth' ).removeClass( "hidden-xs for-click-rigth" ).addClass( "vissible-xs" );
            $('.for-click-rigth .click-to-see').removeClass( "vissible-xs" ).addClass( "hidden-xs" );;
            $('.for-click-rigth .see-down').removeClass( "hidden-xs" ).addClass( "vissible-xs" );
            $('.for-click-left .see-down').removeClass( "vissible-xs" ).addClass( "hidden-xs" );;
            $('.for-click-left .click-to-see ').removeClass( "hidden-xs" ).addClass( "vissible-xs" );
            });

           $('.for-click-left').click(function() {
            //$('.for-click-rigth span').css('color', '#B0B0B0');
            $( '.cont-journey-rigth' ).addClass( "hidden-xs" );
            $( '.for-click-left' ).removeClass( "for-click-color" );
            $( '.for-click-rigth' ).addClass( "for-click-color" );
            $( '.cont-journey-left' ).removeClass( "hidden-xs for-click-rigth" ).addClass( "vissible-xs" );
            $('.for-click-left .click-to-see').removeClass( "vissible-xs" ).addClass( "hidden-xs" );;
            $('.for-click-left .see-down').removeClass( "hidden-xs" ).addClass( "vissible-xs" );
            $('.for-click-rigth .see-down').removeClass( "vissible-xs" ).addClass( "hidden-xs" );;
            $('.for-click-rigth .click-to-see ').removeClass( "hidden-xs" ).addClass( "vissible-xs" );
            });

          

          
          
          


         

          

          </script>
    </div>
  </div>
  <div class="section3">
    <div class="container">
      <div class="row">
              <div class="cont-journey-left col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <a href="">
                <div class="journey-left  subContainer col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="img-journey"><img src="images/brazil.jpg" ></div>
                  <div class="post_title">Best of Brazil</div>
                  <div class="days">
                      <span class="text-1">15</span> <span class="text-2">DAYS / </span> <span class="text-1">14</span> <span class="text-2">NIGHTS</span>
                    </div>
                    <div class="price">
                      <span class="text-1">$8,120</span> <span class="text-2">price per person</span>
                    </div>
                    <div class="summary">YOU'LL start by visiting the breathtaking Iguazú Falls surrounded by rainforest, then continue to the charming colonial gem of Paraty, where nature and sea activities complement the historical city. After wards, visit Rio: the birthplace of Bossa Nova...</div>
                  <div class="viewAllTrips">
                    <a href="/">See all <span class="text-1">Custom Journeys</span></a> <span class="fa fa-chevron-right text-2">&nbsp;</span>
                  </div>
                  <div class="viewDetails">
                    <img src="images/icon-view-more-yellow.png">
                  </div>
                </div>
                </a>
              </div>
              <div class="cont-journey-rigth hidden-xs col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                <a href="">
                <div class="journey-rigth  subContainer col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="img-journey"><img src="images/patos.jpg"></div>
                  <div class="post_title">Galapagos for Less</div>
                  <div class="days">
                      <span class="text-1">5</span> <span class="text-2">DAYS / </span> <span class="text-1">4</span> <span class="text-2">NIGHTS</span>
                    </div>
                    <div class="price color-b-green ">
                      <span class="text-1">$380</span> <span class="text-2 color-white">day / per person</span>
                    </div>
                    <div class="summary">Explore the Galapagos Isnads with a unique land base intinerary that mixes adventure with relaxation. You will have private guided land excursions and shared ful-day excursions to neighboring islands, such as South Plazas, Santa Fe, North Semymour...</div>
                  <div class="viewAllTrips">
                    <a href="/">See all <span class="text-1">Pre-Designed</span></a> <span class="fa fa-chevron-right text-2">&nbsp;</span>
                  </div>
                  <div class="viewDetails">
                    <img src="images/icon-view-more-blue.png">
                  </div>
                </div>
                </a>
              </div>
      </div>
    </div>
  </div>
  <div class="section4">
    <div class="container">
      <div class="row">
        <img src="images/img-review.jpg" width="100%">      
      </div>
    </div>
  </div>
  <div class="section5">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <div class="img-left-home">
                <img src="images/logohomeleft.png">
                <br> <br> <br> <br> <br>
                <img class="hidden-xs" src="images/imgcirculo.png">
              </div>
              <div class="form-search">
                <form class="form-searching" method="post" action="newlester.php" >
             <div class="cont-inputs-search">
             <input class="input-search" type="text" name="search" ><button type="submit"><i class="fa fa-search buto-search"></i></button>
             </div>
            </form>
              </div>
            </div>
            <div class=" col-xs-12 col-sm-9 col-md-9 col-lg-9 ">
              <section class="responsive slider col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div >
                <img src="images/las_iguanas.jpg">
                <div class="summary">
                <span class="title">GALAPAGOS</span></br></br>
                <span class="subtitle">American Airlines begins direct flights between Dallas and Lima, Peru</span></br></br>
                <span class="sumary">If you are already in the southern US, it can be increndibly tempting to hop the border into colorful South America! Now it's even easier to reach the acient Inca lans ...</span></br></br>
                </div>
                <div class="viewDetails">
                    <img src="images/icon-view-more-gray.png">
                 </div>
              </div>
              <div>
                <img src="images/cathedral.jpg">
                <div class="summary">
                <span class="title">PERU</span></br></br>
                <span class="subtitle">Not-to Miss Attractions on Santa Cruz Island, Galapagos</span></br></br>
                <span class="sumary">The walk to Tortuga Bay can be a steamy challenge, so it is best to get there earlier in the day. Along the way, try sportting the many small lizards that dash back and ...</span></br></br>
                </div>
                <div class="viewDetails">
                    <img src="images/icon-view-more-gray.png">
                 </div>
              </div>
              <div>
                <div >
                <img src="images/las_iguanas.jpg">
                <div class="summary">
                <span class="title">GALAPAGOS</span></br></br>
                <span class="subtitle">American Airlines begins direct flights between Dallas and Lima, Peru</span></br></br>
                <span class="sumary">If you are already in the southern US, it can be increndibly tempting to hop the border into colorful South America! Now it's even easier to reach the acient Inca lans ...</span></br></br>
                </div>
                <div class="viewDetails">
                    <img src="images/icon-view-more-gray.png">
                 </div>
              </div>
              </div>
             
            </section>
            <div class="viewAllTrips"> <a href="">All secction's <span class="fa fa-chevron-right">&nbsp;</span></a></div> 
            </div>
            
       
          
          
          
          
          
          
        
        </div>
      </div>
    </div>
  </div>
  <div class="section6">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 block-center text-center">
            <img src="images/timbre-excorcionista.jpg"></br></br>
            <div class="text-new-lester">
              <p> <span>Our newsletter.</span> It´s a sweet mix of travel insights and news for our destination</br> 
                 countries, plus get travel deals offered <span>exclusively</span> to Excursionista readers.</p></br></br>
            </div>
            <form class="form-newlester" method="post" action="newlester.php" >
             <div class="cont-inputs-newlester">
             <input class="input-mail" type="text" name="mail" ><input class="button-send-mail-newlester" type="button" value="Join">
             </div>
            </form> 
        </div>
      </div>
    </div>
  </div>
 
 <?php get_footer(); ?>


  
<?php include 'header-en.php';?>





  <div id="fullpage">
    <!--  Screen 1 Home-->  
    <div data-vide-bg="https://s3.amazonaws.com/cannedhead.smartbrix/video.mp4" data-vide-options="loop: true, muted: false, position: 0% 0%" class="section screen1"id="h-screen">
      <div class="col-sm-12 cont-home no-padding">
        <!--  Filtro-->        
        <div style="text-align:center;">
          <div class="col-sm-12">
            <!--  logo--> 
            <div class="col-sm-12">
              <a href="#"> <img class="logo" src="https://s3.amazonaws.com/cannedhead.smartbrix/logo-completo.svg"></a>
              <h4>Leader  in modular construction </h4>
            </div>
            <!--  logo certificado

            <div class=" hidden col-sm-12 certificado-home">
              <a href="#"> <img class="" src="https://s3.amazonaws.com/cannedhead.smartbrix/certificacion.png"></a>
              <h5>“Certificado de calidad ISO 9001”</h5>
            </div>
            
            --> 
          </div>
        </div>
        <!--  Down Arrow-->
        <div id="arrow-down" class="arrow-down2 ">
          <a  href="#Mision-Vision"  class="down-slide hidden-xs hidden-sm no-arrow">
            <i style="color:white;" class="ion-ios-arrow-down center-block"></i>
          </a>
        </div>    
      </div>    
    </div>
    <!--  Screen 2 Productos--> 
    <div class="section products col-xs-12 " id="p-screen">
      <h2>PRODUCT</h2>
      <h5> Check our products</h5>
      <div class="col-xs-12 col-sm-6 col-md-6 no-padding servicio">
          <a class="center-block" data-toggle="modal" data-target="#producto2-modal" href="">
              <div class="ser-img1 no-padding">
                  <div class="col-xs-12 ser-img-filter">
                      <div class="col-xs-12 servicio-hero va">
                        <h3>RAPID DEPLOYMENT STRUCTURES</h3>
                        <h6>Prefabricated warehouses </h6>
                      </div>

                      <div class="view-more">
                        <p>More information</p>
                        <div class="pull-right mas">
                         <i class="ion-plus va"></i>
                        </div>
                      </div>
                      
                  </div>
              </div>
          </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 no-padding servicio">
          <a class="center-block" data-toggle="modal" data-target="#producto1-modal" href="">
              <div class="ser-img2 no-padding">
                  <div class="col-xs-12 ser-img-filter">
                      <div class="col-xs-12 servicio-hero va">
                        <h3>MODULAR CONSTRUCTIONS</h3>
                        <h6>Portable and prefabricated buildings  </h6>
                      </div>

                      <div class="view-more">
                        <p>More information</p>
                        <div class="pull-right mas">
                         <i class=" ion-plus va"></i>
                        </div>
                      </div>
                      
                  </div>
              </div>
          </a>
      </div>
    </div>

    
    <!--  Screen 3 Proyectos--> 
    <div class="section proyectos col-xs-12 no-padding " id="p-screen">
      <div class="col-xs-12">
        <h2>PROJECTS</h2>
        <h5> Reference solutions</h5>
      </div>
        <div class="col-xs-12 col-lg-9 contenedor-slider">
          <div class="slider js-slider">
            <ul class="slider__wrap js-slider__wrap">
              <li class="slider__item js-slider__item slider__item--active">
                <img class="img-responsive" src="https://s3.amazonaws.com/cannedhead.smartbrix/proyectos/cuc-1.jpg" alt="" />
              </li>
              <li class="slider__item js-slider__item slider__item--active">
                <img class="img-responsive" src="https://s3.amazonaws.com/cannedhead.smartbrix/proyectos/hocha-1.jpg" alt="" />
              </li>
              <li class="slider__item js-slider__item slider__item--active">
                <img class="img-responsive" src="https://s3.amazonaws.com/cannedhead.smartbrix/proyectos/pab-1.jpg" alt="" />
              </li>

              <li class="slider__item js-slider__item slider__item--active">
                <img class="img-responsive" src="https://s3.amazonaws.com/cannedhead.smartbrix/proyectos/saravena-1.jpg" alt="" />
              </li>
              <li class="slider__item js-slider__item slider__item--active">
                <img class="img-responsive" src="https://s3.amazonaws.com/cannedhead.smartbrix/proyectos/rubiales-1.jpg" alt="" />
              </li>
            </ul>  
          </div>

          <div class="col-xs-12 no-padding bar-slider">
            <div class=" col-xs-2 slider__prev js-slider__prev   ">
              <i class="fa fa-angle-left "></i>
            </div>

            <div class="col-xs-8 slider-link ">
              <a class="" href="/proyectos.php">
                <p class=""> SEE ALL PROJECTS</p>
              </a>
            </div>
            <div class="col-xs-2 slider__next js-slider__next ">
              <i class="fa fa-angle-right "></i>
            </div>
          </div>          

        </div>

        <div class="col-md-3 contact-home">
          <div class="col-xs-12 contact-btn2">
              <div class="col-xs-12 contact-btn-2 va">

                  <div class=" conta-home">

                  <div class="col-xs-4 col-md-12 no-padding contact-btn-icon">
                    <i class="fa fa fa-file-o "></i>
                  </div>
                  <div class="col-md-12 no-padding">
                    <p>CONTACT US</p>
                  </div>
                  
                  <div class="col-md-12 no-padding">
                    <form id="home-form" method="post" action= "mailer.php">
                        <div class="">      
                          <input class="css-input col-md-12" type="text"  name="name" placeholder="Full name" required />
                          <input class="css-input col-md-12" type="text"  name="email" placeholder="E-mail address" required />
                          <input class="css-input col-md-12" type="text"  name="telephone" placeholder="Phone number" required />
                          <input type="hidden" name="interest" value="Contacto Home">
                        
                        </div>
                        <BR>
                        <button class="col-xs-12 send-btn-con btn-block">SEND</button>
                    </form>
                  </div>
                  
                </div>
              </div>
            </div>
                          
        </div>

    </div>


    <div class="section">
      <div class="col-xs-12 no-padding col-md-12 vid">
        <iframe class="video-home" width="560" height="315" src="https://www.youtube.com/embed/8YVG7coRV2Q" frameborder="0" allowfullscreen></iframe>
      </div>

    </div>






<?php include 'footer-en.php';?>
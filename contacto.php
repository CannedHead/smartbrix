<?php include 'header.php';?>


  <div class="fullpage-con" id="fullpage">

    <!--  Screen 1 INFO --> 
    <div class="section info1 col-xs-12 " id="contact-back">
      <div class="container no-padding">

        <h2>CONTACTO</h2>
    


        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
        
          <div class="col-xs-12 no-padding con-info1">
            <div class="col-xs-12  con-filter">
              <div class="col-xs-12  address va">
                <address>
                  <strong>Colombia</strong><br>
                  Carrera 7 # 73 - 55 Oficina 1001<br>
                  Bogotá, Colombia<br>
                  <abbr title="Phone">Tel:</abbr> (571) 805 2677<br>
                  <abbr title="Phone">E-mail:</abbr>info@smartbrix.com
                </address>
              </div>
            </div>
          </div>

          <div class="col-xs-12 no-padding con-info2">
            <div class="col-xs-12  con-filter">
              <div class="col-xs-12  address va">
                <address>
                  <strong>Panamá</strong><br>
                  Vía España (diagonal a La Garantía / Refricenter)<br>
                  Ciudad de Panamá, Panamá<br>
                  <abbr title="Phone">Tel:</abbr> (571) 805 2677<br>
                  <abbr title="Phone">E-mail:</abbr>info@smartbrix.com
                </address>
              </div>
            </div>
          </div>

        </div>


          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 contact-con">
            <div class="col-md-12">
              <p><b>CONTÁCTANOS</b><br>
              Por favor diligencie el formulario y en corto tiempo lo estaremos contactando
              </p>

            </div>
            
            <div class="col-md-12">
              <form id="contacto-form" method="post" action= "mailer-contacto.php">
                    
                    <input class="css-input col-xs-12" type="text"  name="name" placeholder="Nombre y Apellidos" required />
                    <input class="css-input col-xs-12" type="text"  name="pais" placeholder="País" required />
                    <input class="css-input col-xs-12" type="text"  name="telephone" placeholder="Teléfono" required />
                    <input class="css-input col-xs-12" type="text"  name="email" placeholder="Correo" required />

                    <textarea class="css-input col-xs-12" name="message" rows="2" placeholder="Mensaje" required></textarea>
                    <input class="css-input col-xs-12" type="text"  name="how" placeholder="¿Cómo escuchó de nosotros?" required />
                    <input type="hidden" name="interest" value="Contacto">
                  
                  
                  <BR>
                  <button class="col-xs-12 send-btn-con btn-block">ENVIAR</button>
              </form>
            </div>

            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="col-xs-12 contact-con-tra">
                  <div class="col-md-12">
                    <p ><b class="color:#fff; !important">TRABAJA CON NOSOTROS</b><br>
                    </p>

                  </div>
                  
                  <div class="col-md-12">
                    <form id="vacante-form" method="post" action= "mailer-vacante.php">
                        <div class="">      
                          <input class="css-input col-xs-12" type="text"  name="name" placeholder="Nombre y Apellidos" required />
                          <input class="css-input col-xs-12" type="text"  name="edad" placeholder="Edad" required />
                          <input class="css-input col-xs-12" type="text"  name="anos" placeholder="Años de experiencia" required />
                          <input class="css-input col-xs-12" type="text"  name="email" placeholder="Correo" required />
                          <input class="css-input col-xs-12" type="text"  name="linkcv" placeholder="Link Hoja de vida" required />
                          <input type="hidden" name="interest" value="Contacto Vacante">
         
                        </div>
                        <BR>
                        <button class="col-xs-12 send-btn-free btn-block">ENVIAR</button>
                    </form>
                  </div>

                </div>

                <a class="down-slide visible-lg" href="#">
                  <div class="col-xs-12 prf">

                    <h4 class=""> Preguntas frecuentes</h4>
                    <span class=""><i class="ion-chevron-down center-block"></i></span>
                  
                  </div>
                </a>
                



            </div>
                      
      </div><!-- End Container --> 


    
    </div>


    <!--  Screen 2 Mision--> 
    <div class="section info1 col-xs-12 " id="">

     <h2 style="color:#333 !important;">PREGUNTAS FRECUENTES</h2>
     <hr>


      <div class="container no-padding">
        <div class="col-sm-4 col-sm-offset-2">


          <div>
            <input type="checkbox" id="question1" name="q"  class="questions">
            <div class="plus ">+</div>
            <label for="question1" class="question">
              ¿Qué es un espacio modular?
            </label>
            <div class="answers">
              Es un espacio que puede destinarse a un número ilimitado de aplicaciones
              pues su configuración, tamaño y distribución interna
              pueden variar según las necesidades de cada cliente. 
            </div>
          </div>

          <div>
            <input type="checkbox" id="question2" name="q"  class="questions">
            <div class="plus ">+</div>
            <label for="question2" class="question">
              ¿Pueden compararse los productos que SmartBrix ofrece con un contenedor?
            </label>
            <div class="answers">
              Nuestros productos únicamente pueden compararse con 
              un contenedor por utilizar las mismas medidas de 
              sus piezas estructurales para la facilidad de transporte. 
            </div>
          </div>

          <div>
            <input type="checkbox" id="question3" name="q"  class="questions">
            <div class="plus ">+</div>
            <label for="question3" class="question">
              ¿Por qué debemos usar las 
              soluciones que ofrece SmartBrix y qué las hace diferentes a las demás?
            </label>
            <div class="answers">
              Con más de 7 años de experiencia, Smartbrix ofrece soluciones 
              que garantizan el perfecto equilibrio entre calidad, diseño,
              costo y plazo de entrega, mediante un servicio personalizado
              para que los deseos de nuestros clientes se hagan realidad. 
            </div>
          </div>

          <div>
            <input type="checkbox" id="question4" name="q"  class="questions">
            <div class="plus ">+</div>
            <label for="question4" class="question">
              ¿Qué usos se le pueden dar?
            </label>
            <div class="answers">
              Las aplicaciones que se les puede dar a los productos 
              SmartBrix son innumerables,  ofrecemos desde productos 
              sencillos como oficinas de obra hasta edificios de varios 
              pisos completos, siempre pensando en la mejor solución para 
              suplir las necesidades de nuestros clientes. 
              <br>
              <br>
              Aulas, oficinas, pabellones de eventos, salas de venta, 
              bodegas de almacenamiento o campamentos mineros y de obra, 
              son solo algunos ejemplos de las soluciones que ofrecemos. 
              Contáctanos y te asesoraremos para ofrecerte el producto 
              que mejor se adapte a tu proyecto.
            </div>
          </div>

          <div>
            <input type="checkbox" id="question5" name="q"  class="questions">
            <div class="plus ">+</div>
            <label for="question5" class="question">
              ¿A qué regiones puede llegar SmartBrix?
            </label>
            <div class="answers">
              Actualmente, en SmartBrix contamos con sedes en Colombia 
              y Panamá, desde las cuales operamos para servir a todo el 
              mercado latinoamericano llegando incluso a las zonas más remotas.  
            </div>
          </div>

          


        </div><!--end row -->

      <div class="col-sm-4">

        <div>
          <input type="checkbox" id="question6" name="q"  class="questions">
          <div class="plus ">+</div>
          <label for="question6" class="question">
            ¿Las construcciones son seguras?
          </label>
          <div class="answers">
            Para SmartBrix es importante mantener y asegurar
            los mas altos estándares internacionales de
            seguridad de nuestras instalaciones para
            los clientes, empleados, contratistas, proveedores y demás grupos de interés.
            <br>
            <br>
            El proceso de fabricación de nuestros productos cuenta con
            estrictos programas de Gestión de Calidad, con control 
            independiente y protocolos de prueba en cada paso. Adicionalmente, 
            <b>la compañía cuenta con el certificado de calidad ISO 9001.</b>
          
          </div>
        </div>


        <div>
          <input type="checkbox" id="question8" name="q"  class="questions">
          <div class="plus ">+</div>
          <label for="question8" class="question">
            ¿Cuáles son las ventajas de estas soluciones modulares frente a la 
            construcción tradicional?
          </label>
          <div class="answers">
            Debido a que los equipos modulares requieren
             de menos tiempo de ingeniería, permisos y ensamble, 
             nuestros tiempos son hasta un 75% más cortos que la 
             construcción tradicional. Además reducimos costos y 
             generamos un menor impacto ambiental, sin dejar a un lado una excelente calidad y diseño.
            <br>Te invitamos a leer más sobre los beneficios que ofrecemos en nuestra pagina web.
            web.
          </div>
        </div>


        <div>
          <input type="checkbox" id="question9" name="q"  class="questions">
          <div class="plus ">+</div>
          <label for="question9" class="question">
            ¿Se puede adherir o quitar espacios después de construido?
          </label>
          <div class="answers">
            Si. El tipo de estructuras utilizadas permite adherir, quitar e incluso modificar la
            configuración de la construcción.
          </div>
        </div>

        <div>
          <input type="checkbox" id="question10" name="q"  class="questions">
          <div class="plus ">+</div>
          <label for="question10" class="question">
            ¿Puede tener varios pisos o niveles?
          </label>
          <div class="answers">
            Si. Nuestras estructuras pueden tener el numero de pisos 
            o niveles que el cliente requiera. Te invitamos a conocer 
            más sobre nuestros proyectos de referencia en nuestra página web. 
          </div>
        </div>


       

      </div><!--end row -->









      </div>
      
    </div>



    

    


 <?php include 'footer.php';?>
  


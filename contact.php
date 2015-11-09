<?php include 'header-en.php';?>


  <div class="fullpage-con" id="fullpage">

    <!--  Screen 1 INFO --> 
    <div class="section info1 col-xs-12 " id="contact-back">
      <div class="container no-padding">

        <h2>CONTACT US</h2>
    


        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
        
          <div class="col-xs-12 no-padding con-info1">
            <div class="col-xs-12  con-filter">
              <div class="col-xs-12  address va">
                <address>
                  <strong>Colombia</strong><br>
                  Cra. 7 # 73 - 55 Office 1001<br>
                  Bogotá, Colombia<br>
                  <abbr title="Phone">Phone:</abbr> (571) 805 2677<br>
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
                  Rout to España (diagonal to La Garantía / Refricenter)<br>
                  Panama City, Panamá<br>
                  <abbr title="Phone">Phone:</abbr> (571) 805 2677<br>
                  <abbr title="Phone">E-mail:</abbr>info@smartbrix.com
                </address>
              </div>
            </div>
          </div>

        </div>


          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 contact-con">
            <div class="col-md-12">
              <p><b>CONTACT US</b><br>
              Please fill in the form below and we will get back to you as soon as possible
              </p>

            </div>
            
            <div class="col-md-12">
              <form id="contacto-form" method="post" action= "mailer-contacto.php">
                    
                    <input class="css-input col-xs-12" type="text"  name="name" placeholder="Name" required />
                    <input class="css-input col-xs-12" type="text"  name="pais" placeholder="Country" required />
                    <input class="css-input col-xs-12" type="text"  name="telephone" placeholder="Pone number" required />
                    <input class="css-input col-xs-12" type="text"  name="email" placeholder="E-mail adsdress" required />

                    <textarea class="css-input col-xs-12" name="message" rows="2" placeholder="Message" required></textarea>
                    <input class="css-input col-xs-12" type="text"  name="how" placeholder="How did you discover us?" required />
                    <input type="hidden" name="interest" value="Contacto">
                  
                  
                  <BR>
                  <button class="col-xs-12 send-btn-con btn-block">SEND</button>
              </form>
            </div>

            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="col-xs-12 contact-con-tra">
                  <div class="col-md-12">
                    <p ><b class="color:#fff; !important">WORK WITH US</b><br>
                    </p>

                  </div>
                  
                  <div class="col-md-12">
                    <form id="vacante-form" method="post" action= "mailer-vacante.php">
                        <div class="">      
                          <input class="css-input col-xs-12" type="text"  name="name" placeholder="Full name" required />
                          <input class="css-input col-xs-12" type="text"  name="edad" placeholder="Age" required />
                          <input class="css-input col-xs-12" type="text"  name="anos" placeholder="Years of experience" required />
                          <input class="css-input col-xs-12" type="text"  name="email" placeholder="E-mail address" required />
                          <input class="css-input col-xs-12" type="text"  name="linkcv" placeholder="CV url" required />
                          <input type="hidden" name="interest" value="Contacto Vacante">
         
                        </div>
                        <BR>
                        <button class="col-xs-12 send-btn-free btn-block">SEND</button>
                    </form>
                  </div>

                </div>

                <a class="down-slide visible-lg" href="#">
                  <div class="col-xs-12 prf">

                    <h4 class=""> FREQUENTLY ASKED QUESTIONS</h4>
                    <span class=""><i class="ion-chevron-down center-block"></i></span>
                  
                  </div>
                </a>
                



            </div>
                      
      </div><!-- End Container --> 


    
    </div>


    <!--  Screen 2 Mision--> 
    <div class="section info1 col-xs-12 " id="">

     <h2 style="color:#333 !important;">FREQUENTLY ASKED QUESTIONS</h2>
     <hr>


      <div class="container no-padding">
        <div class="col-sm-4 col-sm-offset-2">


          <div>
            <input type="checkbox" id="question1" name="q"  class="questions">
            <div class="plus ">+</div>
            <label for="question1" class="question">
              What is a modular space?
            </label>
            <div class="answers">
              It is a space that can be used for an unlimited number of applications thanks to its configuration, size and internal distribution which may vary according to the needs of each client.

            </div>
          </div>

          <div>
            <input type="checkbox" id="question2" name="q"  class="questions">
            <div class="plus ">+</div>
            <label for="question2" class="question">
              Can the SmartBrix products be compared to a container?
            </label>
            <div class="answers">
              Our products can only be compared to a container because of the measures of its parts which make transportation easy.
            </div>
          </div>

          <div>
            <input type="checkbox" id="question3" name="q"  class="questions">
            <div class="plus ">+</div>
            <label for="question3" class="question">
              Why should we use the solutions offered by SmartBrix and what makes them different from others?
            </label>
            <div class="answers">
              With over 7 years of experience in Latin America, Smartbrix provides solutions that guarantee the perfect balance between quality, design, cost and delivery time.  We do this through a personalized service which aims to make our clients' wishes come true.
            </div>
          </div>

          <div>
            <input type="checkbox" id="question4" name="q"  class="questions">
            <div class="plus ">+</div>
            <label for="question4" class="question">
              How can you use it?
            </label>
            <div class="answers">
              SmartBrix products can be used in countless ways. From simple products, like work offices to more complex products, like multi-floored buildings. What’s more, we are always thinking about how we can best meet the needs of our clients. 
              <br>
              <br>
              More examples of how SmartBrix products can be used are: classrooms, offices, event halls, showrooms, storage warehouses and mining camps. Contact us and we will advise you to the product that best suits to your project.
            </div>
          </div>

          <div>
            <input type="checkbox" id="question5" name="q"  class="questions">
            <div class="plus ">+</div>
            <label for="question5" class="question">
              Where does SmartBrix currently operate?
            </label>
            <div class="answers">
              We currently have offices in Colombia and Panama, from which, we are able to serve the entire Latin American market even the most remote areas. 
            </div>
          </div>

          


        </div><!--end row -->

      <div class="col-sm-4">

        <div>
          <input type="checkbox" id="question6" name="q"  class="questions">
          <div class="plus ">+</div>
          <label for="question6" class="question">
            Are the buildings safe?
          </label>
          <div class="answers">
            For us it is very important to ensure security and the highest international quality standards in our facilities for our clients, employees, contractors, suppliers and other stakeholders. 
            <br>
            <br>
           The manufacturing plants have strict Quality Management Programs with independent monitoring and testing protocols that promote superior quality  every step of the way.
            Additionally,  
            <b>the company counts with ISO 9001 quality certification.</b>
          
          </div>
        </div>


        <div>
          <input type="checkbox" id="question8" name="q"  class="questions">
          <div class="plus ">+</div>
          <label for="question8" class="question">
            What are the advantages of these modular solutions in respect to traditional construction?
          </label>
          <div class="answers">
            The modular equipment requires less time to engineer, need less permits and assembly time is shorter which makes our modular products 75% more efficient than traditional construction. We also reduce costs and generate less environmental impact, always aiming for an excellent quality and the best design.
            <br>We invite you to read more about the benefits we offer on our website.
          </div>
        </div>


        <div>
          <input type="checkbox" id="question9" name="q"  class="questions">
          <div class="plus ">+</div>
          <label for="question9" class="question">
            Can you attach or remove areas after they are built?
          </label>
          <div class="answers">
            Yes. The type of structures used allow us to attach, remove, and even modify the configuration of the building.
          </div>
        </div>

        <div>
          <input type="checkbox" id="question10" name="q"  class="questions">
          <div class="plus ">+</div>
          <label for="question10" class="question">
            Does it allow for multiple floors or levels?
          </label>
          <div class="answers">
            Yes. Our structures can have the number of floors or levels that the client requires. We invite you to learn more about our reference projects on our website.
          </div>
        </div>


       

      </div><!--end row -->









      </div>
      
    </div>



    

    


 <?php include 'footer-en.php';?>
  


<?php
    require_once "header.php";
?>   
    <h1 style="margin-left:160px;margin-top:70px;"><b>GET IN <span style="color:blue;">TOUCH</b></span></h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-5 col-md-6">        
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

        <!--Grid row-->
            <div class="row">

            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                   
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <input type="text" id="email" name="email" class="form-control" placeholder="Your Email">
                  
                </div>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            <div class="col-md-12">
                <div class="md-form mb-0">
                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Your Subject">
                </div>
            </div>
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12">

                <div class="md-form">
                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your Message"></textarea>
                </div>

            </div>
        </div>
        <!--Grid row-->

        </form>
    </div>
        <div class="colum" style="font-size:48px;margin-left:100px;text-align:center;"><b>SMALL <br>ENOUGH TO CARE, 
            <span style="color:blue;">BIG <br style="">ENOUGH TO PERFORM</span></b></div>
           
        </div>
</div>
    
    <div>
    <h1 style="margin-left:56px;color:black;font-size:60px;"><b>CONTACT</b></h1>
    <h5 style="margin-left:55px;color:blue;"><b>Address:</b></h5>
        <address style="margin-left:80px;" >       
            <p>Head Office</p>
            <p>305, Afya Center Business,</p>
            <p>P.O.Box 24078,</p>
            <p>+25471 433 969</p>
            <a href="logistics@gmail.com">logistics@gmail.com</a>
        </address>
    </div>

<?php require_once "footer.php"?>

















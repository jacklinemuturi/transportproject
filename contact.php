<?php
    require_once "header.php";
    require_once "contact.php";
?>   
<div class="container">
    <div class="row">
        <div class="col col-md-6">
        <form class="needs-validation" novalidate>
                <!-- <form class="form-inline"> -->
                <div class="form-group mb-2"  >
                    <label for="staticEmail2" class="sr-only" >Email</label>
                    <input style="width:50px;" type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
        </form>
    </div>
</div>

    <!-- <body style="background-color:black;"> 
        <div style="padding-left:140px;margin-top:140px;">
            <h4><b style="color:white;font-size:50px;">GET IN </b><b style="color:blue;font-size:50px;">TOUCH</b></h4>
                <form>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" style="width:300px;margin-left:-130px;border-white;border:solid;" class="form-control" placeholder="First name">
                        </div>
                        <div>
                            <input type="text" style="width:300px;margin-left:-380px;border:solid;" class="form-control" placeholder="Last name"><br>
                            <input type="text" style="width:600px;margin-left:-680px;border:solid;" class="form-control" placeholder="Last name"><br>
                            <textarea  type="text" style="width:600px;margin-left:-680px;border:solid;height:150px;" name="name" id="text" cols="30"></textarea>
                        </div>  
                    </div>
                </form> -->
                <!-- <div class="col-6">
                    <p>exelence</p>
                
                
                </div>
            </div>
        </div>
</div> -->
         -->

















<?php require_once "footer.php"?>
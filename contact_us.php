<?php

include './header.php';
?>
<section class="contac_us">
    <div class="container">
        <div class="heading">
            <h1> CONTACT US </h1>
            <img src="images/alpona/alpona4.png">
        </div>
        <div class="address_info">
            <div class="row">
                <div class="col-sm-4">
                    <div class="addresss">
                        <h4> Boshundhara Office: <br> </h4>
                        <ul>
                            <li> <a href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> : Bashundhara City, Dhaka 1215, Bangladesh </a> </li>
                            <li> <a href="#"> <i class="fa fa-phone" aria-hidden="true"></i> : +8801 788 051 637 </a> </li>
                            <li> <a href="#"> <i class="fa fa-envelope-o" aria-hidden="true"></i> : jewelery@gmail.com </a> </li>
                            <li> <a href="#"> <i class="fa fa-globe" aria-hidden="true"></i> : www.jewelery.com  </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 contact-form">
                    <form id="contact" method="post" class="contact_form" role="form">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus/>
                            </div>
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                            </div>
                        </div>
                        <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                        <br />
                        <div class="row">
                            <div class="col-xs-12 col-md-12 form-group">
                                <button class="btn btn-primary pull-right" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d786536.0785935738!2d89.70773395754279!3d23.685692601498513!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5c2b8755e4327004!2sCITY+Bank+ATM!5e0!3m2!1sen!2s!4v1493718773670" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>
<?php include './footer.php'; ?>



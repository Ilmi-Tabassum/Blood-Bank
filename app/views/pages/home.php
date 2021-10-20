<?php
   require APPROOT . '\views\includes\header.php';
?>

    <!-- #End header -->
    <?php
       require APPROOT . '\views\includes\menu.php';
    ?>
    <!-- #End banner -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-info">
                        <h1>Find The Doner You Need</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
                        <a href="<?php echo URLROOT; ?>/Donors/donorReg" class="btn theme-btn-red">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #End server -->
    <section class="eligibility">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-info">
                        <h1>Eligibility</h1>
                        <p> </p>
                        <a href="<?php echo URLROOT; ?>/views/eligibility" class="btn theme-btn-dark">Check Now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/elgi.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #End eligibility -->
    <section class="services">
        <div class="container">
            <div class="heading">
                <h1>Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-service">
                        <div class="service-img">
                            <img src="img/donor.jpg" alt="">
                        </div>
                        <a href="#">Become a donor</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-service">
                        <div class="service-img">
                            <img src="img/finddonor.jpg" alt="">
                        </div>
                        <a href="#">Find a donor</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #End services -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="heading">
                <h1>Contact Us</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="" id="message" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-lg theme-btn-red"><i class="fas fa-paper-plane"></i>Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- #End contact -->
    <?php
   require APPROOT . '\views\includes\footer.php';
?>
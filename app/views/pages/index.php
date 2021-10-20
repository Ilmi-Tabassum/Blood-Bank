<?php
   require APPROOT . '\views\includes\header.php';
?>
    <?php
       require APPROOT . '\views\includes\menu.php';
    ?>
    <?php if(isset($_SESSION['user_id'])) : ?>
        <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h1>Welcome</h1>
                        <h2>Hello!...<?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?></h2>
                        <p>Blood Donation Is The Act Of Giving Blood To Someone Who Needs It. 
                            It Is Not Just About Giving Blood, But It Is An Act Of Kindness That Saves The Lives Of Hundreds Of People.
                            These Fifteen Minutes Of Your Life Can Save Someone’s Entire Life.
                            You Can’t Even Imagine That Donating One Bag Of Blood Can Be So Beneficial To The Human Race.
                            Donating The Blood Without Expecting Or Asking For Any Money Or Gesture Is A Great Act Of Kindness,
                                And If You Are 18 Years Old Or Above, You Should Definitely Take Part In This Act Of Kindness.</p>
                            <a href="<?php echo URLROOT; ?>/posts/index" class="btn theme-btn-red">Find Donor</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img">
                    <img src="<?php echo URLROOT; ?>../img/360_F_432510362_2hynJEdbbZaWN7TMC0MrUe6xcq9HXAvP.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-img">
                        <img src="<?php echo URLROOT; ?>../img/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-info">
                            <h1>Thinking about Becoming a Donor?</h1>
                            <p> Blood donation is carried out at the hands of a trained medical professional and 
                                in a safe environment, as per the medical standards.
                                Donating blood is a humanitarian gesture and more people are being well aware of 
                                the need for it by each passing year. It is good social work as it indicates that 
                                people are getting more sensible towards the sufferings of others. According to a 
                                report by the World Health Organization (WHO), around 117.4 million blood donations 
                                are collected globally.
                            </p>
                            <a href="<?php echo URLROOT; ?>/Donors/reg" class="btn theme-btn-red">register</a>
                        </div>
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
                        <h1>Learn if you're eligible or not?</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
                        <a href="<?php echo URLROOT; ?>/views/eligibility" class="btn theme-btn-dark">Check Now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="<?php echo URLROOT; ?>../img/elgi.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- #End eligibility -->
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
    <?php else : ?>
        <div class="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <h1>Need a donor?</h1>
                                <p>Blood Donation Is The Act Of Giving Blood To Someone Who Needs It. 
                                    It Is Not Just About Giving Blood, But It Is An Act Of Kindness That Saves The Lives Of Hundreds Of People.
                                    These Fifteen Minutes Of Your Life Can Save Someone’s Entire Life.
                                    You Can’t Even Imagine That Donating One Bag Of Blood Can Be So Beneficial To The Human Race.
                                    Donating The Blood Without Expecting Or Asking For Any Money Or Gesture Is A Great Act Of Kindness,
                                        And If You Are 18 Years Old Or Above, You Should Definitely Take Part In This Act Of Kindness.</p>
                                    <a href="<?php echo URLROOT; ?>/users/login" class="btn theme-btn-red">Become a Donor</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-img">
                            <img src="<?php echo URLROOT; ?>../img/360_F_432510362_2hynJEdbbZaWN7TMC0MrUe6xcq9HXAvP.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #End banner -->
        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-img">
                        <img src="<?php echo URLROOT; ?>../img/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-info">
                            <h1>About Us</h1>
                            <p> Blood donation is carried out at the hands of a trained medical professional and 
                                in a safe environment, as per the medical standards.
                                Donating blood is a humanitarian gesture and more people are being well aware of 
                                the need for it by each passing year. It is good social work as it indicates that 
                                people are getting more sensible towards the sufferings of others. According to a 
                                report by the World Health Organization (WHO), around 117.4 million blood donations 
                                are collected globally.As we all know now is the time for embracing the 4th industrial 
                                revelution , so outr attempt is to help people find donors fast and smoth.
                            </p>
                            <a href="#" class="btn theme-btn-red">Learn More</a>
                        </div>
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
                            <p>Although it is a noble act to donate blood there are some cases when we can not doate blood. Find out for which reasosns we can not donate blood </p>
                            <a href="<?php echo URLROOT; ?>/views/eligibility" class="btn theme-btn-dark">Check Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                        <img src="<?php echo URLROOT; ?>../img/elgi.png" alt="">
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
                            <img src="<?php echo URLROOT; ?>../img/donor.jpg" alt="">
                            </div>
                            <a href="#">Become a donor</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-service">
                            <div class="service-img">
                            <img src="<?php echo URLROOT; ?>../img/3.jpg" alt="">
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
    <?php endif; ?>
    <?php
   require APPROOT . '\views\includes\footer.php';
?>

<header class="theme-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-6 col-6">
                    <i class="fa fa-bars" id="hamburger"></i>
                    <a href="#">
                        <div class="logo">
        
                        </div>
                    </a>
                </div>
                <div class="col-lg-8 col-md-8">
                    <?php if(isset($_SESSION['user_id'])) : ?>
                        <div class="menu">
                            <ul>
                                <li><a href="<?php echo URLROOT; ?>/views/index">Home</a></li>
                                <li><a href="">Services</a>
                                    <ul class="submenu">
                                        <li><a href="<?php echo URLROOT; ?>/Donors/reg">Become a doner</a></li>
                                        <li><a href="<?php echo URLROOT; ?>/posts/index">Find doner</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo URLROOT; ?>/views/eligibility">Eligibility</a></li>
                                <li><a href="<?php echo URLROOT; ?>/views/about">Blood Banks</a></li>
                                <li><a href="<?php echo URLROOT; ?>/views/index#contact">Contact us</a></li>
                            </ul>
                        </div>
                    <?php else : ?>
                        <div class="menu">
                            <ul>
                                <li><a href="<?php echo URLROOT; ?>/views/index">Home</a></li>
                                <li><a href="">Services</a>
                                    <ul class="submenu">
                                        <li><a href="<?php echo URLROOT; ?>/users/login">Become a doner</a></li>
                                        <li><a href="<?php echo URLROOT; ?>/posts/index">Find doner</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo URLROOT; ?>/views/eligibility">Eligibility</a></li>
                                <li><a href="<?php echo URLROOT; ?>/views/about">Blood Banks</a></li>
                                <li><a href="<?php echo URLROOT; ?>/views/index#contact">Contact us</a></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="cta-btn">
                        <?php if(isset($_SESSION['user_id'])) : ?>
                            <a href="<?php echo URLROOT; ?>/users/logout" class="btn theme-btn-dark">Logout</a>
                        <?php else : ?>
                            <a href="<?php echo URLROOT; ?>/users/register" class="btn theme-btn">Sign up</a>
                            <a href="<?php echo URLROOT; ?>/users/login" class="btn theme-btn-dark">Sign in</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

<?php
   require APPROOT . '\views\includes\header.php';
?>
    <?php
       require APPROOT . '\views\includes\menu.php';
    ?>
<section class="contact" id="contact" style="background: url(<?php echo URLROOT; ?>../img/2.jpg), #d4755f;background-position: top;background-repeat: no-repeat;background-size: cover;background-blend-mode: overlay;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="<?php echo URLROOT; ?>/Users/login" method ="POST"> 
                        <div class="heading">
                            <h1>Sign In</h1>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" placeholder="Username *" class="form-control" id="username"name="username">
                            <span class="invalidFeedback">
                                <?php echo $data['usernameError']?> 
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" placeholder="password *" class="form-control" id="Password" name="password">
                            <span class="invalidFeedback">
                                <?php echo $data['passwordError']?> 
                            </span>
                        </div>
                        <div class="form-group">
                            <a href="<?php echo URLROOT; ?>/Users/register">Don't you have an account? Create one</a>
                        </div>
                        <button class="btn btn-lg theme-btn-dark"><i class="fas fa-paper-plane"></i>Log in</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
   require APPROOT . '\views\includes\footer.php';
?>
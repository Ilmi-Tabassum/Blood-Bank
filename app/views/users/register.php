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
                <form id="register-form" method="POST" action="<?php echo URLROOT; ?>/Users/register"
                >
                        <div class="heading">
                            <h1>Sign Up</h1>
                        </div>
                        <div class="form-group">
                        <label for="lastname">first Name</label>
                            <input type="text" placeholder="firstname *" class="form-control"  name="firstname">
                            <span class="invalidFeedback">
                                <?php echo $data['firstnameError']?> 
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" placeholder="lastname *" class="form-control"  name="lastname">
                            <span class="invalidFeedback">
                                <?php echo $data['lastnameError']?> 
                            </span>
                        </div>
                        
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" placeholder="username *" class="form-control"  name="username">
                            <span class="invalidFeedback">
                                <?php echo $data['usernameError']?> 
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" placeholder="email *" class="form-control"  name="email">
                            <span class="invalidFeedback">
                                <?php echo $data['emailError']?> 
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" placeholder="password *" class="form-control"  name="password">
                            <span class="invalidFeedback">
                                <?php echo $data['passwordError']?> 
                            </span>
                        </div>
                        <div class="form-group">
                        <label for="Password">Confirm Password</label>
                        <input type="password" placeholder="Confirm Password *"  class="form-control" name="confirmPassword">
                              <span class="invalidFeedback">
                               <?php echo $data['confirmPasswordError'];?>
                                  </span>
                        </div>
                        
                        <div class="form-group">
                            <a href="<?php echo URLROOT; ?>/users/login">Have an account? Sign in</a>
                        </div>
                        <button class="btn btn-lg theme-btn-dark" type="submit" value="submit"><i class="fas fa-paper-plane"></i>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
   require APPROOT . '\views\includes\footer.php';
?>
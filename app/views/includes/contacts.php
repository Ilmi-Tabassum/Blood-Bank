<?php
   require APPROOT . '\views\includes\header.php';
?>
    <?php
       require APPROOT . '\views\includes\menu.php';
    ?>

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
    <?php
   require APPROOT . '\views\includes\footer.php';
?>
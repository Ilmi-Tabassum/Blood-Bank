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
                    <form method="POST" action="<?php echo URLROOT; ?>/Donors/reg">
                        <div class="heading">
                            <h1>Donor Registration</h1>
                        </div>
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" name="firstname" class="form-control" id="firstname">
                            <span class="invalidFeedback">
                                <?php echo $data['firstnameError']?> 
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname">
                            <span class="invalidFeedback">
                                <?php echo $data['lastnameError']?> 
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <span class="invalidFeedback">
                                <?php echo $data['emailError']?> 
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                            <span class="invalidFeedback">
                                <?php echo $data['phoneError']?> 
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="blood">Select Blood Group</label>
                            <select name="blood" id="blood" class="form-control">
                                <option value="0"></option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                            <span class="invalidFeedback">
                                <?php echo $data['bloodError']?> 
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="hiv">Do you have HIV?</label>
                            <select name="hiv" id="hiv" class="form-control">
                                <option value="0"></option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            <span class="invalidFeedback">
                                <?php echo $data['hivError']?> 
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="cancer">Do you have Cancer?</label>
                            <select name="cancer" id="cancer" class="form-control">
                            <option value="0"></option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            <span class="invalidFeedback">
                                <?php echo $data['cancerError']?> 
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="illness">Do you have any blood related Illness?</label>
                            <select name="illness" id="illness" class="form-control">
                            <option value="0"></option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            <span class="invalidFeedback">
                                <?php echo $data['illnessError']?> 
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="blood_preassure">do you have blood preassure?</label>
                            <select name="blood_preassure" id="blood_preassure" class="form-control">
                            <option value="0"></option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            <span class="invalidFeedback">
                                <?php echo $data['blood_preassureError']?> 
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="bloodtime">Have you donated blood within 2 months?</label>
                            <select name="bloodtime" id="bloodtime" class="form-control">
                            <option value="0"></option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            <span class="invalidFeedback">
                                <?php echo $data['bloodtimeError']?> 
                            </span>
                        </div>
                        <button class="btn btn-lg theme-btn-dark"><i class="fas fa-paper-plane" value="submit" type="submit"></i>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php
   require APPROOT . '\views\includes\footer.php';
?>
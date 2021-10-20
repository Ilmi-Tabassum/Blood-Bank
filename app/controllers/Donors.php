<?php
class Donors extends Controllers {
    public function __construct() {
        $this->userModel = $this->model('Donor');
    }

    public function reg() {

        $data = [
            'firstname' => '',
            'lastname' => '',
            'email' => '',
            'phone' => '',
            'blood' => '',
            'hiv' => '', 
            'cancer' => '',
            'bloodtime' => '',
            'blood_preassure'=> '',
            'illness'=> '',
            'firstnameError' => '',
            'lastnameError' => '',
            'emailError' => '',
            'phoneError' => '',
            'bloodError' => '',
            'hivError' => '',
            'cancerError' => '',
            'bloodtimeError' => '',
            'blood_preassureError'=> '',
            'illnessError'=> ''

            
        ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              $data = [
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),
                'blood' => trim($_POST['blood']),
                'hiv' => trim($_POST['hiv']),
                'cancer' => trim($_POST['cancer']),
                'bloodtime' => trim($_POST['bloodtime']),
                'blood_preassure'=> trim($_POST['blood_preassure']),
                'illness'=> trim($_POST['illness']),
                'firstnameError' => '',
                'lastnameError' => '',
                'emailError' => '',
                'phoneError' => '',
                'bloodError' => '',
                'hivError' => '',
                'cancerError' => '',
                'bloodtimeError' => '',
                'blood_preassureError'=> '',
                'illnessError'=> ''
            
            ];

            $phoneValidation = "/^[+0-9]*$/";
            $textValidation = "/^[a-zA-Z]*$/";

            //Validate name 
            if (empty($data['firstname'])) {
                $data['firstnameError'] = 'Please enter username.';
            } elseif (!preg_match($textValidation, $data['firstname'])) {
                $data['firstnameError'] = 'Name can only contain letters.';
            }
            if (empty($data['lastname'])) {
                $data['lastnameError'] = 'Please enter username.';
            } elseif (!preg_match($textValidation, $data['lastname'])) {
                $data['lastnameError'] = 'Name can only contain letters.';
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByEmail($data['email'])) {
                $data['emailError'] = 'Email is already taken.';
                }
            }
            // Validate phone
            if(empty($data['phone'])){
                $data['phoneError'] = 'Please enter phone number.';
              } elseif(strlen($data['phone']) >11){
                $data['phoneError'] = 'Phone must be 11 characters';}
                 elseif (!preg_match($phoneValidation, $data['phone'])) {
                $data['phoneError'] = 'invalid phone number';
              }

              //validate others
                    if(empty($data['hiv'])){
                        $data['hivError'] = 'Please enter an option.';}
                    elseif ($data['hiv']=='Yes') {
                        $data['hivError'] = 'You can not Become a donor';
                    } 
                    if(empty($data['cancer'])){
                        $data['cancerError'] = 'Please enter an option.';}
                    elseif ($data['cancer']=='Yes') {
                        $data['cancerError'] = 'You can not Become a donor';
                    }
                    if(empty($data['illness'])){
                        $data['illnessError'] = 'Please enter an option.';}
                    elseif ($data['illness']=='Yes') {
                        $data['illnessError'] = 'You can not Become a donor';
                    }
                    if(empty($data['bloodtime'])){
                        $data['bloodtimeError'] = 'Please enter an option.';}
                    elseif ($data['bloodtime']=='Yes') {
                        $data['bloodtimeError'] = 'You can not Become a donor';}

                    if(empty($data['blood_preassure'])){
                        $data['blood_preassureError'] = 'Please enter an option.';}
                    elseif ($data['blood_preassure']=='Yes') {
                        $data['blood_preassureError'] = 'You can not Become a donor';}
        

           
            // Make sure that errors are empty
            if (empty($data['firstnameError'])&& empty($data['lastnameError'])
            && empty($data['emailError']) && empty($data['phoneError']) 
            && empty($data['bloodError']) && empty($data['hivError'])
             && empty($data['cancerError']) && empty($data['bloodtimeError'])
             && empty($data['illnessError'])&& empty($data['blood_preassureError'])) {


                //Register user from model function
                if ($this->userModel->reg($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/pages/index');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('pages/donorReg', $data);
    } 
  

    }
    
<?php
class Cons extends Controllers {
    public function __construct() {
        $this->contactModel = $this->model('contact');
    }

    public function contacts() {

        $data = [
                'name' => '',
                'email' => '',
                'phone' => '',
                'address' => '',
                'message' => '',
                'nameError' => '',
                'emailError' => '',
                'phoneError' => '',
                'addressError' => '',
                'messageError' => ''

            
        ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),
                'address' => trim($_POST['address']),
                'message' => trim($_POST['message']),
                'nameError' => '',
                'emailError' => '',
                'phoneError' => '',
                'addressError' => '',
                'messageError' => ''
                
            ];

            $phoneValidation = "/^[+0-9]*$/";
            $textValidation = "/^[a-zA-Z]*$/";

            //Validate name 
            if (empty($data['name'])) {
                $data['nameError'] = 'Please enter username.';
            } elseif (!preg_match($textValidation, $data['name'])) {
                $data['nameError'] = 'Name can only contain letters.';
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->contactModel->findUserByEmail($data['email'])) {
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
                    if(empty($data['address'])){
                        $data['addressError'] = 'Please enter an address.';}
                    else  {
                        $data['addressError'] = '';
                    } 
                    if(empty($data['message'])){
                        $data['messageError'] = 'Please enter a message.';}
                    else  {
                        $data['messageError'] = '';
                    } 
        
        

           
            // Make sure that errors are empty
            if (empty($data['nameError'])
            && empty($data['emailError']) && empty($data['phoneError']) 
            && empty($data['addressError']) && empty($data['messageError'])
            ) {


                //Register user from model function
                if ($this->contactModel->contacts($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/pages/index');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('includes/contacts', $data);
    } 
  

    }
    
<?php
class Donor {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function reg($data) {
        $this->db->query('INSERT INTO reg (firstname, lastname, email, phone, blood) VALUES(:firstname, :lastname, :email, :phone, :blood)');

        //Bind values
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':blood', $data['blood']);
       

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM reg WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

}

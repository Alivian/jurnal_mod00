<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function Register() {

        date_default_timezone_set('Asia/Jakarta');

        /*CREATE ARRAY NAME DATA
        Take data from variabel "Username,Email,Pass  and Registtime"
        Password using md5($this->input->post('pass'))
        Registime using date (Date("d-m-Y, H:i:s"))
         */

        if($this->isExist($data['Username'])) {
            return false;
        } else {
            /* 18 . Here condition is a variabel $data insert into database table register.
                19.  here condition input username and pass from $data to table login. 
                


                23. return true;
            */
            
        }
    }

    public function isExist($username) {

        $this->db->where("Username",$username);
        $result = $this->db->get('login')->result_array();
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }

    public function findUser() {
        /* To find user using variabel $data for array.
            Use username and password and get data from form login.php
            the data name is a your_name and your_pass

        */



        /* Condition where $data in database.
           using variabel $reulst to get data form login table
           return $result into result_array();
            
        */

    }

    public function imageUpload($imgName) {

        /* here make a query insert to table image_path
         condition where ImgName => $ImgName

         */

        
    }

    public function getImage() {
        // 89. return data form image_path as result_array()

      
    }
}
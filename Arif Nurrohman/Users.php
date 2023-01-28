<?php 
class Users {
    private $employee_id;
    private $fullname;
    private $role;
    private $password;
    
    
    function set_login_data($employee_id, $password){
        $this->employee_id = $employee_id;
        $this->password = $password;
    }

    function set_profile_data($employee_id, $fullname, $role, $password){
        $this->employee_id =$employee_id;
        $this->fullname = $fullname;
        $this->role = $role;
    }

    function get_employee_id(){
        return $this->employee_id;
    }

    function get_password(){
        return $this->password;
    }
}

?>
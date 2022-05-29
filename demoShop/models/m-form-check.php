<?php 
    function isValidMail($email) {

        $email = trim($email);
        if(empty($email))
            return false;
        else if (!str_contains($email, '@'))
            return false;
        else if(str_contains($email, ' '))
        {
             //echo $_POST['email'];
             return false;
        }

        return true;
    }

    function isValidName($name)
    {
        $name = trim($name);
        if(empty($name))
            return false;

        return true;
    }

    function isValidPhoneNumer($phone){
        $phone = trim($phone);
        if(empty($phone))
            return false;
        $newPhone =str_replace(' ', '', $phone);
        if(strlen($newPhone)>=9 && strlen($newPhone)<=11 && is_integer(intval($phone)))
            return true;
        return false;
    }

    function isValidZip($zip){
        $zip = trim($zip);
        if(empty($zip))
            return false;
        else if(str_contains($zip, ' '))
        {
             //echo $_POST['email'];
             return false;
        }
        else if(str_contains($zip, '.'))
        {
             //echo $_POST['email'];
             return false;
        }
        if(is_numeric($zip))
            return true;
        return false;
    }

 ?>


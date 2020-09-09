<?php

    $array = array("firstname" => "", "name" => "", "email" => "", "phone" => "", "message" => "",
    "firstnameError" => "", "nameError" => "", "emailError" => "", "phoneError" => "", "messagError" => "", "isSuccess" => false);

    $emailTo = "dhellemme.a@gmail.com";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $array["firstname"] = verifyInput($_POST["firstname"]);
        $array["name"] = verifyInput($_POST["name"]);
        $array["email"] = verifyInput($_POST["email"]);
        $array["phone"] = verifyInput($_POST["phone"]);
        $array["message"] = verifyInput($_POST["message"]);
        $array["isSuccess"] = true;
        $emailText = "";

        if(empty($array["firstname"]))
        {
            $array["firstnameError"] = "Je souhaite connaître ton prénom !";
            $array["isSuccess"] = false;
        }
        else 
        {
            $emailText .= "Firstname: {$array["firstname"]}\n"; //accolade signale présence variable
        }
            
        if(empty($array["name"]))
        {
            $array["nameError"] = "Je souhaite connaître ton nom !";
            $array["isSuccess"] = false;
        }
        else 
        {
            $emailText .= "Name: {$array["name"]}\n";
        }
            
        if(!isEmail($array["email"])) //en rapport avec la fonction isEmail
        {
            $array["emailError"] = " Adresse-mail invalide ";
            $array["isSuccess"] = false;
        }
        else
        {
            $emailText .= "Email: {$array["email"]}\n";
        }

        if(!isPhone($array["phone"])) //en rapport avec la fonction isPhone
        {
            $array["phoneError"] = " Que des chiffres et des espaces stp ...";
            $array["isSuccess"] = false;
        }
        else
        {
            $emailText .= "Phone: {$array["phone"]}\n";
        }

        if(empty($array["message"]))
        {
            $array["messageError"] = "Dis-moi tout !";
            $array["isSuccess"] = false;
        }
        else 
        {
            $emailText .= "Message: {$array["message"]}\n";
        }
            
        if($array["isSuccess"]) //envoi de l'email
        {
            $headers = "From: {$array["firstname"]} {$array["name"]} <{$array["email"]}>\r\nReply-To: {$array["email"]}";
            mail($emailTo, "Quelqu'un veut vous contacter !", $emailText, $headers);
        }

        echo json_encode($array);

    }

    function isPhone($var)
    {
        return preg_match("/^[0-9 ]*$/", $var);
    }

    function isEmail($var)
    {
        return filter_var($var, FILTER_VALIDATE_EMAIL); //renvoie true or false
    }

    function verifyInput($var)
    { // partie securite
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        return $var;
    }

?>

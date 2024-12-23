<?php
    require "db/db.php";

    function check_existing_email($email) {
        global $conn;
        $flag = false;

        $query = "SELECT `id` FROM `users` WHERE `email` = '".$conn->real_escape_string($email)."' LIMIT 1";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $flag = true;
        }
        
        return $flag;
    }

    function save_registration($name, $email, $password) {
        global $conn;
        $user = [];

        $query = "INSERT INTO `users` (`name`, `email`, `password`, `created_at`) VALUES ('".$conn->real_escape_string($name)."', '".$conn->real_escape_string($email)."', '".$conn->real_escape_string($password)."', '".date('Y-m-d H:i:s')."')";

        if ($conn->query($query)) {
            $id = $conn->insert_id;
            $encrypted_password = md5(md5($id . $password));

            $query = "UPDATE `users` SET password = '".$encrypted_password."' WHERE `users`.`id` = ".$id." LIMIT 1";
            
            if($conn->query($query)) {
                $query = "SELECT * FROM `users` WHERE `users`.`id` = '".$id."' AND `users`.`password` = '".$conn->real_escape_string($encrypted_password)."'  LIMIT 1";
    
                if($result = $conn->query($query)) {
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                    $user = [
                        'id' => $row['id'],
                        'name' => $row['name'],
                        'email' => $row['email']
                    ];
                }
            }
        }
        return $user;
    } 
?>
<?php
//Check the Database
        
        $servername = "studmysql01.fhict.local";
        $username = "dbi416705";
        $password = "Test123";
        

        try {
        $conn = new PDO("mysql:host=$servername;dbname=dbi416705", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        }   
        catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }




        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        
            $sql='SELECT Email, Password FROM users WHERE Email=:Email AND Password=:Password';
            $stmt = $conn->prepare($sql);
            $stmt->execute([':Email' => $Email, ':Password' => $Password]);
            $result =$stmt->fetchAll();

            if(empty($result))
            {
                echo "Wrong username/password";              
            
            }
            else
            {
                session_start();
                 $_SESSION['loggedin'] = true;
                 $_SESSION['email'] = $Email;
                                    
                   header('Location: profile.php');

            }
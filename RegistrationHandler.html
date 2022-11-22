<?php
//Check The Database
        
        $servername = "studmysql01.fhict.local";
        $username ="dbi416705";
        $password ="Test123";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=dbi416705", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        }
        catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }        
    
        

	
	    $Email =$_POST['Email'];
        $EmailCheck =$_POST['EmailCheck'];
        $Password =$_POST['Password'];

        if($Email === $EmailCheck)
        {
            try
        {
            $sql="INSERT INTO users(Email, Password) VALUES (:Email, :Password)";
            
            $stmt= $conn->prepare($sql);
            
            $stmt->execute([':Email' => $Email, ':Password' => $Password]);
            
            
            
            header('Location: login.php?registered=true');
            
            
        }
        catch(PDOException $e)
        {
            echo "Failed.";
            
        }
        }
        else
        {
            echo "Email adresses do not match.";          
        }   

?>
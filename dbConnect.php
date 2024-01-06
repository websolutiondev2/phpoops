<?php  

    class dbConnect {  
        function __construct() {  
            require_once('config.php');
            $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
            if (!$conn) {
                die("Cannot connect to the database: " . mysqli_connect_error());
            }
            echo "working";
            return $conn;
            
        }  
        public function Close(){  
            mysql_close();  
        }  
    }  

?>  
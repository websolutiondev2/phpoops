<?php  
    // define("DB_HOST", 'localhost');  
    // define("DB_USER", 'root');  
    // define("DB_PASSWORD", '');  
    // define("DB_DATABASE", 'login_db');  
    class Connect {
	
        protected $db_name = 'login_db';
        protected $db_user = 'root';
        protected $db_pass = '';
        protected $db_host = 'localhost';
        
        // Open a connect to the database.
        // Make sure this is called on every page that needs to use the database.
        
        public function __construct() {
        
            $connect_db = new mysqli( $this->db_host, $this->db_user, $this->db_pass, $this->db_name );
            
            if ( mysqli_connect_errno() ) {
                printf("Connection failed: %s\
    ", mysqli_connect_error());
                exit();
            }
            return true;
            // $this->sd = "Working";
        }
    
    }

    // $s = new Connect();

    // echo $s->sd;
?>  
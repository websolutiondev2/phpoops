<?php

class User {
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($firstName, $lastName, $email) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function displayUserData() {
        echo "Submitted Data:<br>";
        echo "First Name: " . $this->firstName . "<br>";
        echo "Last Name: " . $this->lastName . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $firstName = $_POST['first_name'] ?? '';
    $lastName = $_POST['last_name'] ?? '';
    $email = $_POST['email'] ?? '';

    // Create a new User object
    $user = new User($firstName, $lastName, $email);

    // Display submitted data
    $user->displayUserData();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>

    <form method="post" action="">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>

<!-- <!DOCTYPE html>  
 <html lang="en" class="no-js">  
 <head>  
        <meta charset="UTF-8" />  
        <title>Login and Registration Form with HTML5 and CSS3</title>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />  
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />  
        <meta name="author" content="Codrops" />  
        <link rel="shortcut icon" href="../favicon.ico">   
        <link rel="stylesheet" type="text/css" href="css/demo.css" />  
        <link rel="stylesheet" type="text/css" href="css/style2.css" />  
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />  
    </head>  
    <body>  
        <div class="container">  
            <header>  
                <h1>Login and Registration Form  </h1>  
            </header>  
            <section>               
                <div id="container_demo" >  
                     
                    <a class="hiddenanchor" id="toregister"></a>  
                    <a class="hiddenanchor" id="tologin"></a>  
                    <div id="wrapper">  
                        <div id="login" class="animate form">  
                           <form name="login" method="post" action="register.php">  
                                <h1>Log in</h1>   
                                <p>   
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>  
                                    <input id="emailsignup" name="emailid" required="required" type="email" placeholder="mysupermail@mail.com"/>   
                                </p>  
                                <p>   
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>  
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />   
                                </p>  
                                <p class="keeplogin">   
                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />   
                                    <label for="loginkeeping">Keep me logged in</label>  
                                </p>  
                                <p class="login button">   
                                    <input type="submit" name="login" value="Login" />   
                                </p>  
                                <p class="change_link">  
                                    Not a member yet ?  
                                    <a href="#toregister" class="to_register">Join us</a>  
                                </p>  
                            </form>  
                        </div>  
  
                        <div id="register" class="animate form">  
                            <form name="login" method="post" action="register.php">  
                                <h1> Sign up </h1>   
                                <p>   
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>  
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />  
                                </p>  
                                <p>   
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>  
                                    <input id="emailsignup" name="emailid" required="required" type="email" placeholder="mysupermail@mail.com"/>   
                                </p>  
                                <p>   
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>  
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>  
                                </p>  
                                <p>   
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>  
                                    <input id="passwordsignup_confirm" name="confirm_password" required="required" type="password" placeholder="eg. X8df!90EO"/>  
                                </p>  
                                <p class="signin button">   
                                    <input type="submit" name="register" value="Sign up"/>   
                                </p>  
                                <p class="change_link">    
                                    Already a member ?  
                                    <a href="#tologin" class="to_register"> Go and log in </a>  
                                </p>  
                            </form>  
                        </div>  
                          
                    </div>  
                </div>    
            </section>  
        </div>  
    </body>  
</html>   -->
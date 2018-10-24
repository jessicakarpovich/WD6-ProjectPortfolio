<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */


class Auth extends AppController {
    
    public function __construct($parent) {
        $this->parent = $parent;
    }
    
    public function login() {
        // check session info exists
        if ($_REQUEST["username"] && $_REQUEST["password"]) {
        
            $data = $this->parent->getModel("users")->select("select * from users where email = :email and password = :password", array(":email"=>$_REQUEST["username"], ":password"=>sha1($_REQUEST["password"])));
            
            
            if ($data) {
                $_SESSION["loggedin"] = 1;
                header("Location:/welcome");
            } else {
                header("Location:/welcome?msg=Bad Login");
            }
            
            /*
            // read in the text file from the assets folder
            $lines = file("assets/login.txt");
            
            // check that it exists, if so run a loop
            if ($lines) {
                $count = count($lines) -1;
                
                // read in each line and compare contents to user inputted login info
                foreach ($lines as $line_num => $line) {
                    
                    // split line at '|'
                    $stringArray = explode("|", $line);

                    if ($_REQUEST["username"]==$stringArray[0] && $_REQUEST["password"]==$stringArray[1]) {

                        $_SESSION["loggedin"] = 1;
                        // to know what user is logged in
                        $_SESSION["line"] = $line;
                        header("Location:/welcome");
                        break;
                    }
                }
                if (!is_integer($_SESSION["loggedin"])) {
                    header("Location:/welcome?msg=Bad Login");
                }
            }
            
        
            // if yes, check that it matches
            if ($_REQUEST["username"]=="mike@aol.com" && $_REQUEST["password"]=="password") {
                $_SESSION["loggedin"] = 1;
                header("Location:/welcome");
        
            else {

                header("Location:/welcome?msg=Bad Login");
            }
           */ 
        } else {
            header("Location:/welcome?msg=Bad Login");
        }
    }
    
    public function logout() {
        session_destroy();
        header("Location:/welcome");
    }
    
}

?>
<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */


class Welcome extends AppController {
    
    public function __construct() {
        
        //db connection
        // global information
    }
    
    
    // index method is default method, not index.php
    // executed if no other default method
    public function index() {
        // get the views
        $this->getView("header", array("pagename"=>"welcome"));
        $this->getView("welcome");
        $this->getView("footer");
    }
    
    
    public function contact() {
        //$this->getView("header");
        $validation = array("name"=>true, 
                            "email"=>true, 
                            "password"=>true, 
                            "year"=>true, 
                            "comments"=>true, 
                            "gender"=>true, 
                            "check"=>true);
        
        $this->getView("header", array("pagename"=>"contact"));
        
        // add the $random variable to array being passed to contact view
        $random = substr(md5(rand()), 0, 7);
        $validation["cap"] = $random;
        
        $this->getView("contact", $validation);
        $this->getView("footer");
    }
    
    public function contactRecv() {
        $this->getView("header", array("pagename"=>"contact"));
        
        
        // array for validation, initally set to true
        /*
        $validation = array("name"=>true, 
                            "email"=>true, 
                            "password"=>true, 
                            "year"=>true, 
                            "comments"=>true, 
                            "gender"=>true, 
                            "check"=>true);
        $isValid = true;
        
        // check name consists of alpha characters
        if (!preg_match("/^[a-zA-Z]+$/", $_POST["name"])) {
            $validation["name"] = false;
            $isValid = false;
        }
        */
        if ($_POST["captcha"]==$_SESSION["user"]) {
            // if email doesn't match
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                //$validation["email"] = false;
                //$isValid = false;
                
                echo "Email invalid";
                echo "<br><a href='/welcome/contact'>Click here to go back</a>";
            } else {
                echo "Email valid";
            }
        } else {
            echo "Invalid captcha";
            echo "<br><a href='/welcome/contact'>Click here to go back</a>";
        }
        /*
        // check password by using regex
        if (!preg_match("/^[a-zA-Z]*$/", $_POST["password"])) {
            $validation["password"] = false;
            $isValid = false;
        }

        // check that a year is selected
        if (!isset($_POST["year"])) {
            $validation["year"] = false;
            $isValid = false;
        }

        // check that the comments aren't all whitespace or blank
        if (!strlen(trim($_POST["comments"]))) {
            $validation["comments"] = false;
            $isValid = false;
        }

        // check that at least one radio btn selected
        if (!isset($_POST["gender"])) {
            $validation["gender"] = false;
            $isValid = false;
        }

        // check that the user checked the box, agreeing to send their info
        if (!isset($_POST["check"])) {
            $validation["check"] = false;
            $isValid = false;
        }

        // if all is valid, show modal
        if ($isValid) {
            echo "<div class='modal fade' id='successModal' tabindex='-1' role='dialog' aria-labelledby='modalLabel' aria-hidden='true'>
              <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='modalLabel'>Success!</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>
                  <div class='modal-body'>
                    Your form has been submitted.</div>
                  <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button></div>
                </div>
              </div>
            </div>";
        }
        */
            
        // show form, pass it validation, this is to display errors/success
        //$this->getView("contact", $validation);
        //$this->getView("footer");
    }
    
    
    // for login view with ajax
    public function login() {
        // get the views
        $this->getView("header", array("pagename"=>"login"));
        $this->getView("login");
        $this->getView("footer");
    }
    
    public function ajaxPars() {
        //var_dump($_REQUEST);
        
        // check that the username and password are correct
        if (@$_REQUEST["email"]=="hello@gmail.com" && @$_REQUEST["password"]=="world") {
            echo "welcome";
        // if not, bad login
        } else { 
            echo "bad login";
        }
    }
}

?>
<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */


class Profile extends AppController {
    
    public function __construct() {
        
        // if user is authorized, session exists 
        if (@$_SESSION["loggedin"]&& @$_SESSION["loggedin"]==1) {
            
            
        // if not, redirect them
        } else {
            header("Location:/welcome");
        }
    }
    
    public function index() {
        $this->getView("header", array("pagename"=>"profile"));
        $this->getView("profile", array("pagename"=>"profile"));
    }
    
    public function update() {
        
        // check that it's not blank
        if ($_FILES["img"]["name"] !== "") {
            
            
            $imageFileType = pathinfo("assets/images/".$_FILES["img"]["name"], PATHINFO_EXTENSION);
            
            // if file exists in assets folder, tell user
            if (file_exists("assets/images/".$_FILES["img"]["name"])) {
                
                echo "Sorry, file exists";
                
            // otherwise, check that it's an image
            } else {
                
                // if it isn't, stop
                if ($imageFileType != "jpg" && $imageFileType != "png") {
                    
                    echo "Sorry this file type is not allowed";
                    
                } else {
                    
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], "assets/images/".$_FILES["img"]["name"])) {
                        
                        echo "file uploaded";
                        
                    } else {
                        
                        echo "Error uploading";
                    }
                }
            }
        }
        // To check for errors, comment out this line
        header("Location:/profile?msg=File Uploaded");
    }
    
    
}

?>
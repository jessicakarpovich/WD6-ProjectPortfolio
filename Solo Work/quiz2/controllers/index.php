<?
/* Jessica Karpovich */
/* WD6 */
/* C201811 */

class Index extends AppController {
    
    // constructor is used to get info for db actions
    public function __construct($parent) {
        $this->parent = $parent;
        
        // call to load student grades
        $this->showGrades();
    }
    
    // function to get student grades
    public function showGrades() {
        // select all students
        $gradeData = $this->parent->getModel("student")->select("select * from student_table");
        
        // show home page and pass grade data to it for display
        $this->getView("home", [ "grades" => $gradeData]);
    }
    
    // test later with view
    // function to add a student entry
    public function addStudent() {
        // select all students
        $gradeData = $this->parent->getModel("student")->select("select * from student_table");
        
        // start with validation
        $validation = array("name" => true,
                            "percentage" => true);
        $isValid = true;
        
        // check that name is not blank
        if (!isset($_POST["name"]) || strlen($_POST["name"]) === 0) {
            $validation["name"] = false;
            $isValid = false;
        }
        
        // check that percentage is a number
        // although HTML should catch errors, we need server-side validation too
        if (!is_numeric($_POST["percentage"])) {
            $validation["percentage"] = false;
            $isValid = false;
        }
        
        // create error messages based on validation results
        $errors = null;
        if ($validation["name"] === false) {
            $errors = "Oops, you forgot to enter the student's name.";
        }
        if ($validation["percentage"] === false) {
            $errors = "Hi Teacher, please try entering a % this time.";
        }
        if ($errors) {
            echo $errors;
        }
        
        // show home page
        $this->getView("home");
    }
}

?>
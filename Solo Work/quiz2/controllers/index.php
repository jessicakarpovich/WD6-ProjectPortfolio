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
        
        // if errors, show them
        if ($errors) {
            echo $errors;
            
            // show home page
            $this->getView("home");
        } 
        // otherwise, add entry to db
        else {
            // first calc letter grade
            $percent = $_POST["percentage"];
            $lettergrade = 0;
            
            if ($percent > 89) {
                $lettergrade = "A";
            }
            else if ($percent > 79) {
                $lettergrade = "B";
            }
            else if ($percent > 69) {
                $lettergrade = "C";
            }
            else if ($percent > 59) {
                $lettergrade = "D";
            }
            else {
                $lettergrade = "F";
            }
            $this->parent->getModel("student")->add("insert into student_table (studentname, studentpercent, studentlettergrade) values (:studentname, :studentpercent, :studentlettergrade)", array("studentname"=>$_POST["name"], "studentpercent"=>$_POST["percentage"], "studentlettergrade"=>$lettergrade));
            
            header("Location:/index");
        }
    }
    
    // function to delete selected user by id
    public function delete() {
        $id = $this->parent->urlPathParts[2];
        $this->parent->getModel("student")->delete("delete from student_table where studentid = :id", array(":id"=>$id));
        
        header("Location:/index");
    }
}

?>
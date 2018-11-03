<?
/* Jessica Karpovich */
/* WD6 */
/* C201811 */

class Index extends AppController {
    
    // constructor is used to get info for db actions
    public function __construct($parent) {
        $this->parent = $parent;
        
        // later add function call to load student grades
    }
    
    // function to get student grades
    public function showGrades() {
        // select all students
        $gradeData = $this->parent->getModel("student")->select("select * from student_table");
        
        // for now, just echo the data
        echo $gradeData;
    }
}

?>
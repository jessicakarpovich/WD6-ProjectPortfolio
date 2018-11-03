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
        
        // for now, just dump the data
        var_dump($gradeData);
    }
}

?>
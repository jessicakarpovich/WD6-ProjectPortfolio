<?
// Jessica Karpovich
// SSL
// 06/26/18



// 1. Class
class myClass {
    public function __construct() {
        echo "Class created! <br>";
    }
    
    // 2. Function to set name and age
    public function setPerson() {
        // Set name and age
        $name = "Jessica";
        $age = 20;
        
        // create person array
        $person = [$name, $age, "name"=>$name, "age"=>$age];
        
        // echo name and age - use concatenation on single quotes
        echo "My name is $name and age is $age. <br>";
        echo 'My name is '. $name . ' and age is '. $age . '.<br>';
        echo "My name is $person[0] and age is $person[1]. <br>";
        echo "My name is {$person["name"]} and age is {$person["age"]}. <br>";
        
        // set $age to null - will not print to screen
        $age = null;
        echo $age;
        
        // unset $name - will return undefined
        unset($name);
        echo $name;
    }
    
    // 3. Function to get letter grade
    public function assignLetterGrade($points=0) {
        $grade = "";
        
        // if between 90 and 100, A
        if ($points >= 90 && $points <= 100) {
            $grade = "A";
        } 
        // if between 89 and 80, B
        else if ($points >= 80 && $points < 90) {
            $grade = "B";
        }
        // if between 79 and 70, C
        else if ($points >= 70 && $points < 80) {
            $grade = "C";
        }
        // if between 69 and 60, D
        else if ($points >= 60 && $points < 70) {
            $grade = "D";
        }
        // if below 60, F
        else if ($points < 60) {
            $grade = "F";
        }
        // if doesn't match any condition, outside of grading scale
        else {
            $grade = "Outside of grading scale";
        }
        return $grade;
    }
    
    // 4. Colors array
    public function getColorArray() {
        $colorarray = ["Blue", "Navy Blue", "Green", "Mint", "Yellow", "Gold", "Red", "Scarlet", "Purple", "Violet"];
        
        for ($i=0; $i < count($colorarray); $i++) {
            echo "<br>Color $i is $colorarray[$i]";
        }
    }
}

// instantiate class
$newclass = new myClass();
// run setPerson method
$newclass->setPerson();

// run grade method with test values
echo "Grade: {$newclass->assignLetterGrade(94)} <br>";
echo "Grade: {$newclass->assignLetterGrade(54)} <br>";
echo "Grade: {$newclass->assignLetterGrade(89.9)} <br>";
echo "Grade: {$newclass->assignLetterGrade(60.01)} <br>";
echo "Grade: {$newclass->assignLetterGrade(102.1)} <br>";

// get color array values printed
$newclass->getColorArray();
?>
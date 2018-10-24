<?
// Jessica Karpovich
// SSL
// 06/26/18


$myarray = ["num"=>1, "age"=>"27", "another"=>["1", 2]];
$name = "Jessica";

foreach($myarray as $item) {
    var_dump($item);
    echo "---------<br>";
}

for ($i=0; $i<10; $i++) {
   // echo "Hello <br>";
}

/*
    multiline comments
*/


// Classes
// use include to use outside classes, relative path
// include "/bin/myclass.php";

// then instantiate it 
// $mynewclass = new myclass();

// use a method using
// $mynewclass->method();

class myclass {
    // constructor
    public function __construct($number=0) {
        echo "my constructor ".$number;
    }
    
    public function myMethod($name="") {
       // echo "hello ".$name ;
        //var_dump($_REQUEST);
        echo "name: ".$_REQUEST["name"];
    }
    
    static function staticEx() {
        echo "I'm static";
    }
}

myclass::staticEx();
$mynewclass = new myclass(12345);
$mynewclass->myMethod("Joe");


?>
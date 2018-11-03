<?
/* Jessica Karpovich */
/* WD6 */
/* C201811 */

class student {
    // constructor for db conn info
    public function __construct($parent) {
        $this->sql = $parent->sql;
    }
    
    // select student data from db and return it
    public function select($sql, $value=array()) {
        
        $this->sql = $this->sql->prepare($sql);
        $result = $this->sql->execute($value);
        $students = $this->sql->fetchAll();
        return $students;
    }
    
    // function to add student data
    // at this point, all data should already be validated and good to go
    public function add($sql, $value=array()) {
//        echo $sql;
//        var_dump($value);
        $this->sql = $this->sql->prepare($sql);
        
        var_dump($this->sql);
        
        if (!$this->sql) {
            echo "\nPDO::errorInfo():\n";
            print_r($this->sql->errorInfo());
        }
        
        $result = $this->sql->execute($value); 
    }
    
    // function to delete a student
    public function delete($sql, $value=array()) {
        
        $this->sql = $this->sql-prepare($sql);
        $result = $this->sql->execute($value);
    }
    
    // function to update a student's data
    public function update($sql, $value=array()) {
        
        $this->sql = $this->sql-prepare($sql);
        $result = $this->sql->execute($value);
    }
}

?>
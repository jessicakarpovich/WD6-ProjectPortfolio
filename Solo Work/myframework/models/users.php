<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */


class users {
    public function __construct($parent) {
        
        $this->sql = $parent->sql;
    }
    
    
    public function select($sql, $value=array()) {
        
        $this->sql = $this->sql->prepare($sql);
        $result = $this->sql->execute($value);
        $data = $this->sql->fetchAll();
        return $data;
    }
    
    public function add($sql, $value=array()) {
        
        $this->sql = $this->sql->prepare($sql);
        $result = $this->sql->execute($value);
    }
    
    public function delete() {
        
        $this->sql = $this->sql->prepare($sql);
        $result = $this->sql->execute($value);
    }
    
    public function update() {
        
        $this->sql = $this->sql->prepare($sql);
        $result = $this->sql->execute($value);
    }
}

?>
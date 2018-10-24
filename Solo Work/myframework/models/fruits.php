<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */


class fruits {
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
    
    public function delete($sql, $value=array()) {
        
        $this->sql = $this->sql->prepare($sql);
        $result = $this->sql->execute($value);
    }
    
    public function update($sql, $value=array()) {
        
        $this->sql = $this->sql->prepare($sql);
        $result = $this->sql->execute($value);
    }
}

?>
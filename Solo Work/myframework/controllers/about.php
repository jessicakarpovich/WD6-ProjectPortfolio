<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */

class about extends AppController {
    
    public function __construct($parent) {
        
        $this->parent = $parent;
        $this->showList();
    }
    
    
    public function showList() {
        
        $data = $this->parent->getModel("fruits")->select("select * from fruit_table");
        $this->getView("header", array("pagename"=>"about"));
        $this->getView("about", $data);
        $this->getView("footer");
    }
    
    
    public function addForm() {
        
        $this->getView("header", array("pagename"=>"about"));
        $this->getView("addForm");
        $this->getView("footer");
    }
    
    
    public function addAction() {
        
        $this->parent->getModel("fruits")->add("insert into fruit_table (name) values(:name)", array(":name"=>$_REQUEST["name"]));
        
        header("Location:/about");
    }
    
    
    public function edit() {
        // get id through url
        $id = $this->parent->urlPathParts[2];
        // pass name and id to view
        $data = $this->parent->getModel("fruits")->select("select * from fruit_table where id = :id", array(":id"=>$id));
        $this->getView("header", array("pagename"=>"about"));
        $this->getView("editForm", $data);
        $this->getView("footer");
    }
    
    
    public function editAction() {
        // use id and name from view
        $this->parent->getModel("fruits")->update("update fruit_table set name = :name where id = :id", array(":name"=>$_REQUEST["name"], ":id"=>$_REQUEST["id"]));

        header("Location:/about");
    }
    
    
    public function delete() {
        $id = $this->parent->urlPathParts[2];
        $this->parent->getModel("fruits")->delete("delete from fruit_table where id = :id", array(":id"=>$id));
        
        header("Location:/about");
    }
}

?>
<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */

require_once 'google-api-php-client/src/Google/autoload.php';
class API extends AppController {
    
    public function __construct($parent) {
        
        $this->parent = $parent;
        $this->showAPI();
    }
    
    public function index() {
        // get the views
        $this->getView("header", array("pagename"=>"api"));
        
        $this->getView("api");
        
        $this->getView("footer");
    }
    
    
    public function showAPI() {
        
        $this->getView("header", array("pagename"=>"api"));
        // blog id provided in api docs
        $data = $this->parent->getModel("apiModel")->getBlog(2399953);
        $this->getView("api", $data);
        $this->getView("footer");
    }
    
    
    
    
}

?>
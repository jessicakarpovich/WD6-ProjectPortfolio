<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */


class Home extends AppController {
    
    public function __construct() {
        
    }
    
    public function index() {
        // get the views
        $this->getView("header", array("pagename"=>"home"));
        
        $this->getView("home");
        
        $this->getView("footer");
    }
    
}

?>
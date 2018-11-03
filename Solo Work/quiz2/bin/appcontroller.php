<?
/* Jessica Karpovich */
/* WD6 */
/* C201811 */

session_start();
class AppController {

    public function __construct($urlPathParts, $config) {

        // connect to db based on config settings
        $this->sql = new PDO("mysql:dbname=".$config["dbname"].";",$config["dbuser"],$config["dbpass"]);

        $this->urlPathParts = $urlPathParts;


        if ($urlPathParts[0]) {

          include './controllers/' . $urlPathParts[0] . ".php";

            $appcon = new $urlPathParts[0]($this);

            if (isset($urlPathParts[1])) {

               $appcon->{$urlPathParts[1]}();

            } else {

           		$methodVariable = array($appcon, 'index');

              if(is_callable($methodVariable, false, $callable_name)){

            	       $appcon->index($this);
            	}
            }

        } else {

            // check later if this is actually needed in this scope
            include './controllers/' . $config['defaultController'] . ".php";
            
            $appcon = new $config['defaultController']($this);
            
            if (isset($urlPathParts[1])) {
                $appcon->config['defaultController'][1]();
            } else {

           		$methodVariable = array($appcon, 'index');
                
				if (is_callable($methodVariable, false, $callable_name)) {
            	$appcon->index($this);

            	}
            }
        }
    }

    // function to display view based on page given
    public function getView($page, $data=array()) {

        require_once './views/'.$page.".php";

    }


    // function to pull in model
    public function getModel($page, $data=array()) {

        require_once './models/'.$page.".php";
        $model = new $page($this);
        return $model;

    }

}



?>

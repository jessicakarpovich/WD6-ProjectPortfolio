<?
/* Jessica Karpovich */
/* WD6 */
/* C201811 */

include 'appcontroller.php';


class App{

    public function __construct($config) {
        $this->config = $config;
    }

    // point to the app controller on start
    public function startApp($params) {
        $AppController = new AppController($params, $this->config);
    }
}



?>
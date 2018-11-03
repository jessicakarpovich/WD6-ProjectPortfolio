<?
/* Jessica Karpovich */
/* WD6 */
/* C201811 */

include 'bin/app.php';

class Router {

    public function __construct($urlPathParts, $config) {

        $this->App = new App($config);

        switch($urlPathParts[0]) {
            // recognize index as valid path
            case "index":

                $this->App->startApp($urlPathParts);

                break;
        }
    }
}
?>
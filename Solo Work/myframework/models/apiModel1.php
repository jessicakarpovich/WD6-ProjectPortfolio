<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */

require_once 'google-api-php-client/src/Google/autoload.php';
class apiModel {
    
    public function __construct($parent) {
        
        $this->sql = $parent->sql;
    }
    
    
    public function googleBooks($term='') {
        
        $client = new Google_Client();
        // should match google application name in console.developers.google.com
        $client->setApplicationName("sslapi");
        
        
        $client->setDeveloperKey("AIzaSyBHi9BPN58dBnCZn3PW-H6jp43irr0nvUM");
        
        $service = new Google_Service_Books($client);
        
        $optParams = array("filter"=>"free-ebooks");
        $result = $service->volumes->listVolumes($term, $optParams);
        
        return $result;
    }
}


?>
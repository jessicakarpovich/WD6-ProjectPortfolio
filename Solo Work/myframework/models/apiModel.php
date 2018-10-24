<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */

require_once 'google-api-php-client/src/Google/autoload.php';
class apiModel {
    
    public function __construct($parent) {
        
        $this->sql = $parent->sql;
    }
    
    
    // view blog from blogger based on id
    public function getBlog($id=0) {
        
        $client = new Google_Client();
        // should match google application name in console.developers.google.com
        $client->setApplicationName("sslapi");
        $client->setDeveloperKey("AIzaSyAjXEWQQ2SM-yVKrRcakRRNaUv9U5s3zTQ");
        
        // service should be Google_Service_Blogger, same naming format as for books above
        $service = new Google_Service_Blogger($client);
        
        // use the get function to get blogs by id
        $result = $service->blogs->get($id);
        return $result;
    }
}


?>
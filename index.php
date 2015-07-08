<?php

require_once('includes/global.inc.php');
$start = microtime(true);

if (!empty($_GET) && isset($_GET['module'])) {
   $post = array();
   if (isset($HTTP_RAW_POST_DATA)) {
      $post = json_decode($HTTP_RAW_POST_DATA, true);
   } elseif ($_POST) {
      $post = $_POST;
   }

   $module = strtolower($_GET['module']);
   $method = $_GET['method'];

   if(!empty($post)) {
      if(in_array($module,array_keys($config['modules']))) {
         if(in_array($method, $config['modules'][$module])) {
            $module = ucfirst($module);
            require_once(WMS_API_PATH . '/module/'.$module.'.php');
            $objModule = new $module();
            $response = $objModule->$method($post);
         } else {
            $response = array('error'=> true, 'message' => 'Invalid Method');
         }
      } else {
         $response = array('error'=> true, 'message' => 'Invalid module');
      }
   } else $response = array('error'=> true, 'message' => 'Invalid JSON format');
} else {
   $response = array('error'=> true, 'message' => 'Welcome !! please enter correct url for valid response');
}

echo $responseTxt = json_encode($response);

$endTime = microtime(true);
if(LOG_API_REQUESTS) {
   $logTxt = "\n\nRequest Url : {$_SERVER['REQUEST_URI']}\n";
   $logTxt .= "Request DateTime : ".date('Y-m-d H:i:s')."\n";
   $logTxt .= "Response Time in Sec : ".($endTime-$start)."\n";
   $logTxt .= 'Request Data : '.$HTTP_RAW_POST_DATA."\n";
   $logTxt .= 'Reponse Data : '.$responseTxt."\n\n";
   Utils::log($logTxt, 'api.log');
}

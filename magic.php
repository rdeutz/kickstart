<?php defined('_JEXEC') or die;

// variables
$app 		= JFactory::getApplication();
$doc 		= JFactory::getDocument();
$params 	= $app->getParams();
$headdata 	= $doc->getHeadData();
$menu 		= $app->getMenu();
$active 	= $app->getMenu()->getActive();
$pageclass 	= $params->get('pageclass_sfx');
$tpath 		= $this->baseurl.'/templates/'.$this->template;

$isFrontpage  = false;
$active_alias = '';

if ($active)
{
	$defaultmenuitems = array($menu->getDefault()->id, $menu->getDefault(JFactory::getLanguage()->getTag())->id);
	$isFrontpage = in_array($active->id, $defaultmenuitems);
	$active_alias = $active->alias;
}


// parameter
$codekit 	= $this->params->get('codekit');
$pie 		= $this->params->get('pie');
$googlefont = $this->params->get('googlefont');

$pagetype 	= $this->params->get('pagetype', 'multipage');
$showonfrontpage = $this->params->get('showonfrontpage', 1);

// advanced parameter
if ($app->isSite()) {
  // disable js
  if ( $this->params->get('disablejs') ) {
    $fnjs=$this->params->get('fnjs');
    if (trim($fnjs) != '') {
      $filesjs=explode(',', $fnjs);
      $head = (array) $headdata['scripts'];
      $newhead = array();         
      foreach($head as $key => $elm) {
        $add = true;
        foreach ($filesjs as $dis) {
          if (strpos($key,$dis) !== false) {
            $add=false;
            break;
          } 
        }
        if ($add) $newhead[$key] = $elm;
      }
      $headdata['scripts'] = $newhead;
    } 
  } 
  // disable css
  if ( $this->params->get('disablecss') ) {
    $fncss=$this->params->get('fncss');
    if (trim($fncss) != '') {
      $filescss=explode(',', $fncss);
      $head = (array) $headdata['styleSheets'];
      $newhead = array();         
      foreach($head as $key => $elm) {
        $add = true;
        foreach ($filescss as $dis) {
          if (strpos($key,$dis) !== false) {
            $add=false;
            break;
          } 
        }
        if ($add) $newhead[$key] = $elm;
      }
      $headdata['styleSheets'] = $newhead;
    } 
  }
  $doc->setHeadData($headdata); 
}

// generator tag
$this->setGenerator(null);

// force latest IE & chrome frame
$doc->setMetadata('x-ua-compatible', 'IE=edge,chrome=1');

$tmpScripts = array();

if(!$codekit)
{
	// add javascripts
	$doc->addScript($tpath.'/js/modernizr-2.8.1.js');
	$doc->addScript($tpath.'/js/jquery-1.11.1.min.js');
	$doc->addScript($tpath.'/js/jquery-noconflict.js');
	$doc->addScript($tpath.'/js/jquery-migrate.min.js');
	$doc->addScript($tpath.'/js/bootstrap.min.js');
	$doc->addScript($tpath.'/js/script.js');
	// load jQuery first
	$jquerypath = $tpath.'/js/jquery-1.11.1.min.js';
	$tmpScripts = $doc->_scripts;
	unset( $tmpScripts[$this->baseurl.'/media/widgetkit/js/jquery.js'] );
	unset( $tmpScripts[$this->baseurl.'/media/jui/js/jquery.min.js'] );
	unset( $tmpScripts[$this->baseurl.'/media/jui/js/jquery-migrate.min.js'] );
	unset( $tmpScripts[$this->baseurl.'/media/jui/js/jquery-noconflict.js'] );
}
else
{
	$jquerypath = $tpath.'/js/kickstart.js';
	unset($doc->_scripts);
	$doc->addScript($jquerypath);
}

/*
$neuScript = array();
$neuScript[$jquerypath] = $jquerypath;
foreach($tmpScripts as $key=> $value){
	if($key != $jquerypath)
		$neuScript[$key] = $value;
}
$doc->_scripts = $neuScript;
*/

if(!$codekit)
{
	$doc->addStyleSheet($tpath.'/css/bootstrap.min.css');
	$doc->addStyleSheet($tpath.'/css/font-awesome.min.css');
	if ($googlefont !='') $doc->addStyleSheet("https://fonts.googleapis.com/css?family=".$googlefont);
	// add template sheet
	$doc->addStyleSheet($tpath.'/css/template.css');
}
else {
	if ($googlefont !='') $doc->addStyleSheet("https://fonts.googleapis.com/css?family=".$googlefont);
	$doc->addStyleSheet($tpath.'/css/kickstart.css');
}
?>
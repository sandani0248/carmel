<?php
$page_list = array(
	'index',
	'contact-us',
	'location',
	'about-us',
	'floor-plans',
	'amenities',
	'thankyou',
	'brochure',
);

foreach($page_list as $page) {
	ob_start();
	include_once($page . '.php');
	$HtmlCode = str_replace(array("\r","\n","\t","  "),'',trim(ob_get_clean()));
	$fh = fopen($page .'.html','w'); fwrite($fh,$HtmlCode);
	ob_flush();
}

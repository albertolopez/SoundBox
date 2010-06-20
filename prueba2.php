<?php 
require_once('libs/url_to_absolute/url_to_absolute.php');


$doc=new DOMDocument();
//$doc->loadHTML("<html><body>Test<br><img src=\"myimage.jpg\" title=\"title\" alt=\"alt\"></body></html>");
$doc->loadHTMLFile("http://lafonoteca.net/grupos/indomitos");
$xml=simplexml_import_dom($doc); // just to make xpath more simple
$images=$xml->xpath('//img');
foreach ($images as $img) {
	$size = getimagesize(url_to_absolute("http://lafonoteca.net/grupos/indomitos",$img['src']));
	if($size['0'] > 50 && $size['1'] > 50)
    echo $img['src'];
}
?>

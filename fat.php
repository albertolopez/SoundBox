<?php

$foods = array(
'meat' => array('burgers', 'steak', 'sausages', 'kebabs'),
'cake' => array('victorian', 'chocolate', 'fruit', 'fudge')
);

function hungrymen($foods){
	$meat = $foods['meat'];
	unset($meat[array_search('kebabs',$meat)]);
	arsort($meat);
	return $meat;
}

print_r(hungrymen($foods));

?>

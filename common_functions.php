<?php

function getAssignQueryString($qkey, $qvalue)
{
	$result = array();
	foreach($_GET as  $key => $value) {
		if ( strnatcasecmp($key, "lang") !== 0) {
			$result[$key] = $value;
		}
	} 
	$result[$qkey] = $qvalue;
	return '?' . http_build_query($result);
} 



?>
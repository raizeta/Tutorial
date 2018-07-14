<?php
function create_slug($string)
{  
    $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);  
    return $slug;  
} 
public function slugify($string)
{
	$slug = preg_replace('/[^a-z0-9]/', '-', strtolower(trim(strip_tags($string))));
	return $slug;
}
<?php

use SV\SLUG\Slug;

if(!function_exists('SvSlug')){
	function SvSlug($slug, $options = [])
	{
		$s = new Slug($options);
		return $s->generator($slug);
	}
}
?>
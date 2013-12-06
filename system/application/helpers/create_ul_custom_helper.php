<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('create_ul_custom'))
{
    function create_ul_custom($list, $css_class='list-data') {
		$ul = "<ul class=\"" . $css_class . "\">";
		$lis = explode("**", $list);
		array_shift($lis);
		foreach ( $lis as $li ) {
			$pieces = explode(":", $li);
			$ul .= "<li><strong>". trim($pieces[0]) . ": </strong>";
			array_shift($pieces);
			$li = implode(":", $pieces);
			$ul .= trim($li) . "</li>";
		}
		
		return $ul."</ul>";
    }
}

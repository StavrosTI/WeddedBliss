<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*	Sorting helper function
 *
 *	@param array
 *	@param array
 *
 *	@return array
 */
function cmp($a, $b) {

		$a['hotel'] = preg_replace('@^(a|A|an|An|AN|the|The|THE) @', '', $a['hotel']);
		$b['hotel'] = preg_replace('@^(a|A|an|An|AN|the|The|THE) @', '', $b['hotel']);
	
		return strcasecmp($a['hotel'], $b['hotel']);
}
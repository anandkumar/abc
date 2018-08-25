<?php
/**
 * Template tags.
 *
 * This file holds template tags for the theme. Template tags are PHP functions
 * meant for use within theme templates.
 *
 * @package   Artika
 * @author    Anand Kumar <anand@anandkumar.net>
 * @copyright Copyright (c) 2018, Anand Kumar
 * @link      https://www.digitalliberation.org/themes/artika
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Artika;

/**
 * Returns the metadata separator.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $sep
 * @return string
 */
function sep( $sep = '' ) {

	return apply_filters(
		'artika/sep',
		sprintf(
			' <span class="sep">%s</span> ',
			$sep ?: esc_html_x( '&middot;', 'meta separator' )
		)
	);
}

<?php
/**
 * Template Name: Demo Index
 *
 * @package WordPress
 * @subpackage HSO
 * @since HSO 0.0.1
 */

?>

<h1>Charts Awaiting Conversion</h1>

<?php
	
	var_dump( $_POST );
	
	$charts = new HSO_Chart();
	
	if ( empty($_POST) ) {
		
		$charts->get_charts();
		
	} else {
		
		echo 'Converting charts…';
		
		$charts->generate_charts_pdf( $_POST['_chart_ids'] );
	}

	
?>
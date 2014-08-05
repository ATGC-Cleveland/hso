<?php
/**
 * Template Name: Formstack Data Demo
 *
 * @package WordPress
 * @subpackage HSO
 * @since HSO 0.0.1
 */

$res = new TW_Formstack();

$object = array(
	'primary_object' => 'form',
	'primary_object_id' => '1725093',
	'sub_object' => 'submission'
);

$params = array (
	'data' => '',
	'expand_data' => '',
);

$data = $res->request( $object , $params );

//var_dump( $data );

foreach( $data as $record ) {
	
	var_dump( $record );
}

?>
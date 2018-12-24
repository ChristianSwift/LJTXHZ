<?php
/**
 * @package Symetrio
 * @author Wonster
 * @link http://wonster.co/
 */

function wtr_encode_theme_settings( $return = null ){

	global $WTR_Opt;

	if( $WTR_Opt ) {
		$opt_a = $WTR_Opt->get( 'opt_a' );
	} else {
		$opt_a = get_option( WTR_Settings::get_WP_OPT_NAME() );
	}

	$opt_new = apply_filters( 'wtr_encode_theme_settings', $opt_a );

	if ( $return ) {
		return base64_encode( serialize( $opt_new ) );
	} else {
		echo base64_encode( serialize( $opt_new ) );
	}
}// end wtr_encode_theme_settings


function wtr_decode_theme_settings( $data = NULL ){
	if( !$data ){
		return false;
	}

	$opt_new = @unserialize( base64_decode ( $data ) );
	return $opt_new;
}// end wtr_decode_theme_settings


function wtr_save_export_theme_settings(){

	$opt_new	= wtr_encode_theme_settings( true );
	$opt		= get_option( WTR_Settings::get_WP_EXPORT_OPT_NAME() );
	$opt_export = array();

	if( $opt ){

		krsort($opt);
		$i = 0;

		foreach ($opt as $key => $value) {

			if( 4 == $i++ ){
				break;
			}
			$opt_export[ $key ] = $value;
		}
	}
	$opt_export[] = array(
				'date'  => current_time( 'timestamp' ),
				'value' => $opt_new
			);

	krsort($opt_export);
	update_option( WTR_Settings::get_WP_EXPORT_OPT_NAME(), $opt_export );
}// end wtr_save_export_theme_settings


function wtr_get_export_theme_settings( $index = NULL ){

	if( is_null( $index) ){
		return false ;
	}

	$opt_export = get_option( WTR_Settings::get_WP_EXPORT_OPT_NAME() );
	foreach ( $opt_export as $key => $value) {

		if( $key == $index ){
			return wtr_decode_theme_settings( $value[ 'value' ] );
		}
	}

	return false;
}// end wtr_get_export_theme_settings


function wtr_draw_export_theme_settings( $opt = null ){

	$opt_export = get_option( WTR_Settings::get_WP_EXPORT_OPT_NAME() );

	if( $opt_export ) {

		$i = 0;

		$txt = '';
		foreach ($opt_export as $key => $value) {

			if ($value['date']  instanceof DateTime) {
				$value['date'] = $value['date']->format('U');
			}

			$txt .='
			<li><input type="radio" class="wtrStrAdminRadio" value="' . $key . '" id="checkExp_' . $key . '" name="wtr_export_theme_settings"
			data-label="<b>' .  date( 'l', $value['date'] ) . ':</b>  / ' . date( 'd-m-Y', $value['date'] ) . ' <span>&#47;</span> ' . date( 'H:i:s', $value['date'] ) . '"';

			if( 0 == $i ){
				$txt .='checked data-customclass="margin-right"';
			}

			$txt .= ' /></li>';
			$i++;
		}

		if( $opt ) {
			return $txt;
		} else {
			echo $txt;
		}
	}
	else{

		$txt = '<li class="noBackupData">' . __( 'No admin data backups here!', 'wtr_framework' ) . '</li>';
		if( $opt ) {
			return $txt;
		} else {
			echo $txt;
		}
	}
}// end wtr_draw_export_theme_settings


// AJAX QUERY

	// import text
	if( isset( $_POST[ 'get_act_opt' ] ) && 1 == $_POST[ 'get_act_opt' ] ){

		// load WP
		$ext_patch	= __FILE__;
		$path_file	= explode( 'wp-content', $ext_patch );
		$path_to_wp	= $path_file[0];
		require_once( $path_to_wp . '/wp-load.php' );

		// send result
		$response = array();
		$response[ 'status' ] = 1;
		$response[ 'opt' ] = wtr_encode_theme_settings( true );

		header('Content-type: application/json');
		echo json_encode($response);
	}

	// import auto
	if( isset( $_POST[ 'get_auto_opt' ] ) && 1 == $_POST[ 'get_auto_opt' ] ){

		// load WP
		$ext_patch	= __FILE__;
		$path_file	= explode( 'wp-content', $ext_patch );
		$path_to_wp	= $path_file[0];
		require_once( $path_to_wp . '/wp-load.php' );

		// save checkpoint
		wtr_save_export_theme_settings();

		// send result
		$response = array();
		$response[ 'status' ] = 1;
		$response[ 'draw' ] = wtr_draw_export_theme_settings(true);

		header('Content-type: application/json');
		echo json_encode($response);
	}
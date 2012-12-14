<?
/** 
*
* Pull various user meta data from default profile and from Profile Builder Pro Plugin
*
**/
?>

 <?php
    	wp_get_current_user();
    	/**
     	* @example Safe usage: $current_user = wp_get_current_user();
     	* if ( !($current_user instanceof WP_User) )
     	*     return;
     	*/
     	echo '<div class="my-name">' . $current_user->user_firstname . '&nbsp;' . $current_user->user_lastname . '</div>';
    	echo '<div>' . 'Username: ' . $current_user->user_login . '</div>';
    	echo '<div>' . $current_user->get( 'user_email' ) . '</div>';
    	if ( $current_user->has_prop( 'address_1' ) ) 
		echo '<div>' . $current_user->get( 'address_1' ) . '</div>';
    	if ( $current_user->has_prop( 'address_2' ) ) 
		echo '<div>' . $current_user->get( 'address_2' ) . '</div>';
    	if ( $current_user->has_prop( 'city' ) ) 
		echo '<div>' . $current_user->get( 'city' ) . '</div>';
    	if ( $current_user->has_prop( 'state' ) ) 
		echo '<div>' . $current_user->get( 'state' ) . '</div>';
    	if ( $current_user->has_prop( 'phone' ) ) 
		echo '<div>' . $current_user->get( 'phone' ) . '</div>';
		if ( $current_user->has_prop( 'zip' ) ) 
		echo '<div>' . $current_user->get( 'zip' ) . '</div>';
    	if ( $current_user->has_prop( 'dob' ) ) 
		echo '<div>' . $current_user->get( 'dob' ) . '</div>';
		?> 
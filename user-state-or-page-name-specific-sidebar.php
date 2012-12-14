<aside id="sidebar">

    <?php 
    global $current_user;
    wp_get_current_user();
    if (is_user_logged_in() && function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Logged In Name')) echo '<div class="profile-name">' . $current_user->user_login . '</div>'; 
    else(function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Logged Out Name')); ?>
    
	<?php 
	global $current_user;
    wp_get_current_user();
	if (is_user_logged_in() && (is_page('pagename') || is_single()) && function_exists('dynamic_sidebar') && dynamic_sidebar('Another Sidebar Name For Specific Page'));?>

</aside>
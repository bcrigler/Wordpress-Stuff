<?php
///custom paginate script add to functions.php

function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1; 
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }  
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}
?>

<?php
///Custom Page Template Script to Pull Posts By Category and Paginate by showposts #  (Add to your Custom Page Template)
$wp_query = new WP_Query();
$wp_query->query('cat=6&showposts=2&paged='.$paged);
while ($wp_query->have_posts()) : $wp_query->the_post();
		the_title();
		echo('<br />');
		the_excerpt();
	endwhile;
	if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} 
?>

<!-- Default CSS Styles -->
<style type="text/css">
.pagination {
clear:both;
padding:20px 0;
position:relative;
font-size:11px;
line-height:13px;
}
 
.pagination span, .pagination a {
display:block;
float:left;
margin: 2px 2px 2px 0;
padding:6px 9px 5px 9px;
text-decoration:none;
width:auto;
color:#fff;
background: #555;
}
 
.pagination a:hover{
color:#fff;
background: #3279BB;
}
 
.pagination .current{
padding:6px 9px 5px 9px;
background: #3279BB;
color:#fff;
}
</style>
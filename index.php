<?php 
/** 
 *
 *	Index.php
 * 
 *	The Main Template File
 *
 * 
 */

?>

<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
<?php endwhile; ?>
<?php get_header(); ?>



<?php
    
    if(have_posts()){
        
        while(have_posts()){
            
            the_post();

            
?>
<div class="singlePost">

<h2<?php if(is_single() || is_page()){ echo ' style="font-size: 35px;"';} ?>><?php if(!is_single() && !is_page()){ 
?><a class="text-dark" href="<?php the_permalink(); ?>"><?php } 
?><?php the_title(); 
?><?php if(!is_single() && !is_page()){ ?></a><?php } 
?></h2>
<?php the_content(); ?>
<?php if(!is_single() && !is_page()){ ?><br><?php } ?>

</div><!-- End .singlePost -->
<?php
		

        }
        
    }

?>

<div class="center" id="pagination">
<?php
	
	posts_nav_link();

?>
</div><!-- End .pagination -->

<?php get_footer(); ?>
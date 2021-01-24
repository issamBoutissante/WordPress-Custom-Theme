<?php 
get_header();
while(have_posts()){
    the_post()
    ?>
    <center>
        <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
        <p><?php the_content()?></p>
    </center>
    <hr>
    <?php
}
get_footer();
?>

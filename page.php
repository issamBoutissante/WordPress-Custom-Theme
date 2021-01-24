<?php
get_header();
echo "<h1>This is the framework page</h1>";
while(have_posts()){
the_post();
echo the_title();
}
get_footer();
?>
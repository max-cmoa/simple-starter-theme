<?php
/*
    Template Name: home-page

    This is a Custom Page Type.
    DO NOT PREFIX THE FILENAME USING page-
    The above comment about template name is what is shown in
    /wp-admin > dashboard > Pages > Page Attributes >
    Template > select home-page from drop down.

*/

   get_template_part('../partial-templates/headers/main-header');

?>

  <h1>On the home-page.php page template</h1>

  <!-- display the page content, if any -->
  <?php if( have_posts() ) : ?>
    <?php while (have_posts() ) : ?>
      <?php the_post(); ?>
      <h1 class='standardParagraph'><?php the_content(); ?></h1>
    <?php endwhile; else : ?>
      <?php echo('No page content to display'); ?>
    <?php endif; ?>

<?php
      // display the comments
      comments_template('../comment-templates/home-comments.php'); 
 ?>

<?php
     get_template_part('../partial-templates/footers/main-footer');
?>

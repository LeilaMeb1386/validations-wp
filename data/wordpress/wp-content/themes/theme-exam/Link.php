<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <main role="main" class="flex-shrink-0">
    <div class="container-fluid">
      <div class="row page-header">
        <div class="col-12">
          <h1 class="mt-5">Afficher le titre de la page/post ici</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          Afficher le contenu ici.
        </div>
      </div>
    </div>
  </main>
    <?php the_content(); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

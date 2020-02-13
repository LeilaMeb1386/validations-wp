<!DOCTYPE html>

<html class="h-100"<?php language_attributes(); ?>>
 <head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <?php wp_head(); ?>
 </head>
 <body id="page" class="d-flex flex-column h-100" <?php body_class(); ?>>
   <header>
     <!-- Fixed navbar -->
coucou
     <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
       <a class="navbar-brand" href="#">Afficher le nom du site ici</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
               aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item">
             <a class="nav-link" href="#">Home <span
               class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Link</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#"
                tabindex="-1" aria-disabled="true">link</a>
           </li>
         </ul>
       </div>
     </nav>
   </header>

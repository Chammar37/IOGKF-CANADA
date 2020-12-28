<!DOCTYPE html>
<html>

        <head>

        <?php wp_head();?>

        </head>
    
<body <?php body_class();?> >


<header>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <?php wp_nav_menu(
                        array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'navigation'
                        )    
                );?> 

  
        
</header>

      


      





    
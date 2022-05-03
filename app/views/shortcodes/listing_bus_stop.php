<?php defined('ABSPATH') || exit('No direct script access allowed');
$route = $_GET['route'];

if($route!=''):
?>
<div class='col large-12 small-12'><?php echo '<h4 class="title-info-stops">'.'Pontos da Rota <br>'.$route.'</h4>';?></div>
<?php while($query->have_posts()):
    $query->the_post();
    if($route==get_the_title($query->ID)):
    ?>
        <div class="col large-6 small-12">
            <?php the_content();?>
        </div>
<?php endif;?>
<?php endwhile; ?>
<?php else:?>
    <div></div>
<?php endif;?>       
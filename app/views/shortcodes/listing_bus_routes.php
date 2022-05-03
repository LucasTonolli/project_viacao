<?php defined('ABSPATH') || exit('No direct script access allowed'); 

?>

<div class="row options">
    <div class="col large-8 small-12">
        <form method="get" action="informacoes-da-rota">
            <select name="route" id="iroute" class="bus-routes" style="width:350px; height:40px;">
                <option> </option>
                <?php while($query->have_posts()):
                        $query->the_post();?>
                <option value="<?php the_title();?>"><?php the_title();?></option>      
                <?php endwhile;?>    
            </select>
            <input type="submit" value="Buscar"/>
            
        </form>    
    </div>    
</div>
<div>
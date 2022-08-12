<?php 
$galery_images = get_field('galeria_de_imagenes');
?>
<div class="w-100 col-12 p-0 m-0" style="background: #C9C9C9;">
    <div class="lanube-slider-clientes py-5">
        <?php 
        if (is_array($galery_images) || is_object($galery_images)):
        foreach($galery_images as $slide):?>
            <div>
                <img src="<?php echo $slide['url']; ?>">
            </div>
        <?php 
        endforeach;
        endif;
        ?>
    </div>
</div>
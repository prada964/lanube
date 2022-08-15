<?php
$contat = get_field('contacto_footer', 'options');
$icons = get_field('redes_sociales', 'options');
$logo_footer = get_field('logo_footer', 'options')

?>

<footer>
    <div class="contact-footer">
        <?php echo $contat ?>
    </div>
    <div class="social-networks-footer">
        <h4>Síguenoss</h4>
        <div class="icons-social-networks-footer">
            <?php foreach ($icons as $icon) : ?>
                <a href="<?php echo $icon['url'] ?>"><?php echo $icon['icon'] ?></a>
            <?php endforeach; ?>
        </div>

    </div>
    <div class="logo-footer">
        <a href="<?php echo esc_url(site_url('/')) ?>">
            <?php if (!empty($logo_footer)) : ?>
                <img src="<?php echo esc_url($logo_footer['url']) ?>" alt="<?php echo esc_attr($logo_footer['alt']); ?>">
            <?php endif ?>
        </a>
    </div>
    <?php wp_footer(); ?>
</footer>

</body>

</html>
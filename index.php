<?php get_header(); ?>

<?php 

echo 'Our sponosor is ' . do_shortcode('[brand slug="wpcasts"]');

?>

<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script type="text/javascript">tippy('[data-tippy-content]');</script>
<?php get_footer(); ?>
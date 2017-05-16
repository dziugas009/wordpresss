
<footer class="site-footer">
    <p><?php bloginfo() ?> - &copy; <?php echo date('Y');?></p>

    <nav class="site-nav">
	    <?php $args = ['theme_location' => 'footer'] ?>

	    <?php wp_nav_menu()?>
    </nav>

</footer>

</div>
<?php wp_footer(); ?>

</body>
</html>
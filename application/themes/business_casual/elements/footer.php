<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
    <footer>
        <?php
        $a = new GlobalArea('Footer Legal');
        $a->display();
        ?>
    </footer>

</div>
<!-- /.ccm-page -->

    <?php Loader::element('footer_required'); ?>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $this->getThemePath()?>/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>

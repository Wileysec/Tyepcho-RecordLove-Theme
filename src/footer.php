<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<a class="back-to-top js-back-to-top" href="#" data-offset="100" data-duration="300">
    <svg class="icon" viewBox="0 0 16 16"><title>Go to top of page</title><g stroke-width="1" stroke="currentColor"><polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="15.5,11.5 8,4 0.5,11.5 "></polyline></g></svg>
</a>

<script src="<?php $this->options->themeUrl('assets/js/scripts.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/timeline.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/progressbar.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/backtop.js'); ?>"></script>
<?php $this->footer(); ?>
</body>
</html>

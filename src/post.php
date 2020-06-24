<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<script>
    var head = document.getElementsByTagName('head')[0];
    var link = document.createElement('link');
    link.href = "<?php echo $this->options->themeUrl; ?>/assets/css/vue.css";
    link.rel = 'stylesheet';
    link.type = 'text/css';
    head.appendChild(link);
</script>

<progress aria-hidden="true" class="reset reading-progressbar reading-progressbar--is-hidden js-reading-progressbar" max="100" value="0">
    <div class="reading-progressbar__fallback js-reading-progressbar__fallback"></div>
</progress>

<article class="padding-y-lg reading-content js-reading-content">
    <header class="container max-width-xs margin-bottom-lg">
        <div class="text-component text-center line-height-lg v-space-md margin-bottom-md">
            <h1><?php $this->title(); ?></h1>
            <p>Writer：<?php echo $this->author(); ?></p>
        </div>
    </header>
    <div class="container max-width-adaptive-sm">
        <?php $this->content(); ?>
    </div>
</article>

<?php $this->need('footer.php'); ?>

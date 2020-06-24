<?php
/**
 * 写给小张宝贝的Typecho记录爱情主题
 *
 * 大傻子会一直爱着你这个小傻子的❤️
 * 
 * @package RecordLove Theme
 * @author WileySec
 * @version 1.0
 * @link http://wileysec.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<section class="cd-timeline js-cd-timeline">
    <div class="container max-width-lg cd-timeline__container">
        <?php while($this->next()): ?>
            <div class="cd-timeline__block">
                <?php
                    if(isset($this->fields->icon)){
                        switch($this->fields->icon){
                            case 'picture':
                                echo "<div class=\"cd-timeline__img cd-timeline__img--picture\"><img src='".$this->options->themeUrl.'/assets/img/cd-icon-picture.svg'."' alt='Picture'></div>";
                                break;
                            case 'movie':
                                echo "<div class=\"cd-timeline__img cd-timeline__img--movie\"><img src='".$this->options->themeUrl.'/assets/img/cd-icon-movie.svg'."' alt='Movie'></div>";
                                break;
                            case 'location':
                                echo "<div class=\"cd-timeline__img cd-timeline__img--location\"><img src='".$this->options->themeUrl.'/assets/img/cd-icon-location.svg'."' alt='Location'></div>";
                                break;
                            case 'flag':
                                echo "<div class=\"cd-timeline__img cd-timeline__img--flag\"><img src='".$this->options->themeUrl.'/assets/img/cd-icon-flag.svg'."' alt='Flag'></div>";
                                break;
                            default:
                                echo "<div class=\"cd-timeline__img cd-timeline__img--location\"><img src='".$this->options->themeUrl.'/assets/img/cd-icon-location.svg'."' alt='Location'></div>";
                                break;

                        }
                    }else{
                        echo "<div class=\"cd-timeline__img cd-timeline__img--location\"><img src='".$this->options->themeUrl.'/assets/img/cd-icon-location.svg'."' alt='Location'></div>";
                    }
                ?>

                <div class="cd-timeline__content text-component">
                    <h2><?php $this->title() ?></h2>
                    <p class="color-contrast-medium">
                        <?php $this->content(); ?>
                    </p>
                    <p class="color-contrast-medium">
                        Writer：<?php $this->author(); ?>
                    </p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date"><?php $this->date('F(m) j,Y'); ?></span>
                        <a href="<?php $this->permalink() ?>" class="btn btn--subtle">Read more</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<?php $this->need('footer.php'); ?>

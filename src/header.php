<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <link rel="stylesheet" href="">
    <link id="codyframe" rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/timeline.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/progressbar.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/backtop.css'); ?>">
    <script>
        if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}}
    </script>
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <?php $this->header(); ?>
</head>
<body>
<header class="cd-main-header text-center flex flex-column flex-center" style="<?php if($this->options->changecolor){echo "background:var(--cd-color-".$this->options->changecolor.");";}elseif($this->options->customcolor){echo "background:".$this->options->customcolor.";";}elseif($this->options->changecolor==''){echo "background:var(--cd-color-3);";}else{echo "background:#ccc;";} ?>">
    <h1><?php if($this->options->pagetitle){echo $this->options->pagetitle;}else{echo "Recording Love Memory For Us";} ?></h1>
    <p class="margin-top-sm">💑 <?php if($this->options->boyname){echo $this->options->boyname;}else{echo "BoyName";} ?> &amp; <?php if($this->options->girlname){echo $this->options->girlname;}else{echo "GirlName";} ?></p>
</header>


    

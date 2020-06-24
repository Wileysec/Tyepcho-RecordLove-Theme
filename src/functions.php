<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {

    $pagetitle = new Typecho_Widget_Helper_Form_Element_Text('pagetitle', NULL, NULL, _t('主页标题'), _t('主页标题'));
    $form->addInput($pagetitle);

    $boyname = new Typecho_Widget_Helper_Form_Element_Text('boyname', NULL, NULL, _t('男生姓名'), _t('Name of boy'));
    $form->addInput($boyname);

    $girlname = new Typecho_Widget_Helper_Form_Element_Text('girlname', NULL, NULL, _t('女生姓名'), _t('Name of girl'));
    $form->addInput($girlname);

    $customcolor = new Typecho_Widget_Helper_Form_Element_Text('customcolor', NULL, NULL, _t('自定义主页头部背景色'), _t('Custom background color'));
    $form->addInput($customcolor);

    $changecolor = new Typecho_Widget_Helper_Form_Element_Text('changecolor', NULL, NULL, _t('选择主页头部背景色'), _t('与上面自定义背景色冲突，如自定义就不用选择背景色了，选择背景色为数字1-6'));
    $form->addInput($changecolor);

}

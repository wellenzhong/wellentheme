
<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package wellentheme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php creativefocus_html_tag_schema(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/styles/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/styles/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/js/swiper-3.4.2.min.css">
    <?php wp_head(); ?>
</head>

<body>
    <div  class="wrapper">
        <header class="header">
            <div id="menu-bar" class="menu-bar">
                <div class="logo"></div>
                <div class="menu">
                    <ul>
                        <li <?php if (is_home()) { echo 'class="current"';} ?>><a title="<?php bloginfo('name'); ?>"  href="<?php echo get_option('home'); ?>/">主页</a></li>
                        <?php wp_list_categories('depth=1&title_li=0&sort_column=menu_order'); ?>
                        <?php wp_list_pages('depth=1&title_li=0&sort_column=menu_order'); ?>
                    </ul>
                </div>
                <div class="search">
                    <div class="input-wrap"><input type="text" placeholder="搜索全站"></div>
                    <button type="button" class="search-btn"></button>
                </div>
            </div>
        </header>
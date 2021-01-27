<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trttheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="section_header">
    <div class="container">
        <div class="row">
            <a class="logo" href="" title="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
            </a>
            <a class="logo logo_mobi" href="" title="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logomobi.png" alt="">
            </a>
            <div class="icon_sumenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="element_main_menu">
                <ul class="main_menu menu_tab">
                    <li><a href="" title="">Giới thiệu</a></li>
                    <li class="show_submenu">
                        <a href="" title=""> Sản xuất và kinh doanh</a>
                        <ul class="submenu_page">
                            <li><a href="" title=""> Nghi Sơn đa dụng</a></li>
                            <li><a href="" title=""> Nghi Sơn Premium</a></li>
                            <li><a href="" title=""> Nghi Sơn PCB40</a></li>
                        </ul>
                    </li>
                    <li><a href="" title="">Sản phẩm</a></li>
                    <li class="show_submenu">
                        <a href="" title="">Tin tức</a>
                        <ul class="submenu_page">
                            <li><a href="" title=""> Nghi Sơn đa dụng</a></li>
                            <li><a href="" title=""> Nghi Sơn Premium</a></li>
                            <li><a href="" title=""> Nghi Sơn PCB40</a></li>
                        </ul>
                    </li>
                    <li><a href="" title="">Tuyển dụng</a></li>
                    <li><a href="" title="">THƯ VIỆN</a></li>
                    <li><a href="" title="">Liên hệ</a></li>
                    <li class="show_submenu show_menu_search">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search.png" alt="">
                        <div class="submenu_page">
                            <form class="search_form">
                                <span><input type="text" name="" placeholder="Tìm kiếm..."></span>
                                <a href="" class="btn btn_search" title=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/search.png" alt=""></a>
                            </form>
                        </div>
                    </li>
                    <li class="show_submenu show_submenu_lang">
                        <span class="lang_pc">
                            <span class="active"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/vn.png" alt=""></span>
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tienganh.png" alt=""></span>
                            <select>
                                <option>vi</option>
                                <option>en</option>
                            </select>
                        </span>
                        <a href="" title="" class="lang_mobi">Ngôn ngữ</a>
                        <ul class="submenu_page submenu_page_mobi">
                            <li><a href="" class="lang_item" title="">Tiếng Việt<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vn.png" alt=""></a></li>
                            <li><a href="" class="lang_item" title="">Tiếng Anh<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tienganh.png" alt=""></a></li>
                        </ul>
                    </li>
                    <p class="close_mobi"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/close.png" alt=""></span>Đóng</p>
                </ul>
            </div>
            
        </div>
    </div>
</div>

<?php
    /*
    * Plugin Name: Palestine Cities for woocommerce
    * Author: Nourelhouda MAANDOUCHE
    * Plugin URI: https://github.com/yttechiepress/states-and-cities-for-woocommerce
    * Author URI: https://github.com/yttechiepress/states-and-cities-for-woocommerce
    * Description: Add Palestine's cities to woocommerce / إضافة المدن الفلسطينية إلى الووكومرس
    * Version: 0.1.0
    * License: GPL2 or later
    * License URL: https://choosealicense.com/licenses/mit/
    * text-domain: states-and-cities-for-woocommerce
    */

    // add basic plugin security
    defined('ABSPATH') or die;

    // Add aplugin notice to check for WC city Select as active plugin.
add_action( 'plugins_loaded', 'check_for_wc_city_select_active' );

function check_for_wc_city_select_active() {
    if( ! class_exists( 'WC_City_Select' ) ) {
        add_action( 'admin_notices', 'notice_wc_city_select_activate' );
        return;
    }

    add_filter( 'wc_city_select_cities', 'palestine_cities' );
}

function notice_wc_city_select_activate() {
    $message = sprintf( __( 'States and cities for Woocommerce requires the <a href="%s">WC City Select</a> plugin to be active', 'states-and-cities-for-woocommerce' ), 'https://wordpress.org/plugins/wc-city-select/' );
    printf( '<div class="error notice-error notice is-dismissible"><p>%s</p></div>', $message );
}

    function palestine_cities($cities){
        $cities['PS'] = array(
            'PS0' => array(
                'الجولان',
                'الداخل ال-48'
            ),
            'PS1' => array(
                'عين رافا',
                'أبو غوش',
                'عين نقوبة'
            ),
            'PS2' => array(
                'القدس'
            ),
            'PS3' => array(
                'كفر عقب',
                'عناتا ومخيم شعفاط',
                'قلنديا',
                'الرام',
                'جبع',
                'حزما',
                'مخماس',
                'زعيم',
                'العيزرية',
                'أبو ديس',
                'السواحل الشرقية'
            ),
            'PS4' => array(
                'الخليل',
                'بيت لحم',
                'قرى رام الله',
                'رام الله و البيرة',
                'أريحا',
                'نابلس',
                'سلفيت',
                'قلقيلية',
                'طوباس',
                'جنين',
                'طولكرم'
            ),
            'PS0' => array(
                'القدس',
                'رام الله'
            ),
        );
        return $cities;
    }
   
?>
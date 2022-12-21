<?php
    /*
    * Plugin Name: Palestine States for woocommerce
    * Author: Nourelhouda MAANDOUCHE
    * Plugin URI: https://github.com/NourelhoudaMaan/Palestine-states-and-cities-for-Woocommerce/
    * Author URI: https://github.com/NourelhoudaMaan/
    * Description: Add Palestine's States to woocommerce / إضافة المحافظات الفلسطينية إلى الووكومرس
    * Version: 0.1.0
    * License: MIT
    * License URL: https://choosealicense.com/licenses/mit/
    * text-domain: states-and-cities-for-woocommerce
    */

    // add basic plugin security
    defined('ABSPATH') or die;

    add_filter('woocommerce_states', 'palestine_states');

    function palestine_states($states){
        $map = array();

    $cities = array(
        'PS01' => array(
            'city'     => 'شمال فلسطين',
            'division' => 'الجولان',
        ),
        'PS02' => array(
            'city'     => 'شمال فلسطين',
            'division' => 'الداخل ال-48',
        ),
        'PS11' => array(
            'city'     => 'القدس الغربية',
            'division' => 'عين رافا',
        ),
        'PS12' => array(
            'city'     => 'القدس الغربية',
            'division' => 'أبو غوش',
        ),
        'PS13' => array(
            'city'     => 'القدس الغربية',
            'division' => 'عين نقوبة'
        ),
        'PS21' => array(
            'city'     => 'القدس الشرقية ',
            'division' => 'القدس',
        ),
        'PS31' => array(
            'city'     => 'القدس-الضفة',
            'division' => 'كفر عقب',
        ),
        'PS32' => array(
            'city'     => 'القدس-الضفة',
            'division' => 'عناتا ومخيم شعفاط',
        ),
        'PS33' => array(
            'city'     => 'القدس-الضفة',
            'division' => 'قلنديا',
        ),
        'PS34' => array(
            'city'     => 'القدس-الضفة',
            'division' => 'الرام',
        ),
        'PS35' => array(
            'city'     => 'القدس-الضفة',
            'division' => 'جبع',
        ),
        'PS36' => array(
            'city'     => 'القدس-الضفة',
            'division' => 'حزما',
        ),
        'PS37' => array(
            'city'     => 'القدس-الضفة',
            'division' => 'مخماس',
        ),
        'PS38' => array(
            'city'     => 'القدس-الضفة',
            'division' => 'زعيم',
        ),
        'PS39' => array(
            'city'     => 'القدس-الضفة',
            'division' => 'العيزرية',
        ),
        'PS310' => array(
            'city'     => 'القدس-الضفة',
            'division' => 'أبو ديس',
        ),
        'PS311' => array(
            'city'     => 'القدس-الضفة',
            'division' => 'السواحل الشرقية'
        ),
        'PS41' => array(
            'city'     => 'الضفة الغربية',
            'division' => 'الخليل',
        ),
        'PS43' => array(
            'city'     => 'الضفة الغربية',
            'division' => 'بيت لحم',
        ),
        'PS44' => array(
            'city'     => 'الضفة الغربية',
            'division' => 'قرى رام الله',
        ),
        'PS45' => array(
            'city'     => 'الضفة الغربية',
            'division' => 'رام الله و البيرة',
        ),
        'PS46' => array(
            'city'     => 'الضفة الغربية',
            'division' => 'أريحا',
        ),
        'PS47' => array(
            'city'     => 'الضفة الغربية',
            'division' => 'نابلس',
        ),
        'PS48' => array(
            'city'     => 'الضفة الغربية',
            'division' => 'سلفيت',
        ),
        'PS42' => array(
            'city'     => 'الضفة الغربية',
            'division' => 'قلقيلية',
        ),
        'PS49' => array(
            'city'     => 'الضفة الغربية',
            'division' => 'طوباس',
        ),
        'PS410' => array(
            'city'     => 'الضفة الغربية',
            'division' => 'جنين',
        ),
        'PS411' => array(
            'city'     => 'الضفة الغربية',
            'division' => 'طولكرم',
        ),
    );

    foreach ( $cities as $city => $cityValue ) {
        $map[$city] = $cityValue['city'] . ', '. $cityValue['division'];
    }
    
    $states['PS'] = $map;
        return $states;
    }
?>
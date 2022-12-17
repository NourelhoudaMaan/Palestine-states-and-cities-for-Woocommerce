<?php
    /*
    * Plugin Name: Palestine States for woocommerce
    * Author: Nourelhouda MAANDOUCHE
    * Plugin URI: https://github.com/NourelhoudaMaan/Palestine-states-and-cities-for-Woocommerce/blob/main/palestine_cities.php
    * Author URI: https://github.com/NourelhoudaMaan/
    * Description: Add Palestine's States to woocommerce / إضافة المحافظات الفلسطينية إلى الووكومرس
    * Version: 0.1.0
    * License: GPL2 or later
    * License URL: https://choosealicense.com/licenses/mit/
    * text-domain: states-and-cities-for-woocommerce
    */

    // add basic plugin security
    defined('ABSPATH') or die;

    add_filter('woocommerce_states', 'palestine_states');

    function palestine_states($states){
        $states['PS'] = array(
            'PS0' => 'شمال فلسطين',
            'PS1' => 'القدس الغربية',
            'PS2' => 'القدس الشرقية ',
            'PS3' => 'القدس-الضفة',
            'PS4' => 'الضفة الغربية',
                );
        return $states;
    }
?>
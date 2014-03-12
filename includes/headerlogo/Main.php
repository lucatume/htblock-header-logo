<?php
namespace headerlogo;

class Main
{
    public function __construct()
    {
        add_action('after_setup_theme', array($this, 'blockRegister'));
        add_action('init', array($this, 'extend_updater'));
    }

    public function blockRegister()
    {
        if ( !class_exists('Headway') )
            return;
        return headway_register_block('\headerlogo\Block', plugins_url(false, __FILE__));
    }


    public function extend_updater() {
        if ( !class_exists('HeadwayUpdaterAPI') )
            return;
        $updater = new \HeadwayUpdaterAPI(array(
            'slug' => 'headerlogo',
            'path' => plugin_basename(__FILE__),
            'name' => 'Header and Logo Block',
            'type' => 'block',
            'current_version' => HEADERLOGO_BLOCK_VERSION
            ));
    }
}

<?php
namespace headerlogo;

use tad\wrappers\ThemeSupport;

class Main
{
    protected $themeSupport;

    public function __construct(\tad\wrappers\ThemeSupport $themeSupport = null)
    {
        add_action('after_setup_theme', array($this, 'blockRegister'));
        add_action('init', array($this, 'extend_updater'));
        // add custom header image support
        $this->themeSupport = new ThemeSupport();
        $this->themeSupport->add('custom-header');
    }

    public function blockRegister()
    {
        if (!class_exists('Headway')) {
            return;
        }
        return headway_register_block('\headerlogo\Block', plugins_url(false, __FILE__));
    }


    public function extend_updater()
    {
        if (!class_exists('HeadwayUpdaterAPI')) {
            return;
        }
        $updater = new \HeadwayUpdaterAPI(array(
            'slug' => 'headerlogo',
            'path' => plugin_basename(__FILE__),
            'name' => 'Header and Logo Block',
            'type' => 'block',
            'current_version' => HEADERLOGO_BLOCK_VERSION
            ));
    }
}

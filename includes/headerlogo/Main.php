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
        // register this block theme-wide options
        // but do it after headway theme setup
        add_action('after_setup_theme', array($this, 'addVisualEditorPanels'));
    }
    public function addVisualEditorPanels()
    {
        // include the class defining those options
        include_once dirname(__FILE__) . '/HeaderImagePanel.php';
        // register the visual editor panel
        $class = '\headerlogo\HeaderImagePanel';
        $tag = 'headway_visual_editor_display_init';
        // hook in with a priority higher than the one Headway registers
        // its own setup block to have the Header Image options panel show
        // on the right side of it
        $priority = 1000;
        add_action($tag, create_function('', 'return headway_register_visual_editor_panel_callback(\'' . $class . '\');'), $priority);
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

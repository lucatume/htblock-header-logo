<?php
namespace headerlogo;

use tad\wrappers\ThemeSupport;

class Block extends \HeadwayBlockAPI
{

    public $id = 'headerlogo';
    public $name = 'Header and Logo Block';
    public $options_class = '\headerlogo\BlockOptions';
    public $description = 'An Headway block that displays the site logo, title and tagline and allows for some user customization.';
    protected $themeSupport;

    // public static function init_action($block_id, $block)
    // {
    // }


    // public static function enqueue_action($block_id, $block, $original_block = null)
    // {
    // }
    
    
    // public static function dynamic_css($block_id, $block, $original_block = null)
    // {
    // }
    
    
    // public static function dynamic_js($block_id, $block, $original_block = null)
    // {
    // }
}

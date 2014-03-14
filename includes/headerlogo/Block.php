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
    public function content($block)
    {
    // get the theme user choice about the header image
    // defaults to false
        $headerImage = get_theme_mod('header_image', 'remove-header');
        $imageSrc = $headerImage;
        if ($headerImage == 'remove-header') {
            // the user does not want to show an header image
            // does theme developer wishes to use a default image?
            // options for select controls are saved by their index
            // show no image is the 0 index option
            $useDefaultImage = \HeadwayBlocksData::get_block_setting($block, 'no-user-image');
            if (!$useDefaultImage) {
                // nothing will be printed to the page but before and
                // after filter will be fired the same
                $this->theHeader();
            }
            // the image source is set to default image one
            // not checking if the theme developer actually set it or not
            $imageSrc = \HeadwayBlocksData::get_block_setting($block, 'default-image-src');
        }
        // echo the markup to the page
        $this->theHeader($imageSrc);
    }
    protected function theHeader($imageSrc = null)
    {
        do_action('headway_before_header_link');
        // no image source then do not print the image markup to the page
        if (!is_null($imageSrc)) {
            echo '<a href="' . home_url() . '" class="banner-image">';
            echo '<img src="' . $imageSrc . '" alt="' . get_bloginfo('name') . '" />';
            echo '</a>';
        }
        do_action('headway_after_header_link');
    }
}

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

    public function __construct()
    {
        // create an instance of the ThemeSupport class
        $this->themeSupport = new ThemeSupport();
        $this->themeSupport->add('custom-header');
    }

            // function enqueue_action($block_id) {
            //     /* CODE FOR OPTIONAL METHOD */
            //     return;
            // }

            // function init_action($block_id) {
            //     /* CODE FOR OPTIONAL METHOD */
            //     return;
            // }

            // function dynamic_js($block_id) {
            //     /* CODE FOR OPTIONAL METHOD */
            //     return;
            // }

            // function dynamic_css($block_id) {
            //     /* CODE FOR OPTIONAL METHOD */
            //     return;
            // }

            // function setup_elements() {
            //     $this->register_block_element(array(
            //         'id' => 'element1-id',
            //         'name' => 'Element 1 Name',
            //         'selector' => '.my-selector1',
            //         'properties' => array('property1', 'property2', 'property3'),
            //         'states' => array(
            //             'Selected' => '.my-selector1.selected',
            //             'Hover' => '.my-selector1:hover',
            //             'Clicked' => '.my-selector1:active'
            //         )
            //     ));
            // }

            // function content($block) {
            //     /* CODE HERE */
            // }
}

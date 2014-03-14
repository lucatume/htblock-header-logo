<?php
namespace headerlogo;

class HeaderImagePanel extends \HeadwayVisualEditorPanelAPI
{
    public $id = 'header-image';
    public $name = 'Header Image';
    public $mode = 'grid';
    
    public $tabs = array(
        'dimensions' => 'Dimensions',
        );
    
    public $tab_notices = array(
        'dimensions' => 'The user is give the option to upload a custom header image for the theme and while the use of that image can be made on a block per block base the dimensions constraints, if any, to that image upload will be applied theme-wide.'
        );
    
    public $inputs = array(
        'dimensions' => array(
            'dimensions-limits' => array(
                'type' => 'select',
                'name' => 'dimensions-limits',
                'label' => 'Header image dimensions should',
                'tooltip' => 'Setting a dimension limit will allow theme users to crop or resize the image on the fly, do not worry.',
                'options' => array(
                    'be limited',
                    'not be limited'
                    ),
                'default' => 1
                ),
            'width-constraint-mode' => array(
                'type' => 'select',
                'name' => 'width-constraint-mode',
                'label' => 'Header image width constraint should be',
                'options' => array(
                    'a fixed value',
                    'flexible'
                    ),
                'default' => 1
                ),
            'height-constraint-mode' => array(
                'type' => 'select',
                'name' => 'height-constraint-mode',
                'label' => 'Header image height constraint should be',
                'options' => array(
                    'a fixed value',
                    'flexible'
                    ),
                'default' => 1
                ),
            'width-constraint-value' => array(
                'type' => 'text',
                'name' => 'width-constraint-value',
                'label' => 'Fixed width',
                'default' => '300px'
                ),
            'height-constraint-value' => array(
                'type' => 'text',
                'name' => 'height-constraint-value',
                'label' => 'Fixed height',
                'default' => '300px'
                ),
            )
    );
}

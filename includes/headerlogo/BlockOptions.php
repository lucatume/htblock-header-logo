<?php
namespace headerlogo;

class BlockOptions extends \HeadwayBlockOptionsAPI
{

    public $tab_notices = array(
        'user-choices' => 'Theme user will be able to upload a custom header image or not  and will be given the choice to show the header text or not. The block will take those choices into consideration and allows you to do the same via options. "But choose wisely."(Indiana Jones and the Last Crusade, Grail Knight).'
        );

    public $tabs = array(
        'user-choices' => 'User choices'
        );

    public $inputs = array(
        'user-choices' => array(
            'user-image-position' => array(
                'type' => 'select',
                'name' => 'user-image-position',
                'label' => 'Theme user did upload and selected an image',
                'tooltip' => 'Theme user did upload an image and has choosen to use it in the header. How should the image be used?',
                'options' => array(
                    'as the block background',
                    'on the left',
                    'on the right',
                    'in the center'
                    ),
                'default' => 0
                ),
            'use-default-image' => array(
                'type' => 'select',
                'name' => 'use-default-image',
                'label' => 'Theme user does not want to use an image, block should',
                'options' => array('not show an image', 'show a default image'),
                'default' => '0',
                'toggle' => array(
                    0 => array(
                        'hide' => array('#input-default-image-src','#input-default-image-position')
                        ),
                    1 => array(
                        'show' => array('#input-default-image-src','#input-default-image-position')
                        )
                    )
                ),
            'default-image-src' => array(
                'type' => 'image',
                'name' => 'default-image-src',
                'label' => 'Pick a default header image',
                'default' => null
                ),
            'default-image-position' => array(
                'type' => 'select',
                'name' => 'default-image-position',
                'label' => 'How to use the default image?',
                'options' => array(
                    'use the default image as the block background',
                    'show the default image on the left',
                    'show the default image on the right',
                    'show the default image in the center'
                    ),
                'default' => 0
                )
            )
    );
}

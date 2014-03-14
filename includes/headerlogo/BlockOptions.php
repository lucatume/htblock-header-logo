<?php
namespace headerlogo;

class BlockOptions extends \HeadwayBlockOptionsAPI
{

    public $tab_notices = array(
        'user-choices' => 'Theme user will be able to upload a custom header image or not  and will be given the choice to show the header text or not. The block will take those choices into consideration and allows you to do the same via options. "But choose wisely."(Indiana Jones and the Last Crusade, Grail Knight).'
        );

    public $tabs = array(
            // 'my-only-tab' => 'Settings'
        'user-choices' => 'User choices'
        );

    public $inputs = array(

            // 'my-only-tab' => array(

            //     'text-input' => array(
            //         'type' => 'image',
            //         'name' => 'logo',
            //         'label' => 'Logo',
            //         'tooltip' => 'Put anything relevant about the input in this tooltip.'
            //     )
            // )
        'user-choices' => array(
            'user-image' => array(
                'type' => 'select',
                'name' => 'user-image',
                'label' => 'Theme user did upload and selected an image',
                'tooltip' => 'Theme user did upload an image and has choosen to use it in the header. How should the image be used?',
                'options' => array(
                    'as the block background',
                    'on the left',
                    'on the right',
                    'in the center'
                    ),
                'default' => 'as the block background'
                ),
            'no-user-image' => array(
                'type' => 'select',
                'name' => 'no-user-image',
                'label' => 'Theme user does not want to use an image',
                'tooltip' => 'Theme user did not upload an image or has choosen not to use it in the header. What to do then?',
                'options' => array(
                    'show no image',
                    'use a default image as the block background',
                    'use a default image on the left',
                    'use a default image on the right',
                    'use a default image in the center'
                    ),
                'default' => 'show no image',
                'toggle' => array(
                    0 => array(
                        'hide' => array(
                            '#input-default-header-image'
                            )
                        ),
                    1 => array(
                        'show' => array('#input-default-header-image')
                        ),
                    2 => array(
                        'show' => array('#input-default-header-image')
                        ),
                    3 => array(
                        'show' => array('#input-default-header-image')
                        ),
                    4 => array(
                        'show' => array('#input-default-header-image')
                        )
                    )
                ),
    'default-header-image' => array(
        'type' => 'image',
        'name' => 'default-header-image',
        'label' => 'Default header image',
        'default' => null
        )
    )
    );
}

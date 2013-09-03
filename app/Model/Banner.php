<?php
/**
 * ASBRASP
 * Copyright Gustavo Ramos
 * Created August 2013
 * gustavo.ramos@veadvogados.com.br
 * All Rights Reservated
 */

class Banner extends AppModel
{
    public $name = 'Banner';
    public $actsAs = array(
        'Upload.Upload' => array(
            'image_path'
        )
    );
}
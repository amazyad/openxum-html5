<?php

class Partie extends AppModel {
    public $name = 'Partie';

    public $belongsTo = array(
        'user_white' => array(
            'className' => 'User',
            'foreignKey' => 'user_id_white'
        ),
        'user_black' => array(
            'className' => 'User',
            'foreignKey' => 'user_id_black'
        )
    );
}
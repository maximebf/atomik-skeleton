<?php

Atomik::set(array(

    'plugins' => array(
        'Errors' => array(
            'catch_errors' => true
        ),
        'Session',
        'Flash'
    ),

    'app.layout' => '_layout'
    
));

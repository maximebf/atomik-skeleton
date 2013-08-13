<?php

Atomik::set(array(

    'plugins' => array(
        'DebugBar' => array(
            // if you don't include jquery yourself as it is done in the
            // skeleton, comment out this line (the debugbar will include jquery)
            'include_vendors' => 'css'
        ),
        'Errors' => array(
            'catch_errors' => true
        ),
        'Session',
        'Flash'
    ),

    'app.layout' => '_layout',

    // WARNING: change this to false when in production
    'atomik.debug' => true
    
));

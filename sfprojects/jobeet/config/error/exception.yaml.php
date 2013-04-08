<?php echo sfYaml::dump(array(
    'error'        => array(
        'code'     => $code,
        'meassage' => $message,
        'debug'    => array(
            'name' => $name,
            'message' => $message,
            'traces' => $traces,
        ),
    )), 4) ?>
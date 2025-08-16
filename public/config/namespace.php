<?php

$namespace = [
    'App\\' => 'app/',
    'Craft\\' => 'src/'
];

$classes = [
    'App\\Controller\\Controller' => 'app/Controller/controller.php',
    'Craft\\Application\\View' => 'src/application/View.php'
];

$helpers = [
    'src/application/helper/helper.php',
    'src/kit/helper/var_dump.php',
];

return [
    'namespace' => $namespace,
    'classes' => $classes,
    'helpers' => $helpers,
];
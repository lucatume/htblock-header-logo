<?php
$projectRoot = dirname(dirname(__FILE__));
// Include the class loader if it's not defined already
if (!class_exists('jwage\SplClassLoader')) {
    require_once $projectRoot . '/includes/jwage/SplClassLoader.php';
}
// Add the plugin namespace to the autolaoding classes
$classLoader = new \jwage\SplClassLoader('headerlogo', $projectRoot . '/includes');
$classLoader->register();
$classLoader = new \jwage\SplClassLoader('tad', $projectRoot . '/includes');
$classLoader->register();

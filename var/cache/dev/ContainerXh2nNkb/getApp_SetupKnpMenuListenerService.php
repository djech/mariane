<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'app.setup_knp_menu_listener' shared autowired service.

include_once $this->targetDirs[3].'/src/EventListener/KnpMenuBuilderListener.php';

return $this->privates['app.setup_knp_menu_listener'] = new \App\EventListener\KnpMenuBuilderListener();
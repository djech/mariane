<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ac_strasbourg_crud.crud' shared autowired service.

include_once $this->targetDirs[3].'/src/Service/Crud.php';

return $this->services['ac_strasbourg_crud.crud'] = new \App\Service\Crud(($this->services['doctrine'] ?? $this->getDoctrineService()));

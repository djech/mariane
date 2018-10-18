<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.dao.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Provider/AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Provider/UserAuthenticationProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Provider/DaoAuthenticationProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/User/UserCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/User/UserChecker.php';

return $this->privates['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($this->privates['security.user.provider.concrete.fos_userbundle'] ?? $this->load('getSecurity_User_Provider_Concrete_FosUserbundleService.php')), ($this->privates['security.user_checker'] ?? $this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker()), 'main', ($this->privates['security.encoder_factory.generic'] ?? $this->load('getSecurity_EncoderFactory_GenericService.php')), true);

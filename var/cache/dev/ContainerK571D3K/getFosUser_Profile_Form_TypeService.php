<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.profile.form.type' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Form/Type/ProfileFormType.php';

return $this->privates['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('\\App\\Entity\\User');

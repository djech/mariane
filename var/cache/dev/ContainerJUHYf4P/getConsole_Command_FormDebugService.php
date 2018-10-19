<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Command/DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'FOS\\UserBundle\\Form\\Type', 4 => 'FOS\\CKEditorBundle\\Form\\Type', 5 => ''), array(0 => 'App\\Form\\AboutType', 1 => 'App\\Form\\InformationSkillsType', 2 => 'App\\Form\\InformationType', 3 => 'App\\Form\\SkillType', 4 => 'App\\Form\\UserType', 5 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 6 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 7 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 8 => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 9 => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 10 => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 11 => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 12 => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', 13 => 'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType', 14 => 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType'), array(0 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 1 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 6 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'), array(0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'));

$instance->setName('debug:form');

return $instance;
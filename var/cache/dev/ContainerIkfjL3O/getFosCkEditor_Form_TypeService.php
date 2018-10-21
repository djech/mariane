<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_ck_editor.form.type' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Form/Type/CKEditorType.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/ConfigManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/ConfigManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/PluginManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/PluginManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/StylesSetManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/StylesSetManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/TemplateManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/TemplateManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/ToolbarManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/ToolbarManager.php';

$a = new \FOS\CKEditorBundle\Model\ConfigManager();
$a->setConfigs(array('my_config' => array('filebrowserBrowseRoute' => 'elfinder', 'filebrowserBrowseRouteParameters' => array(), 'toolbar' => 'my_toolbar_1')));
$a->setDefaultConfig('my_config');

$b = new \FOS\CKEditorBundle\Model\ToolbarManager();
$b->setItems(array('clipboard' => array(0 => 'Cut', 1 => 'Copy', 2 => 'Paste', 3 => 'PasteText', 4 => 'PasteFromWord', 5 => '-', 6 => 'Undo', 7 => 'Redo'), 'basicstyles' => array(0 => 'Bold', 1 => 'Underline', 2 => 'Italic', 3 => 'Subscript', 4 => 'Superscript', 5 => '-', 6 => 'CopyFormatting', 7 => 'RemoveFormat'), 'paragraph' => array(0 => 'NumberedList', 1 => 'BulletedList', 2 => '-', 3 => '-', 4 => 'JustifyLeft', 5 => 'JustifyCenter', 6 => 'JustifyRight', 7 => 'JustifyBlock', 8 => '-'), 'links' => array(0 => 'Link', 1 => 'Unlink'), 'insert' => array(0 => 'Html5video', 1 => 'Html5audio', 2 => 'Image', 3 => 'Table', 4 => 'HorizontalRule', 5 => 'SpecialChar'), 'styles' => array(0 => 'Format', 1 => 'FontSize'), 'colors' => array(0 => 'TextColor', 1 => 'BGColor'), 'tools' => array(0 => 'Maximize', 1 => 'ShowBlocks')));
$b->setToolbars(array('my_toolbar_1' => array(0 => '@clipboard', 1 => '@basicstyles', 2 => '@paragraph', 3 => '@links', 4 => '@insert', 5 => '/', 6 => '@styles', 7 => '@colors', 8 => '@tools')));

return $this->privates['fos_ck_editor.form.type'] = new \FOS\CKEditorBundle\Form\Type\CKEditorType($a, new \FOS\CKEditorBundle\Model\PluginManager(), new \FOS\CKEditorBundle\Model\StylesSetManager(), new \FOS\CKEditorBundle\Model\TemplateManager(), $b);
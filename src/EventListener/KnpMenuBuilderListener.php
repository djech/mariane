<?php
/**
 * Created by PhpStorm.
 * User: jerome
 * Date: 18/10/18
 * Time: 16:12
 */
namespace App\EventListener;

use KevinPapst\AdminLTEBundle\Event\KnpMenuEvent;

class KnpMenuBuilderListener
{
    public function onSetupMenu(KnpMenuEvent $event)
    {
        $menu = $event->getMenu();

        $menu->addChild('MainNavigationMenuItem', [
            'label' => 'CONFIGURATION',
            'childOptions' => $event->getChildOptions()
        ])->setAttribute('class', 'header');

        $menu->addChild('information', [
            'route' => 'information',
            'label' => 'Information civile',
            'childOptions' => $event->getChildOptions()
        ])->setLabelAttribute('icon', 'fas fa-tachometer-alt');

        $menu->addChild('about', [
            'route' => 'about',
            'label' => 'À propos',
            'childOptions' => $event->getChildOptions()
        ])->setLabelAttribute('icon', 'fas fa-tachometer-alt');

        $menu->addChild('skills', [
            'route' => 'skills',
            'label' => 'Compétences',
            'childOptions' => $event->getChildOptions()
        ])->setLabelAttribute('icon', 'fas fa-tachometer-alt');

        $menu->addChild('logiciels', [
            'route' => 'logiciels',
            'label' => 'Logiciels connus',
            'childOptions' => $event->getChildOptions()
        ])->setLabelAttribute('icon', 'fas fa-tachometer-alt');

        $menu->addChild('retour', [
            'route' => 'home',
            'label' => 'Retour sur CV',
            'childOptions' => $event->getChildOptions()
        ])->setLabelAttribute('icon', 'fas fa-tachometer-alt');



//        $menu->getChild('blogId')->addChild('ChildOneItemId', [
//            'route' => 'home',
//            'label' => 'ChildOneDisplayName',
//            'childOptions' => $event->getChildOptions()
//        ])->setLabelAttribute('icon', 'fas fa-rss-square');
    }
}
<?php

namespace App\Controller;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Created by PhpStorm.
 * User: jerome
 * Date: 17/10/18
 * Time: 10:54
 */

class WorkController extends CrudController
{

    protected $title = 'Réalisations pro'; // Titre affiché dans les vues
    protected $entityName = 'Work'; // L'entité de Doctrine qui sert à construire les vues
    protected $formName = 'WorkType';
    protected $formOptions = null;
    protected $manager = 'default';

    /**
     * {@inheritdoc}
     */
    public function initialize()
    {
        $crud = $this->get('app_crud.crud');
        $crud->setParentTwig('administration/layout.html.twig');
        $crud->setThemeTwig(array('form/prototype.html.twig'));
        $crud->setTitle('Réalisations pro');
        $crud->setConnection('default');
        $crud->setEntityName('Work');
        $crud->setFormName('WorkType');
        $crud->setJoinSeparator('<br>');
        $crud->setFormOptions(array("container" => $this->container));
        $crud->getIndexFieldAdder()
            ->add('titre')
                ->addLabel('Titre')
            ->add('lien')
                ->addLabel('Lien');

        parent::initialize();
    }
}
<?php

namespace App\Controller;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Created by PhpStorm.
 * User: jerome
 * Date: 17/10/18
 * Time: 10:54
 */

class WorkCategoryController extends CrudController
{

    protected $title = 'Catégories de réalisations pro'; // Titre affiché dans les vues
    protected $entityName = 'WorkCategory'; // L'entité de Doctrine qui sert à construire les vues
    protected $formName = 'WorkCategoryType';
    protected $formOptions = null;
    protected $manager = 'default';

    /**
     * {@inheritdoc}
     */
    public function initialize()
    {
        $crud = $this->get('app_crud.crud');
        $crud->setParentTwig('administration/layout.html.twig');
        $crud->setThemeTwig(array('form/prototype_icone.html.twig'));
        $crud->setTitle('Catégories de réalisations pro');
        $crud->setConnection('default');
        $crud->setEntityName('WorkCategory');
        $crud->setFormName('WorkCategoryType');
        $crud->setJoinSeparator('<br>');
        $crud->getIndexFieldAdder()
            ->add('nom')
                ->addLabel('Nom');

        parent::initialize();
    }
}
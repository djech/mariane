<?php

namespace App\Controller;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Created by PhpStorm.
 * User: jerome
 * Date: 17/10/18
 * Time: 10:54
 */

class FormationController extends CrudController
{

    protected $title = 'Formations'; // Titre affiché dans les vues
    protected $entityName = 'Information'; // L'entité de Doctrine qui sert à construire les vues
    protected $formName = 'InformationFormationsType';
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
        $crud->setTitle('Formations');
        $crud->setConnection('default');
        $crud->setEntityName('Information');
        $crud->setFormName('InformationFormationsType');
        $crud->setJoinSeparator('<br>');
        $crud->getIndexFieldAdder()
            ->add('formations');

        parent::initialize();
    }

    /**
     * {@inheritdoc}
     */
    protected function sourceQuery($repository) : array
    {
        return $repository->findOrCreateOne();
    }

    /**
     * {@inheritdoc}
     */
    protected function hydrateEntity($entity, bool $new, bool $submitted)
    {
        if (!$new) {
            if (!$submitted) {
                // Formations
                $this->collections[0] = new ArrayCollection();
                foreach ($entity->getFormations() as $formation) {
                    $this->collections[0]->add($formation);
                }
            } else {

                // Formations
                foreach ($this->collections[0] as $formation) {
                    if (false === $entity->getFormations()->contains($formation)) {
                        $this->getDoctrine()->getManager('default')->remove($formation);
                    }
                }

            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function hasRightCreate() : bool
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function hasRightView($entity) : bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function hasRightUpdate($entity) : bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function hasRightDelete($entity) : bool
    {
        return false;
    }

}
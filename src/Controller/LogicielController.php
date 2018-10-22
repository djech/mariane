<?php

namespace App\Controller;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Created by PhpStorm.
 * User: jerome
 * Date: 17/10/18
 * Time: 10:54
 */

class LogicielController extends CrudController
{

    protected $title = 'Logiciels connus'; // Titre affiché dans les vues
    protected $entityName = 'Information'; // L'entité de Doctrine qui sert à construire les vues
    protected $formName = 'InformationLogicielsType';
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
        $crud->setTitle('Logiciels connus');
        $crud->setConnection('default');
        $crud->setEntityName('Information');
        $crud->setFormName('InformationLogicielsType');
        $crud->setJoinSeparator('<br>');
        $crud->getIndexFieldAdder()
            ->add('logiciels');

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
                // Logiciels
                $this->collections[0] = new ArrayCollection();
                foreach ($entity->getLogiciels() as $logiciel) {
                    $this->collections[0]->add($logiciel);
                }
            } else {

                // Logiciels
                foreach ($this->collections[0] as $logiciel) {
                    if (false === $entity->getLogiciels()->contains($logiciel)) {
                        $this->getDoctrine()->getManager('default')->remove($logiciel);
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
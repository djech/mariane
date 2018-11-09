<?php

namespace App\Controller;

use App\Entity\Information;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Created by PhpStorm.
 * User: jerome
 * Date: 17/10/18
 * Time: 10:54
 */

class ReferenceController extends CrudController
{

    protected $title = 'Références'; // Titre affiché dans les vues
    protected $entityName = 'Information'; // L'entité de Doctrine qui sert à construire les vues
    protected $formName = 'InformationReferencesType';
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
        $crud->setTitle('Références');
        $crud->setConnection('default');
        $crud->setEntityName('Information');
        $crud->setFormName('InformationReferencesType');
        $crud->setJoinSeparator('<br>');
        $crud->getIndexFieldAdder()
            ->add('nom')
                ->addLabel('Nom')
            ->add('poste')
                ->addLabel('poste');

        parent::initialize();
    }

    /**
     * {@inheritdoc}
     */
    protected function hydrateEntity($entity, bool $new, bool $submitted)
    {
        if (!$new) {
            if (!$submitted) {
                // References
                $this->collections[0] = new ArrayCollection();
                foreach ($entity->getReferences() as $reference) {
                    $this->collections[0]->add($reference);
                }
            } else {

                // References
                foreach ($this->collections[0] as $reference) {
                    if (false === $entity->getReferences()->contains($reference)) {
                        $this->getDoctrine()->getManager('default')->remove($reference);
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
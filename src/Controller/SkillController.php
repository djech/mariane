<?php

namespace App\Controller;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Created by PhpStorm.
 * User: jerome
 * Date: 17/10/18
 * Time: 10:54
 */

class SkillController extends CrudController
{

    protected $title = 'Compétences'; // Titre affiché dans les vues
    protected $entityName = 'Information'; // L'entité de Doctrine qui sert à construire les vues
    protected $formName = 'InformationSkillsType';
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
        $crud->setTitle('Compétences');
        $crud->setConnection('default');
        $crud->setEntityName('Information');
        $crud->setFormName('InformationSkillsType');
        $crud->setJoinSeparator('<br>');
        $crud->getIndexFieldAdder()
            ->add('skills');

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
                // Skills
                $this->collections[0] = new ArrayCollection();
                foreach ($entity->getSkills() as $skill) {
                    $this->collections[0]->add($skill);
                }
            } else {

                // Skills
                foreach ($this->collections[0] as $skill) {
                    if (false === $entity->getSkills()->contains($skill)) {
                        $this->getDoctrine()->getManager('default')->remove($skill);
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
<?php
// src/AccountBundle/Admin/UserAdmin.php
declare(strict_types=1);

namespace AccountBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class UserAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('id')
                   ->add('username')
                   ->add('password')
                   ->add('email')
                   ->add('roles')
                   ->add('enabled')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('username')
                       ->add('email')
                       ->add('enabled')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id', null, array('row_align' => 'center'))
                   ->addIdentifier('username')
                   ->add('email')
                   ->add('last_login', 'date')
                   ->add('enabled')
        ;
    }
}

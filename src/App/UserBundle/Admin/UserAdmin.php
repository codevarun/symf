<?php
namespace App\UserBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use FOS\UserBundle\Model\UserManagerInterface;

class UserAdmin extends Admin
{
    protected $formOptions = array(
        'validation_groups' => 'Profile'
    );

    public function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('email')
            ->add('username')
            ->add('createdAt')
            ->add('enabled')
        ;
    }

    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('email', null, array('required' => true))
            ->add('username')
            ->add('plainPassword', 'password', array('required' => false))
            ->add('enabled', null, array('required' => false))
        ;
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('username')
            ->addIdentifier('email')
        ;
    }

    public function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('email')
            ->add('enabled')
        ;
    }
}

<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class JobType extends AbstractType {
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
			->add('location', 'text')
			->add('position', 'text')
			->add('company', 'text')
			->add('description', 'textarea')
			->add('ok', 'submit', array('attr' => array('class' => 'btn')));
	}
	
	public function getName() {
		return 'job';
	}
}
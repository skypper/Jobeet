<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Job;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Form\Type\JobType;

class JobController extends Controller {
	
	/**
	 * @Route("/new", name="newJob")
	 */
	public function newAction(Request $request) {
		$job = new Job();
		
		$form = $this->createForm(new JobType(), $job);
		
		$form->handleRequest($request);
		
		if ($form->isValid()) {
			$em = $this->getDoctrine()->getEntityManager();
			$em->persist($job);
			$em->flush();
			
			$request->getSession()->getFlashBag()->add(
					'notice',
					'Your job has successfully been created. <a href="'. 
							$this->generateUrl('showJob', array('id' => $job->getId())) .'">See details</a>.'
				);
			return $this->redirect($this->generateUrl('successJob'));
		}
		
		return $this->render('default/createJob.html.twig', array('form' => $form->createView()));
	}
	
	/**
	 * @Route("/edit/{id}", name="editJob")
	 */
	public function editAction(Request $request, $id) {
		$em = $this->getDoctrine()->getEntityManager();
		$job = $em->getRepository('AppBundle:Job')
			->find($id);
		
		if (!$job) {
			throw $this->createNotFoundException('No job found for id '.$id);
		}
		
		$form = $this->createForm(new JobType(), $job);
		
		$form->handleRequest($request);
		
		if ($form->isValid()) {
			$em = $this->getDoctrine()->getEntityManager();
			$em->flush();
			
			$request->getSession()->getFlashBag()->add(
					'notice',
					'Your job has successfully been edited. <a href="'. 
							$this->generateUrl('showJob', array('id' => $job->getId())) .'">See details</a>.'
				);
			
			return $this->redirect($this->generateUrl('successJob'));
		}
		
		return $this->render('default/editJob.html.twig', array('form' => $form->createView()));
	}
	
	
	/**
	 * @Route("/show/{id}", name="showJob")
	 */
	public function showAction($id) {
		$em = $this->getDoctrine()->getEntityManager();
		$job = $em->getRepository('AppBundle:Job')
			->find($id);
		
		if (!$job) {
			throw $this->createNotFoundException('No job found for id '.$id);
		}
		
		return $this->render('default/showJob.html.twig', array('job' => $job));
	}
	
	/**
	 * @Route("/remove/{id}", name="removeJob")
	 */
	public function removeAction($id) {
		$em = $this->getDoctrine()
			->getEntityManager();
		
		$job = $em->getRepository('AppBundle:Job')
			->find($id);
		
		if (!$job) {
			throw $this->createNotFoundException('No job found for id '.$id);
		}
		$em->remove($job);
		$em->flush();
		return $this->redirect($this->generateUrl('homepage'));
	}
	
	/**
	 * @Route("/success", name="successJob")
	 */
	public function successAction(Request $request) {
		if ($request->getSession()->getFlashBag()->has('notice'))
			return $this->render('default/jobSuccess.html.twig');
		else
			return $this->redirect($this->generateUrl('homepage'));
	}
}
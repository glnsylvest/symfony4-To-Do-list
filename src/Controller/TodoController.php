<?php 
	namespace App\Controller;
	use App\Entity\Task;

	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Routing\Annotation\Route;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;//post-get
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	use Symfony\Component\Form\Extension\Core\Type\TextType;
	use Symfony\Component\Form\Extension\Core\Type\TextareaType;
	use Symfony\Component\Form\Extension\Core\Type\SubmitType;  

	class TodoController extends Controller{
		/**
		* @Route("/", name="task_list")
		* @Route({"GET","POST"})
		*/
		public function index(){
			$todo=$this->getDoctrine()->getRepository(Task::class)->findAll(); 
			return $this->render('todolist/index.html.twig', array('todo' => $todo));
		}	

		/**
		* @Route("/task/new", name="new_task")
		* Method(("GET", "POST"))
		*/
		public function new(Request $request){
			$task= new Task();

			$form= $this->createFormBuilder($task)
			->add('title', TextType::class, array('attr' => array('class' => 'form-control')))
			->add('body', TextareaType::class, array('required' => false, 'attr' => array('class' => 'form-control')))
			->add('save', SubmitType::class, array('label'=> 'Create', 'attr' => array('class' => 'btn btn-primary mt-3')))
			->getForm();

			$form->handleRequest($request);

			if($form->isSubmitted() && $form->isValid()){
				$task = $form->getData();

				$entityManager = $this->getDoctrine()->getManager();
				$entityManager->persist($task);
				$entityManager->flush();

				return $this->redirectToRoute('task_list');
			}

			    return $this->render('todolist/new.html.twig', array(
				'form' => $form->createView()
			));
		}

		/**
		* @Route("/task/edit/{id}", name="edit_task")
		* Method(("GET", "POST"))
		*/
		public function edit(Request $request, $id){
			$task= new Task();
			$task = $this->getDoctrine()->getRepository(Task::class)->find($id);

			$form= $this->createFormBuilder($task)
			->add('title', TextType::class, array('attr' => array('class' => 'form-control')))
			->add('body', TextareaType::class, array('required' => false, 'attr' => array('class' => 'form-control')))
			->add('save', SubmitType::class, array('label'=> 'Update', 'attr' => array('class' => 'btn btn-primary mt-3')))
			->getForm();

			$form->handleRequest($request);

			if($form->isSubmitted() && $form->isValid()){
				
				$entityManager = $this->getDoctrine()->getManager();
				$entityManager->flush();

				return $this->redirectToRoute('task_list');
			}

			    return $this->render('todolist/edit.html.twig', array(
				'form' => $form->createView()
			));
		}

		/**
		* @Route("/task/{id}", name="task_show")
		*/   
		public function show($id){
			$task = $this->getDoctrine()->getRepository(Task::class)->find($id);

			return $this->render('todolist/show.html.twig', array('task' => $task));
		}

		/**
		* @Route("/task/delete/{id}")
		* @Method({"DELETE"})
		*/
		public function delete(Request $request, $id){
			$task = $this->getDoctrine()->getRepository(Task::class)->find($id); 
			
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->remove($task);
			$entityManager->flush();

			$response = new Response();
			$response->send();
		}

		/**
		* @Route("/task/status/{id}")
		* @Method({"GET", "POST"})
		*/
		public function taskStatus(Request $request, $id){
			$task= new Task();
			$task = $this->getDoctrine()->getRepository(Task::class)->find($id);

			$task->setTask_status(1);
		
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->flush();

			return $this->redirectToRoute('task_list');
			
		}

		

//		/**
//		* @Route({"/todolist/save"})
//		*/		
//		public function save(){
//			$entityManager = $this->getDoctrine()->getManager();
//
//			$task = new Task();
//			$task->setTitle('Task 1');
//			$task->setBody('Dette er body fra task 1');
//
//			$entityManager->persist($task);
//
//			$entityManager->flush();
//
//			return new Response('gemt som en task med id-nummer:'.$task->getId() );
//		}
	}	
?> 
<?php 
	namespace App\Controller;

	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;//post-get

	class TodoController{
		/*
			@Route("/")
		*/
		public function index(){
			return new Response('<html><body>Hej med dig!!</body></html>');
		}
	}	
?> 
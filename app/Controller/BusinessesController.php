<?php 
	class BusinessesController extends AppController
	{
		var $name ='Businesses';
		var $uses = array('Businesses');   	
		
		function index($id = null,$title = null){
		
			if (isset($id))
			{
			  $this->set('Business', $this->Businesses->findById($id));			 
			  $this->render('Business');			  
			}
			else
			{
			  $this->set('Businesses', $this->Businesses->find('all'));		  
			}
		}
		function ShowDetails($id = null,$title = null){
			 $this->set('Business', $this->Businesses->findById($id));
			 $this->render('Business');
		}
		
		public function create_pdf(){

			$business = $this->Businesses->find('all');
			
			
			$this->set(compact('business'));

			$this->layout = '/pdf/default';

			$this->render('/Pdf/my_pdf_view');

		}
		
		public function create_pdftk(){

			$business = $this->Businesses->find('all');
			
			
			$this->set(compact('business'));

			$this->layout = '/pdf/default';

			$this->render('/Pdf/my_pdftk_view');

		}
		
		
		
	}
?>

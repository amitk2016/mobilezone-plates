<?php

class RegisterController  {

	// Properties 
	private $emailMessage;

	

	// Constructor 

	public function __construct(){

		//if the user has submitted the form 
		if ( isset($_POST['new-account']) ) {
			
			$this->validateRegistrationForm();

		}

		// // Prepare the title 
		// 	$this->title = 'Register Page';
		// // prepare the meta description 
		// 	$this->metaDesc = 'Register here to be a member';
		//
		// Get the latest products 
	}

	//Methods 
	public function registerAccount(){

		// VAlidate the user's data 


		// Check the database to see if Email is already in use 



		// CHeck the strength of the password 



		// Register the account or show error messages 



		// If sucessful, log user in and redirect to the home page for shopping 




	}

	public function buildHTML(){


		$plates = new League\Plates\Engine('app/templates');

		//Prepare a container for data
		$data = [];

		// If there is an Email Error

		if ($this->emailMessage != '') {
			
			$data[
			'emailMessage' => $this->emailMessage  
			];
		}

		echo $plates->render('register', $data);


		// include 'app/templates/header.php';
		// include 'app/templates/register.php';
		// include 'app/templates/footer.php';
	}


	private function validateRegistrationForm(){

		// Make sure the email has been provided 
		if ( $_POST['email'] == '') {
			
			// Email is invalid
			$this->emailMessage = 'Imvalid Email';


		}


	}




}
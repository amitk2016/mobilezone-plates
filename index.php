
<?php

//require all the thord party stuff that we gonna use 
require 'vendor/autoload.php';


// create instance of plates libraary

$plates = new League\Plates\Engine('app/templates');


// if user has requested a page 
if ( isset($_GET['page']) ) {

	$page = $_GET['page'];
}else {
	// load the homepage 
	$page = 'home';

}
// echo $_GET['page'];

switch ($page) {

	//Home page
	case 'home':
		require 'app/controllers/HomeController.php';
		$controller = new HomeController();
		break;

	//login page
	case 'login':
		echo $plates->render('login');
		break;

	//register page
	case 'register':
	
		require 'app/controllers/RegisterController.php';
		$controller = new RegisterController();

		break;

	//cart page
	case 'cart':
		echo $plates->render('cart');
		break;

	//cart page
	case 'product':
		echo $plates->render('product');
		break;

	//contact page
	case 'contact':
		echo $plates->render('contact');
		break;
	
	default:
		echo $plates->render('error');
	break;
}

	$controller->buildHTML();

















// // Require the PageController 
// require 'app/controllers/PageController.php';






// // echo $_GET['page'];

// // What page has user requested 

// Switch( $requestedPage ){

// 	case 'home':
// 		//Load the home page 
// 		require 'app/controllers/HomeController.php';
// 		$controller = new HomeController();
// 	break;

// 	case 'product':
// 		//Load the product page 
// 		require 'app/controllers/ProductsController.php';
// 		$controller = new ProductsController();
// 	break;

// 	case 'About us':
// 		// Load the About us page 
		
// 	break;

// 	case 'login':
// 		//load the login page 
// 		require 'app/controllers/LoginController.php';
// 		$controller = new LoginController();
// 	break;


// 	case 'register':
// 		// load the register page 
// 		require 'app/controllers/RegisterController.php';
// 		$controller = new RegisterController();
// 	break; 

// 	case 'contact':
// 		// load the contact page 
// 		require 'app/controllers/ContactController.php';
// 		$controller = new ContactController();
// 	break; 

// 	default:

// 	echo 'Error 404! Page not found';

// 	break;
// }

// 	$controller->buildHTML();




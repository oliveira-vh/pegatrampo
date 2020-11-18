<?php
	//redirecionar para pagina
		function redirect($page = FALSE, $message = NULL, $message_type = NULL){
		if (is_string ($page)) {
			$location = $page;
		} else {
			$location = $_SERVER ['SCRIPT_NAME'];
		}

		//checar por messagem
		if($message != NULL){
			//Set mensagem
			$_SESSION['message'] = $message;
		}
		//Checar por tipo
		if($message_type != NULL){
			//Setar tipo da mensagem
			$_SESSION['message_type'] = $message_type;
		}

		//redirecionar
		header ('Location: '.$location);
		exit;
}

//Mostrar mensagem
function displayMessage(){
	if(!empty($_SESSION['message'])) {
		
		//variavel mensagem
		$message = $_SESSION['message'];
			
		if(!empty($_SESSION['message_type'])) {
			$message_type = $_SESSION['message_type'];
			//output
			if ($message_type == 'error') {
				echo '<div class="alert alert-danger">' . $message . '</div>';
			} else {
				echo '<div class="alert alert-success">' . $message . '</div>';
			}
		}
		unset($_SESSION['message'] );
		unset($_SESSION['message_type'] );
	} else {
		echo '';
	}
}
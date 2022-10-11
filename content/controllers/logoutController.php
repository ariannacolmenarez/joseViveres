<?php
class logoutController extends Autoload{

		public function logout()
		{
			session_destroy();
			header("location:"._DIRECTORY_);
		}

	}
?>
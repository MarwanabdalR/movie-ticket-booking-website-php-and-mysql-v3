<?php
	class Controller {
		protected $header;
        protected $footer;
        protected $title;
        protected $user;
		
		public function __construct() {
			$this->header = VIEW . "layout/header.php";
            $this->footer = VIEW . "layout/footer.php";

            $this->title = "Home";
		}
		
		protected function get_header() {
            return $this->header;
        }

        protected function get_footer() {
            return $this->footer;
        }
		
		protected function load_model($model_name) {
			$path = "models/" . $model_name . ".php";
			if (file_exists($path)) {
				require_once($path);
				return new $model_name();
			} else {
				return null;
			}
		}

        public function is_admin_logged_in() {
            return isset($_SESSION["admin"]);
        }


        public function do_logout()
        {
            unset($_SESSION["admin"]);

            session_destroy();
        }

        public function goto_admin_login()
        {
            header("Location: " . URL . "admin/login");
        }

        public function get_logged_in_admin()
        {
            if ($this->is_admin_logged_in())
                return $this->load_model("AdminModel")->get_admin($_SESSION["admin"]);
            else
                return null;
        }
	}
?>
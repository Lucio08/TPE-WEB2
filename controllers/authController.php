<?php
require_once 'models/authModel.php';
require_once 'views/authView.php';

class  AuthController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new AuthModel();
        $this->view = new AuthView();
    }

    public function showFormLogin()
    {
        $this->view->showFormLogin();
    }

    public function generateHash(){
        $hash = password_hash('12345',PASSWORD_DEFAULT);
        echo $hash;
    }

    public function verifyUser()
    {
        //obtengo data del form
        if (!empty($_POST['userEmail']) && !empty($_POST['userPassword'])) {
            
            $email = $_POST['userEmail'];
            $password = $_POST['userPassword'];

            //obtengo el email del usuario
            $user = $this->model->getUserByEmail($email);
            //verifica que el usuario es verdadero y que las contraseñas exiten
            if ($user && password_verify($password, $user->contraseña)) {
               
                //se inicia sesion para este usuario
                session_start();
                $_SESSION['email'] = $user->email;
                header('Location: ' . BASE_URL . 'home'); 
            }
            else {
                $this->view->showFormLogin("El usuario o contraseña son inconrrectas.");
        } 

        }
    }

    function logOut(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL. "login");
    }
}

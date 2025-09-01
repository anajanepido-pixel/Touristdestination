<?php
// Model
include '../model/authModel.php'; // Adjust the path as needed

// Global variable
$page['page'] = 'Authenticate';
$page['subpage'] = isset($_GET['subpage']) ? $_GET['subpage'] : 'login';


if (isset($_GET['function'])) {
    new ActiveAuthenticate($page);
} else {
    new Authenticate($page);
}



// ===== CLASSES =====

class Authenticate
{

    private $page = '';
    private $subpage = '';

    function __construct($page)
    {
        $this->page = $page['page'];
        //$this->subpage = $subpage['subpage'];

        $this->{$page['subpage']}();
    }
    function login()
    {
        include '../views/login.php';
    }
}

class ActiveAuthenticate
{
    private $page = '';
    private $subpage = '';
    protected $authModel = '';

    function __construct($page)
    {
        $this->page       = $page['page'];
        $this->subpage    = $page['subpage'];
        $this->authModel  = new authModel();


        $this->{$_GET['function']}();
    }

    function login()
    {

        $login =  $this->authModel->getUsername($_POST['Username']);

        $pass = 0;
        foreach ($login as $lg) {
            if (password_verify($_POST['Password'], $lg['password'])) {

                session_start();

                $_SESSION['loggedIn_id'] = $login['username'];
                $_SESSION['user_type']   = $login['user_type'];
                header('Location: ../page/admin.php');
                exit;
            }
        }
        if ($pass == 0) {
            echo "<script>alert('Invalid Username or Password!');</script>";
        }




        include '../views/login.php';
    }
}

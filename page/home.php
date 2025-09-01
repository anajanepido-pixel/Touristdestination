<?php
include '../model/homeModel.php';

$page['page'] = 'Home';
$page['subpage'] = $_GET['subpage'] ?? 'home';

session_start();

// No login restriction for Home page
if (isset($_GET['function'])) {
    new ActiveHome($page);
} else {
    new Home($page);
}

class Home
{
    private $page;
    private $subpage;
    protected $homeModel;

    function __construct($page)
    {
        $this->page = $page['page'];
        $this->subpage = $page['subpage'];
        $this->homeModel = new homeModel();

        if (method_exists($this, $this->subpage)) {
            $this->{$this->subpage}();
        } else {
            $this->home();
        }
    }

    function home()
    {
        $carousel = $this->homeModel->homeCarousel();
        $hero     = $this->homeModel->homeHero();
        include '../views/touristdestination.php';
    }
}

class ActiveHome
{
    private $page;
    private $subpage;

    function __construct($page)
    {
        $this->page = $page['page'];
        $this->subpage = $page['subpage'];
    }
}

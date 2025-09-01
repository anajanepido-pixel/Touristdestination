<?php
//global variable
$page['page'] = 'Service';
$page['subpage'] = $_GET['subpage'] ?? 'service';

session_start();

// Service page should be public (no login restriction)
if (isset($_GET['function'])) {
    new ActiveService($page);
} else {
    new Service($page);
}

// Default class
class Service
{
    private $page = '';
    private $subpage = '';
    protected $contactModel = '';

    function __construct($page)
    {
        $this->page = $page['page'];
        $this->subpage = $page['subpage'];
        //$this->servicesModel = new servicesModel(); //instance/object

        // Check if method exists
        if (method_exists($this, $this->subpage)) {
            $this->{$this->subpage}();
        } else {
            $this->service(); // fallback default
        }
    }

    function service()
    {
        include '../views/SERVICES.php';
    }

    function contact()
    {
        include '../views/SERVICES.php'; // or another view if contact page is different
    }
}

class ActiveService
{
    private $page = '';
    private $subpage = '';

    function __construct($page)
    {
        $this->page = $page['page'];
        $this->subpage = $page['subpage'];

        // Placeholder: dito mo ilalagay yung mga action tulad ng addService, updateService, deleteService
        if (method_exists($this, $this->subpage)) {
            $this->{$this->subpage}();
        }
    }
}

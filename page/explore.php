<?php

//model
//include '../model/contactModel.php';

//global variable
$page['page'] = 'Explore';
$page['subpage'] = isset($_GET['subpage']) ? $_GET['subpage'] : 'explore';

session_start();

if (!isset($_SESSION['loggedIn_id'])) {

    if (isset($_GET['function'])) {
        new ActiveExplore($page);
    } else {
        new Explore($page);
    }
} else {
    header('location: ../page/admin.php');
}


//the default class
class explore
{
    //encapsulation
    private $page = '';
    private $subpage = '';
    protected $servicesModel = '';

    //constructor
    function __construct($page)
    {
        $this->page = $page['page']; //assigned the property value
        $this->subpage = $page['subpage']; //assigned the property value

        //$this->servicesModel = new servicesModel(); //instance/object

        //run the method/behaviour
        $this->{$page['subpage']}();
    }

    function explore()
    {

        include '../views/Explore.php';
    }
}

class ActiveExplore
{

    private $page = '';
    private $subpage = '';
    protected $contactModel = '';

    //constructor
    function __construct($page)
    {
        $this->page = $page['page']; //assigned the property value
        $this->subpage = $page['subpage']; //assigned the property value

        //$this->contactModel = new contactModel(); //instance/object

        //run the method/behaviour
        $this->{$_GET['function']}();
    }
}

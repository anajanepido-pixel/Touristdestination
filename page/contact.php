<?php

//model
include '../model/contactModel.php';

//global variable
$page['page'] = 'Contact';
$page['subpage'] = isset($_GET['subpage']) ? $_GET['subpage'] : 'contact';



if (isset($_GET['function'])) {
    new ActiveContact($page);
} else {
    new Contact($page);
}



//the default class
class Contact
{
    //encapsulation
    private $page = '';
    private $subpage = '';
    protected $contactModel = '';

    //constructor
    function __construct($page)
    {
        $this->page = $page['page']; //assigned the property value
        $this->subpage = $page['subpage']; //assigned the property value

        $this->contactModel = new contactModel(); //instance/object

        //run the method/behaviour
        $this->{$page['subpage']}();
    }

    function contact()
    {

        include '../page/contact.php';
    }
}

class ActiveContact
{

    private $page = '';
    private $subpage = '';
    protected $contactModel = '';

    //constructor
    function __construct($page)
    {
        $this->page = $page['page']; //assigned the property value
        $this->subpage = $page['subpage']; //assigned the property value

        $this->contactModel = new contactModel(); //instance/object

        //run the method/behaviour
        $this->{$_GET['function']}();
    }

    function sendSms()
    {
        $sendSms = $this->contactModel->sendSms($_POST);

        header('location: ../views/contact.php');
    }
}

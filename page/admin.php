<?php

//model 
include '../model/homeModel.php';
include '../model/adminModel.php';

//global variable
$page['page'] = 'Admin';
$page['subpage'] = isset($_GET['subpage']) ? $_GET['subpage'] : 'dashboard';


// Check for an action
if (isset($_GET['function'])) {
    new ActiveAdmin($page);
} else {
    new Admin($page);
}


#--------------------------------------------------------------#
#--- CLASSES
#--------------------------------------------------------------#
//the default class
class Admin
{
    //encapsulation
    private $page = '';
    private $subpage = '';
    protected $adminModel = '';
    protected $homeModel = '';

    //constructor
    function __construct($page)
    {
        $this->page = $page['page']; //assigned the property value
        $this->subpage = $page['subpage']; //assigned the property value

        $this->adminModel = new adminModel(); //instance/object
        $this->homeModel = new homeModel(); //instance/object

        //run the method/behaviour
        $this->{$page['subpage']}();
    }

    function dashboard()
    {

        //get all the message
        $notSeenMsg = $this->adminModel->getNotSeenMsg();
        $seenMsg = $this->adminModel->getSeenMsg();

        include '../views/dashboard.php'; //get the views
    }

    function inquiry()
    {

        //get all the message
        $notSeenMsg = $this->adminModel->getNotSeenMsg();
        $seenMsg = $this->adminModel->getSeenMsg();

        include '../views/inquiry.php'; //get the views
    }

    function homePage()
    {

        //get all the message
        $get_cft_query = $this->adminModel->get_cft_query();
        $get_hft_query = $this->adminModel->get_hft_query();

        include '../views/home.php'; //get the views
    }
}


//if there is an action
class ActiveAdmin
{
    //encapsulation
    private $page = '';
    private $subpage = '';
    protected $adminModel = '';
    protected $homeModel = '';

    //constructor
    function __construct($page)
    {
        $this->page = $page['page']; //assigned the property value
        $this->subpage = $page['subpage']; //assigned the property value

        $this->adminModel = new adminModel(); //instance/object
        $this->homeModel = new homeModel(); //instance/object

        //run the method/behaviour
        $this->{$_GET['function']}();
    }

    function viewmsg()
    {
        // get all the messages
        $notSeenMsg = $this->adminModel->getNotSeenMsg();
        $seenMsg = $this->adminModel->getSeenMsg();

        // check if msg_id is provided
        if (isset($_GET['msg_id'])) {
            $msg_id = (int) $_GET['msg_id']; // cast to int for security
            $getMsg = $this->adminModel->viewmsg($msg_id);
        } else {
            $getMsg = null; // or handle error gracefully
        }

        include '../views/inquiry.php';
    }

    function deletemsg()
    {
        //get all the message
        $deleteId = isset($_GET['delete_id']) ? (int) $_GET['delete_id'] : 0;
        if ($deleteId > 0) {
            $this->adminModel->deletemsg($deleteId);
        }


        include '../views/inquiry.php';
        echo '<script>alert("Message has been deleted!");</script>';
    }

    function heroftBtn()
    {
        //validate heroftBtn
        if (isset($_POST['heroftBtn'])) {
            $title = $_POST['title'];
            $desc = $_POST['desc'];
            $img = $_POST['img'];
            $id = $_POST['id'];

            $imgsql = "";
            $imglink = 0;

            if (!empty($img)) {
                $imglink = 1;
                $imgsql = ", hft_img = '$img'";
            }

            $heroftBtn = $this->adminModel->heroftBtn($_POST, $imgsql);
            header('location: ../page/admin.php?subpage=homePage');
            exit;
        }
    }

    function updateDestination()
    {
        //validate heroftBtn
        if (isset($_POST['updateDestination'])) {
            // Get values and set variables
            $id = $_POST['id'];
            $name = $_POST['name'];
            $desc = $_POST['desc'];
            $changeImageLink = $_POST['changeImageLink'];
            $moreLink = $_POST['moreLink'];

            // Flags
            $imgLinkLoc = 0;
            $imgLinkOnl = 0;
            $imgLink = 0;
            $moreLinkBtn = 0;

            $set_img = "";
            $set_more = "";

            // Handle uploaded image (local file)
            $changeImage = $_FILES['changeImage']['name'];
            if (!empty($changeImage)) {
                $imgLinkLoc = 1;

                // Save to images folder
                $targetDir = "../images/";
                $targetFile = $targetDir . basename($changeImage);

                // Move uploaded file to ../images/
                if (move_uploaded_file($_FILES["changeImage"]["tmp_name"], $targetFile)) {
                    $set_img = ", cft_img = '$changeImage', cft_imgLink = '0'";
                } else {
                    echo "<script>alert('Failed to upload local image.');</script>";
                    echo "<script>window.history.back();</script>";
                    exit();
                }
            }


            // Handle online image link
            if (!empty($changeImageLink)) {
                $term = substr($changeImageLink, 0, 8);
                if ($term == "https://") {
                    $imgLinkOnl = 1;
                    $imgLink = 1;
                    $set_img = ", cft_img = '$changeImageLink', cft_imgLink = '1'";
                } else {
                    echo "<script>alert('Invalid online image link!\\r\\nLink must start with https://');</script>";
                    echo "<script>window.history.back();</script>";
                    exit();
                }
            }

            // Prevent both uploads
            if ($imgLinkLoc == 1 && $imgLinkOnl == 1) {
                echo "<script>alert('Multiple image sources detected. Use only one: Upload or Link.');</script>";
                echo "<script>window.history.back();</script>";
                exit();
            }

            // Handle "More" link
            if (!empty($moreLink)) {
                $moreLinkBtn = 1;
                $set_more = ", cft_more = '$moreLink', cft_moreLink = '1'";
            }

            $updateDestination = $this->adminModel->updateDestination($name, $desc, $set_img, $set_more, $id);
            header('location: ../page/admin.php?subpage=homePage');
            exit;
        }
    }
}

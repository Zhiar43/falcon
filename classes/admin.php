<?php
//include database

class Admin{
    //admin info
    public $userName;
    public $password;
    public $email;
    public $firstName;
    public $lastName;
    public $domainName;
    //general info
    public $localURL;
    public $hideHomePageMenueBar = false;
    public $returnUrlOnLogout;
    public $dispachPhoneNumber;
    public $dispachPhoenNumberGuards;
    public $timeZone;
    public $contactCompanyName;
    public $contactAddress;
    public $city;
    public $states_id;
    public $contactEmail;
    public $contactPhoneNumber;
    public $handheldPhotoTimestampText;
    public $renderHomePageAsHTMLMarkup;
    public $IncludeArrivals_DeparturesInDAR;
    public $HomePageMessage;
    public $MobileDeviceLoginMessage;
    public $hideDropDownCitySelector;
    public $propertyFindExampleText;
    public $externalUrlLinks;
    //notification info
    public $ResendNotificationAlertForUnacknowledgedIssuesPriority1;
    public $ResendNotificationAlertForUnacknowledgedIssuesPriority2;
    public $ResendNotificationAlertForUnacknowledgedIssuesPriority3;
    //logos info
    public $mainPageLogo;
    public $reportHeaderLogo;
    //email info
    public $fromEmailAddressNewOrder;
    public $fromEmailAddressNewIssue;
    public $fromEmailAddressAppeals;
    public $SystemEmailNotification;

    public $devices = array();
    public $users = array();
    public $property = array();
    public $issueTypes = array();

    
    public function __construct() {}

    
    //create New admin instance, insert admin to the database and set current instance info
    public function createAdmin($userName, $password,$email,$firstName,$lastName,$domainName){
        
    }

    //create new admin account, get admin info from the database and setup current instance info
    public function getAdmin($userName, $password){}
    

}









?>
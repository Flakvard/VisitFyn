<?php

class events
{
    // table fields
    public $id;
    public $category;
    public $name;
    public $eventdescription;
    public $updatedAt;

    // message string
    public $id_msg;
    public $category_msg;
    public $name_msg;
    public $eventdescription_msg;
    public $updatedAt_msg;
    // constructor set default value
    function __construct()
    {
        $id=0;$category=$name=$eventdescription=$updatedAt="";
        $id_msg=$category_msg=$name_msg=$eventdescription_msg=$updatedAt_msg="";
    }
}

?>
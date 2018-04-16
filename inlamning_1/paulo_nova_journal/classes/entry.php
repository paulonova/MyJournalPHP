<?php 



class Entries{
    public $title;
    public $content;
    public $createdAt;
    public $userID;

    function __construct($title, $content, $createdAt, $userID){
        $this->title = $title;
        $this->content = $content;
        $this->createdAt = $createdAt;
        $this->userID = $userID;

    }

    public function printEntries(){
        echo "Title: " . $this->title;
        echo "Content: " . $this->content;
        echo "CreatedAt: " . $this->createdAt;
        echo "UserID: " . $this->userID;
    }

    

}



?>
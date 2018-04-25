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
        echo "Title: " . $this->title . "<br/>";
        echo "Content: " . $this->content . "<br/>";
        echo "CreatedAt: " . $this->createdAt . "<br/>";
        echo "UserID: " . $this->userID . "<br/><br/>";
    }

    function createCardElement(){
        return "
            <div class='card card-primary my_card'>
                <div class='card-header'>
                    <h3 class='card-title'>{$this->title}                    
                    <a class='card_btn' href='../partials/del_entry.php'>Del</a>
                    <a class='card_btn' href='../partials/edit_entry.php'>Edit</a>
                    </h3>
                </div>
                
                <div class='card-block'>
                    <p class='content'>{$this->content}</p>
                    <p class='created_at'>{$this->createdAt}</p>
                </div>                
            </div>
        ";
    }


    function deleteJournalEntryTitle($title, $userID){
        $statement = $pdo->prepare("DELETE FROM entries WHERE entries.title = :title 
                                    AND entries.userID = :userID");
        $statement->execute([
            "title" => $title,
            "userID" => $userID
        ]);

    function editJournalEntry(){
        $statement = $pdo->prepare("UPDATE entries WHERE entries.title = :title 
                                    AND entries.userID = :userID");
    }

        

    }

    

}



?>
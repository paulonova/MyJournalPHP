<?php 



class Entries{
    public $title;
    public $content;
    public $createdAt;
    public $userID;

    function __construct($entryID, $title, $content, $createdAt, $userID){
        $this->entryID = $entryID;
        $this->title = $title;
        $this->content = $content;
        $this->createdAt = $createdAt;
        $this->userID = $userID;

    }

    public function printEntries(){
        echo "Entry ID: " . $this->entryID . "<br/>";
        echo "Title: " . $this->title . "<br/>";
        echo "Content: " . $this->content . "<br/>";
        echo "CreatedAt: " . $this->createdAt . "<br/>";
        echo "UserID: " . $this->userID . "<br/><br/>";
    }

    function createCardElement(){
         ?>
            <div class='card card-primary my_card'>
                <div class='card-header'>
                    <h3 class='card-title'><?php echo $this->title ?>                    
                    <a class='card_btn' href='../partials/edit_entry.php?edit=<?php echo $this->entryID?>'>Edit</a>
                    <a class='card_btn' href='../partials/del_entry.php'>Del</a>
                    </h3>
                </div>
                
                <div class='card-block'>
                    <p class='content'><?php echo $this->content ?></p>
                    <p class='created_at'><?php echo $this->createdAt ?></p>
                </div>                
            </div> 
            <?php;
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

} ?>
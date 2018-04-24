<?php   require_once "partials/journal_head.php"; 
        // require_once 'session_start.php';
        require_once "classes/entry.php";
        require_once 'partials/database.php';

?>

<div class="inlamning_title jumbotron">
    <h1>My Journal</h1>    
    <h3>UserID: <?php echo $_SESSION['user_id'];?></h3>    
</div>


<main class="container">
    
    <section class="jornal_form"> <!-- Section Journal Entries -->
        <form action='./partials/get_all_entries.php' method='POST'>

            <label for="journal_title" class="sr-only">Username</label> <!-- Title -->
            <input type="text" name ="journal_title" id="journal_title" class="form-control" 
                    placeholder="Journal Title.." required autofocus> <!-- Title -->
            
            <label for="journal_area" class="sr-only">Journal:</label>  <!-- Journal annotation -->
            <textarea class="form-control" name="journal_area" id="journal_area" 
                    placeholder="Write you journal here.." rows="4" required autofocus></textarea>  <!-- Journal annotation -->

            <label for="journal_date" class="sr-only">Date:</label>  <!-- Date -->
            <input type="date" class="form-control" name="journal_date" 
                    placeholder="yyyy/mm/dd" required autofocus/>  <!-- Date -->

            <div class="signin_btn"> <!-- Save/Logout button -->
                <button id="logout" class="btn btn-warning" type="button">
                    <a href='logout.php'>Logout here</a>
                </button>                 
                <input class="btn btn-lg btn-primary" value="Save" type="submit">
            </div> <!-- Save/Logout button -->

        </form>

    </section><!-- Section Journal Entries -->
    <br/>
    <section> <!-- Section Journals from database -->
        <article class="saved_journal" id="db_articles">
            <h1 class="saved_articles">Saved Articles</h1>
            <div class="journal_container">
                <?php
                require_once "classes/entry.php";
                require_once 'partials/database.php'; 

                $statement = $pdo->prepare("SELECT * FROM entries WHERE userID = :user_id 
                                            ORDER BY createdAt");
                $statement->execute([
                    ":user_id" => $_SESSION['user_id']
                ]);

                $entries = $statement->fetchAll();
                $journalsList = array();

                foreach ($entries as $entry) {
                    
                    

                    $journal = new Entries(
                                        $entry["title"], 
                                        $entry["content"], 
                                        $entry["createdAt"], 
                                        $entry["userID"]
                                        );
                        array_push($journalsList, $journal);
                        echo $journal-> createCardElement();                    
                }          
                
                ?>
            </div>
        </article>


    </section>
    

</main>



<?php require_once "partials/footer.php";  ?>
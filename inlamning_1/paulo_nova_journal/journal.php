<?php require_once "partials/journal_head.php";  ?>

<div class="inlamning_title jumbotron">
    <h1>My Journal</h1>    
</div>

<main class="container">
    
    <section class="jornal_form"> <!-- Section Journal Entries -->
        <form action='./partials/get_all_entries.php' method='POST'>
            <div class="form-group"><!-- Title -->
                <label for="journal_title">Title:</label>
                <input type="text" name="journal_title" class="form-control" id="journal_title" placeholder="Journal Title">
            </div><!-- Title -->
                
            <div class="form-group"> <!-- Journal annotation -->
                <label for="journal_area">Journal:</label>
                <textarea class="form-control" name="journal_area" id="journal_area" placeholder="Write you journal here.." rows="3"></textarea>
            </div><!-- Journal annotation -->

            <div class="form-group" id="datepicker"><!-- Date -->
                <label for="journal_date">Date:</label>
                <input type="date" class="form-control" name="journal_date" placeholder="yyyy/mm/dd" />
            </div> <!-- Date -->

            <div class="signin_btn"> <!-- Save/Logout button -->
                <button id="logout" class="btn btn-warning" type="button">
                    <a href='logout.php'>Logout here</a>
                </button>                 
                <input class="btn btn-lg btn-primary" value="Save" type="submit">
            </div> <!-- Save/Logout button -->

        </form>

    </section><!-- Section Journal Entries -->
    <br/>
    <hr>
    <section> <!-- Section Journals from database -->
        <article class="saved_journal" id="db_articles">
            <h1>Saved Articles</h1>
            <?php echo "Testando"?>
        </article>


    </section>
    

</main>



<?php require_once "partials/footer.php";  ?>
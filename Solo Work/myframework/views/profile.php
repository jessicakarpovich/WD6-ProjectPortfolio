<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */
?>

    <div class="container  d-flex flex-column align-items-center">
        
        <div class="col-md-8 col-xs-12">
            <img src="/assets/images/people-q-c-100-100-1.jpeg" class="img-thumbnail picture hidden-xs"><br>
            
            <form action="/profile/update" method="post" enctype="multipart/form-data">
                <label class="btn btn-secondary btn-file mt-2" style="width: 110px;">Browse
                <input name="img" type="file" style="display: none;">
                </label>
                <input type="submit" value="Update" class="btn btn-primary">
            </form>
            
            <div class="header mt-5">
            <?
                $lines = file("assets/login.txt");

                // check that it exists, if so run a loop
                if ($lines) {
                    foreach ($lines as $line_num => $line) {

                        // if it matches the session variable
                        if ($_SESSION["line"] && $_SESSION["line"]==$line) {

                            // split line at '|'
                            $stringArray = explode("|", $line);
                            
                            // display the profile paragraph
                            // don't show the login info
                            echo "<p>$stringArray[2]</p>";
                            break;
                        }
                    }
                }
            ?>  
                <!--
                <h1>Jane Doe</h1>
                <h4>Web Developer</h4>
                <span>This is about me This is about me This is about me This is about me This is about me</span>-->
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap.js"></script>

</body>
<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */
?>
    
    <section class="content">
        <!--<h1>This is the API page</h1>-->
        
    <?
        
        // show the name, date published, description and url for the returned blog
        echo "<h1 class='mt-5'>".$data['name']."</h1>";
        
        // split data into day and time, just show the day
        $date = explode("T", $data["published"]);
        echo "<h4>".$date[0]."</h4>";
        
        echo "<p>".$data["description"]."</p>";
        echo "<p><a href='".$data['url']."'>View Blog</a>";
        
        
    ?>
    </section>
    
    <!-- /.navbar -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap.js"></script>
</body>
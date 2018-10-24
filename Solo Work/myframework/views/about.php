<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */
?>
    
    <section class="content my-4">
        <h1>About</h1>
        
        <div class="my-2">
        <a href="/about/addForm">Add New</a>
        </div>
        
    <?
        
        foreach($data as $fruit) {
            
            echo $fruit["name"]."<a href='/about/edit/".$fruit["id"]."'>EDIT</a> <a href='/about/delete/".$fruit["id"]."'>Delete</a><br>";
        }
        
    ?>
        
    </section>
    
    <!-- /.navbar -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap.js"></script>
</body>
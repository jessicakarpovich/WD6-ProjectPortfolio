<?
/* Jessica Karpovich */
/* WD6 */
/* C201811 */
?>

<? include 'views/header.php' ?>
    <section class="container">
        <h1>Student Grades Report (Teacher's App)</h1>
        <h2>Input your student's name and final grade percentage (%):</h2>
        
        <form action="/index/addStudent" method="post">
            <input type="text" name="name" placeholder="Student Name"/>
            <input type="number" name="percentage" placeholder="89">
            <input class="btn btn-success" type="submit" />
        </form>
        
        <hr>
        
        <? if (count($data["grades"]) == 0) { 
                echo "<p>Enter data to see it here</p>"; 
            }
            else if (count($data["grades"]) > 0) {
                foreach ($data["grades"] as $grade) {
                    echo "
                    <div class='d-flex justify-content-around'>
                        <p><strong>Student ID:</strong> ". $grade["studentid"] ." </p>
                        <p><strong>Name:</strong> ". $grade["studentname"] ." </p>
                        <p><strong>Student Percent:</strong> ". $grade["studentpercent"] ." </p>
                        <p><strong>Letter Grade:</strong> ". $grade["studentlettergrade"] ." </p>
                        <a href='/index/edit/".$grade["studentid"]."'>EDIT</a>
                        <a href='/index/delete/".$grade["studentid"]."'>DELETE</a>
                    </div>
                    ";
                }
            }
            
        ?>
        
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
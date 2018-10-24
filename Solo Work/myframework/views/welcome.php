<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */
?>
    
    <section class="content">
        
        <!-- Carousel -->
        <div id="carouselIndicators" class="carousel slide mb-5" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="/assets/images/brooke-lark-200721-unsplash.jpg" alt="Appetizer dish">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/assets/images/cel-lisboa-60315-unsplash.jpg" alt="Main dish">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/assets/images/whitney-wright-356665-unsplash.jpg" alt="Pancakes">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
        <!-- Text content -->
        <h1>Tasty food is awesome!</h1>
        <p>Just looking at it makes people hungry.</p>
        
        
        <!-- Button trigger modal -->
        <button id="modalBtn" type="button" class="btn btn-primary  my-3" data-toggle="modal" data-target="#modalCenter">
          Click me if you like food!
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalLongTitle">Tasty Food</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Food is awesome! Yay!!</p>
                <p><button id="popover" type="button" class="btn btn-info" data-toogle="popover" title="Secret Shh!" data-content="Eating spicy food brings happiness.">Secret info</button></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Progress bar, fills up when modal is opened -->
        <div class="d-flex justify-content-center">
            <div class="progress my-5 w-50">
              <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </section>
    
    <!-- /.navbar -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/main.js"></script>

</body>
<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */
?>
    
    <section class="content  container  d-flex flex-column align-items-center">
        <h1 class="my-4">You are home!</h1>
        
        <!-- Carousel -->
        <div id="textCarouselControls" class="carousel slide w-50 mb-5">
          <div class="carousel-inner">
            <div class="carousel-item active  py-5  bg-info">
              <p>As you click...</p>
            </div>
            <div class="carousel-item  py-5  bg-info">
              <p>...through the slides,</p>
            </div>
            <div class="carousel-item  py-5  bg-info">
              <p>...the progress bar...</p>
            </div>
            <div class="carousel-item  py-5  bg-info">
              <p>...will fill up.</p>
            </div>
          </div>
          <a class="carousel-control-prev" href="#textCarouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next  js-next" href="#textCarouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    
        <!-- Progress Bar -->
        <div class="progress  w-50">
          <div class="progress-bar  bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <!-- Popover gives hint on how to trigger popover -->
        <button id="popover" class="btn btn-primary mt-5" data-toggle="popover" data-content="Is the progress bar full? If not, click next slide until it is. Then return." type="button">Popover trigger hint</button>
        
        <!-- Modal, opened when progress bar is filled up -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Congrats!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>You triggered the modal!</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div> 
    </section>
    
    <!-- /.navbar -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/main.js"></script>
</body>
<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */
?>
    <section class="container mt-5">
        
        <?
        
        // protected form
        
        function create_image($cap) {
            unlink("./assets/images/image1.png");
            
            global $image;
            $image = imagecreatetruecolor(200, 50) or die("Cannot initialize new GD image stream");
            $background_color = imagecolorallocate($image, 255, 255, 255);
            $text_color = imagecolorallocate($image, 0, 255, 255);
            $line_color = imagecolorallocate($image, 64, 64, 64);
            $pixel_color = imagecolorallocate($image, 0, 0, 255);
            
            imagefilledrectangle($image, 0, 0, 200, 50, $background_color);
            
            for ($i = 0; $i < 3; $i++) {
                imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);
            }
            
            for ($i = 0; $i < 1000; $i++) {
                imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
            }
            
            $text_color = imagecolorallocate($image, 0, 0, 0);
            imagestring($image, 22, 30, 22, $cap, $text_color);
            
            // testing
            $_SESSION["user"] = $cap;
            
            imagepng($image, "./assets/images/image1.png");
        }
        
        create_image($data["cap"]);
        
        echo "<img src='/assets/images/image1.png'>";
        
        ?>
        
        
        
        
        <!-- form start -->
        <form class="col col-md-6 mx-auto" action="/welcome/contactRecv" method="POST">
          <!-- input for captcha -->
          <div class="form-group">
              <label for="exampleInputEmail1">Enter Captcha</label>
              <input name="captcha" type="captcha" id="captcha" placeholder="">
          </div>
            
            
            <!-- full name input field -->
          <div class="form-group">
            <label for="inputName">Full Name</label>
            <input name="name" type="name" class="form-control" id="name" placeholder="Enter your full name" required>
            <div <?=@$data["name"]==false?'class="invalid-feedback"':''?>>
                <?=@$data["name"]==false?'Please enter a valid name':''?>
            </div>
          </div>
            
        <div class="row">
            <!-- Email -->
          <div class="form-group col-12 col-lg-6">
            <label for="inputEmail">Email address</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <div <?=@$data["email"]==false?'class="invalid-feedback"':''?>>
                <?=@$data["email"]==false?'Invalid email':''?>
            </div>
          </div>
            
            <!-- Password -->
          <div class="form-group col-12 col-lg-6">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
            <div <?=@$data["password"]==false?'class="invalid-feedback"':''?>>
                <?=@$data["password"]==false?'Select a different password':''?>
            </div>
          </div>
        </div>
            
            <!-- Year in college select -->
          <div class="form-group">
            <label for="formControlSelect">Select year in college</label>
            <select name="year" class="form-control" id="formControlSelect">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
            <div <?=@$data["year"]==false?'class="invalid-feedback"':''?>>
                <?=@$data["year"]==false?'Select a year':''?></div>
          </div>
            
            <!-- Comments text area -->
          <div class="form-group">
            <label for="textarea">Comments</label>
            <textarea name="comments" class="form-control" id="textarea" rows="3"></textarea>
            <div <?=@$data["comments"]==false?'class="invalid-feedback"':''?>>
                <?=@$data["comments"]==false?'If no comments, enter NA':''?></div>
          </div>
            
            <!-- Radio fields -->
          <div class="form-group">
              <label for="radio-group">Gender</label>
              <div id="radio-group">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                  </div>
              </div>
              <div <?=@$data["gender"]==false?'class="invalid-feedback"':''?>>
                <?=@$data["gender"]==false?'Please select a gender':''?>
              </div>
          </div>
            
            <!-- Checkbox -->
          <div class="form-group">
            <div class="form-check">
                <input name="check" type="checkbox" class="form-check-input" id="check">
                <label class="form-check-label" for="check">I agree to have my name sent along with my comments.</label>
            </div>
            <div <?=@$data["check"]==false?'class="invalid-feedback"':''?>>
                <?=@$data["check"]==false?'You must agree for us to be able to process your form':''?>
            </div>
          </div>
            
            <!-- Submit btn -->
          <button type="submit" class="btn btn-primary">Submit</button>
            
            
            <input type="button" class="btn" value="Ajax Submit" id="ajaxbutton">
            <!-- Form end -->
        </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/main.js"></script>

    <script>
        $("#ajaxbutton").click(function() {
            $.ajax({
                method: "POST",
                url: "/welcome/ajaxPars",
                data: {email: $("#email").val(), password: $("#password").val()},
                success: function(msg) {
                    if (msg=="welcome") {
                        alert("welcome");
                    } else {
                        alert(msg);
                    }
                }
            });
        });
    </script>

</body>
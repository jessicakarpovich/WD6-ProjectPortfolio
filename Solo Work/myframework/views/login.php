<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */
?>   
    <section class="container mt-5">
       <form class="col col-md-6 mx-auto" action="/welcome/ajaxPars" method="POST">
           <!-- Email -->
           <div class="form-group">
               <label for="inputEmail">Email address</label>
               <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
           </div>

           <!-- Password -->
           <div class="form-group">
               <label for="password">Password</label>
               <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
           </div>
           
           <input type="button" class="btn" value="Ajax Submit" id="ajaxbutton">
       </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap.js"></script>

    <script>
        $("#ajaxbutton").click(function() {
            $.ajax({
                method: "POST",
                url: "/welcome/ajaxPars",
                data: {email: $("#email").val(), password: $("#password").val()},
                success: function(msg) {
                    if (msg=="welcome") {
                        alert("Welcome back!");
                    } else if (msg=="bad login") {
                        alert("The password/username you entered does not match an existing user.");
                    }
                }
            });
        });
    </script>

</body>
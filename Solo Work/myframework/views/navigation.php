<?
/* Jessica Karpovich */
/* SSL */
/* C201807 */
?>

<nav class='navbar navbar-expand-lg navbar-dark'>
    <a class='navbar-brand' href='./welcome'>SSL</a>
    <!-- toggle collapsed menu -->
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <ul class='navbar-nav mr-auto'>
            <li <?=@$data["pagename"]=="welcome"?'class="active"':''?>>
                <a class='nav-link' href='/welcome'>Welcome</a></li>
            <li <?=@$data["pagename"]=="home"?'class="active"':''?>>
                <a class='nav-link' href='/home'>Home</a></li>
            <li <?=@$data["pagename"]=="api"?'class="active"':''?>>
                <a class='nav-link' href='/api'>API</a></li>
            <li <?=@$data["pagename"]=="about"?'class="active"':''?>>
                <a class='nav-link' href='/about'>About</a></li>
            <li <?=@$data["pagename"]=="contact"?'class="active"':''?>>
                <a class='nav-link' href='/welcome/contact'>Contact</a></li>
            <li <?=@$data["pagename"]=="login"?'class="active"':''?>>
                <a class='nav-link' href='/welcome/login'>Login</a></li>
        </ul>
        
        <span style="color:red;"><?=@$_REQUEST["msg"]?@$_REQUEST["msg"]:''; ?></span>
        <? if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1) {?>
        
        <form class="navbar-form navbar-right">
            <ul class='navbar-nav ml-auto'>
                <li <?=@$data["pagename"]=="profile"?'class="active"':''?>>
                    <a class='nav-link' href="/profile">Profile</a></li> |
                <li><a class='nav-link' href="/auth/logout">Logout</a></li>
            </ul>
        </form>
        
        <?} else {?>
        <!-- navbar-form navbar-right -->
        <form class="form-inline my-2 my-lg-0" role="search" method="post" action="/auth/login">
            <div class="form-group mr-sm-2">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group mr-sm-2">
                <input type="text" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Sign In</button>
        </form>
        <? } ?>
           
    </div>
</nav>
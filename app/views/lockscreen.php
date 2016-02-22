
<body class="gray-bg"  style=" background: url(<?php echo $SCHEME.'://'.$HOST.$BASE.'/ui/img/background.jpg';?>) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

<div class="lock-word animated fadeInDown">
    <!--<span class="first-word">LOCKED</span><span>SCREEN</span>-->
</div>
    <div class="middle-box text-center lockscreen animated fadeInDown">
        <div>
            <div class="m-b-md">
            <img alt="image" class="img-circle circle-border" style="width:80%;" src="<?php echo $SCHEME.'://'.$HOST.$BASE.'/ui/img/profile.jpg';?>">
            </div>
            <h3>John Smith</h3>
            <p>This site require Girudatsu API Key to start a session. Please enter your Girudatsu API Key to start a new session.</p>
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="******" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width">Login</button>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

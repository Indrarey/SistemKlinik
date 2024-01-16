<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/stylelogin.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
    <title>Login :: Sistem Klinik</title>
</head>
<body>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center">SISTEM KLINIK ONLINE</h1>
            <h2 class="text-center login-title">Login your Account</h2>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin">
                <input type="text" class="form-control" placeholder="Username" id="username" name="username"  autofocus>
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" >
                <button class="btn btn-lg btn-primary btn-block" id="submit" type="submit">
                    Sign in</button>
                <!-- <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label> -->
                <!-- <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span> -->
                        <br>
                    <p class="text-center text-muted">&copy; - 2023 Copyright All Reserved.</p>
                </form>
            </div>
            <!-- <a href="#" class="text-center new-account">Create an account </a> -->
        </div>
    </div>
</div>

<script>

$(document).ready(function(){
    var baseurl = 'http://localhost:8080/sistemklinik/';


    $("#submit").click(function(e){
        e.preventDefault();
        var username = $("#username").val()
        var password = $("#password").val()
    
        if(username == ''){
            alert('Username harus diisi')
            $("#username").focus()
            return
        }
        
        if(password == ''){
            alert('Password harus diisi')
            $("#password").focus()
            return
        }

        var model = new Object();
        model.username = username;
        model.password = password;
                

        $.ajax({
            url : baseurl + 'process/ceklogin.php',
            data: model,
            type: 'POST',
            dataType: "json",
            success:function(result){
                debugger;
                if(result == 'success'){
                    window.location.href = baseurl + 'index.php';
                }else{
                    alert(result);
                }
            },
            error: function (xhr, data) {
                        console.log(xhr.responseText);
                    }
        });

    });

});
</script>
</body>
</html>
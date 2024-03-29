<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>forgot</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/forgot.css')}}">
    
</head>

<body style="background-image: url(&quot;assets/img/forgot.jpg&quot;);width: 100%;height: 100vh;background-size: cover;background-repeat: no-repeat;background-position: center;">
    <div class="newsletter-subscribe" style="background-color: rgba(255,255,255,0);">
        <div class="container" style="padding-top: 8px;">
            <div class="intro">
                <h2 class="text-center">Insert Your Mail Address</h2>
            </div>
            <form class="form-inline" method="post">
                <div class="form-group"><input class="form-control" type="email" name="email" required="" placeholder="Your Email" maxlength="50" minlength="12" pattern="&quot;[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$&quot;"></div>
                <div class="form-group"><button class="btn btn-primary" type="submit">sent</button></div>
            </form>
        </div>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>
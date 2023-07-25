<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include("css/includeCss");
</head>

<body class="body">
    <main class="main">
        <section>
            <div class="form-container bg-light p-5 shadow-lg">
                
                <div class="text-center">
                    <h2 class="mb-2 p">Let's Get You Started.</h2>
                    <h6 class="mb-5">Create Your Account Here!</h6>
                </div>
            
                <form>
            
                    <div class=" errorContainer bg-danger text-light text-center p-2 mb-2 d-none"> </div>
                    <div class="form-group">
                        <label for="fname">First Name *</label>
                        <input id="fname" class="form-control" type="text" name="fname">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name *</label>
                        <input id="lname" class="form-control" type="text" name="lname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input id="email" class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input id="password" class="form-control" type="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirm Password *</label>
                        <input id="cpassword" class="form-control" type="password" name="cpassword">
                    </div>
                    <div class="text-center mb-3"> <button id="create" class="btn btn-primary" type="button">Create My Account</button></div> 
                    <div class="text-center">
                        <h6><small>Already have an account? <a href="{{ route("login.index") }}"> Login Here </a> </small></h6>
                    </div>
                </form>
            </div>
        </section>
    </main>

    @include("js/includeJs");
    <script src="{{ asset("js/user.js") }}"></script>
</body>

</html>

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

    <header>

    </header>
    <main class="main">
        <section>
            <div class="form-container bg-light p-5 shadow-lg">
                <div class="text-center">
                    <h2 class="mb-2 p">Welcome Back.</h2>
                    <h6 class="mb-5">Please login to your account here!</h6>
                </div>
                
                {{-- <form>
@csrf--}}                       
                                <div class=" errorContainer bg-danger text-light text-center p-2 mb-2 d-none"> </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input id="email" class="form-control" type="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password *</label>
                                    <input id="password" class="form-control" type="password" name="password">
                                </div>
                                <div class="text-center mb-4 mt-3">
                                    <button id="login" class="btn btn-primary " type="button">Login</button>
                                </div>
                              
                                <div class="text-center">
                                    <h6><small>Don't have an account? <a href="{{ route("register.index") }}"> Create Here </a> </small></h6>
                                </div>
                            {{-- </form> --}}
            </div>
        </section>
    </main>
    <footer>

    </footer>
    {{-- including js --}}
      @include("js/includeJs");
      <script src="{{ asset("js/user.js") }}"></script>

    </body>

</html>

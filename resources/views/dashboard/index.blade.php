<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include("css/includeCss")
</head>

<body>

    <header>
        <div class="container-fluid bg-dark text-white text-center p-3">
            <h3>Welcome, {{ session("fname") }} {{ session("lname") }}</h3>
        </div>
    </header>
    <main>
        <section>
            <div class="logout text-center">
                <form action="{{ route('dashboard.logout') }}" method="POST">
                    @csrf
                    <h3>{{ session("email") }}</h3>
                    <div><button class="btn submit btn-danger ">Logout</button>
                     <button type="reset" class="btn btn-primary ">Change Password</button></div>
                </form>
               
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

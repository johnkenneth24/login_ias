<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link href="{{ asset('css/db.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid" style="height: 99vh;">
        <div class="row">
            <div class="container p-0 m-0">
                <div class="navibar d-flex justify-content-between">
                    <div class=" d-flex align-items-center dashboard">
                        <h3 class="ps-4 m-0">DASHBOARD</h3>
                    </div>

                    <div class="d-flex justice-content-end">
                        <div class="d-flex justify-content-end align-items-center dashboard pe-5">
                            <p class="m-0 pe-4" style="text-transform:uppercase;">{{ Auth::user()->name }}</p>
                            <a class="btn btn-success" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container db-content">
                <p class="msg">You've successfully logged in!</p>
            </div>

        </div>
    </div>
</html>

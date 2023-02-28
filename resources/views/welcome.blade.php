<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>crud project</title>
        <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    </head>
    <body class="antialiased bg-dark text-white">
        

        <div class="container">
            <div class="row mt-5">
                <div class="col-4"></div>
                <div class="col-4">
                    <form action="" method="">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>












        <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>

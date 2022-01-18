<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <!-- {{ $errors }} -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>User Login</h5>
                <form action="" method="post" id="form-group">
                    @csrf
                    <label for="userName">User Name</label>
                    <input type="text " id="userName" name="userName" placeholder="username">
                    <span class='error-text' style="color:red ">@error('userName'){{$message}}@enderror</span>
                    <BR><BR>

                    <label for="passWord">Password</label>
                    <input type="password" name="passWord" id="passWord" placeholder="password">
                    <span class='error-text' style="color:red ">@error('passWord'){{$message}}@enderror</span>
                    <BR><BR>

                    <input type="submit" name="" class="btn btn-primary">


                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <script src="{{ asset('main.js') }}"></script> -->

    <script>
     
    </script>
    
</body>

</html>
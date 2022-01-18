<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation laravel</title>
   

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <body>
        <br>

        <div class="container">
<form method='POST' action="">

    @csrf
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" size="15" maxlength="15" class="form-control" name='name' id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Roll NO.</label>
    <div class="col-sm-10">
      <input type="number" max="100" min="1" class="form-control" name='rollno' id="inputPassword3">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Standard</label>
    <div class="col-sm-10">
      <input type="number" max="20" min="1" class="form-control" name='std' id="inputPassword3">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Division</label>
    <div class="col-sm-10">
      <input type="text" size="15" maxlength="15" class="form-control" name='div' id="inputPassword3">
    </div>
  </div>
  
      
  
  <button type="submit" name='submit' class="btn btn-primary">Submit</button>
</form>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script></head>

</body>
</html>
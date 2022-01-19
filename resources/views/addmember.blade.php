<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation laravel</title>
   

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head> <body>
        <br>

        <div class="container">
<form method="post" action="{{route('student.save')}}" id="main_form" >

    @csrf
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" size="15" maxlength="15" class="form-control" name='name' id="inputEmail3">
   <span class="text-danger error-text name_error"></span>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Roll NO.</label>
    <div class="col-sm-10">
      <input type="number"  class="form-control" name='rollno' id="inputPassword3">
      <span class="text-danger error-text rollno_error"></span>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Standard</label>
    <div class="col-sm-10">
      <input type="number"  class="form-control" name='std' id="inputPassword3">
      <span class="text-danger error-text std_error"></span>
    </div>
  </div>



 {{-- <div class="mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Standard</label>
    <div class="col-sm-10">
      <select name="std" id="std">
          <option>Select</option>
          <option>Ssc</option>
          <option>Hsc</option>
          <option>Bsc IT</option>
          <option>Mca</option>
        </select>
        <span class="text-danger error-text std_error"></span>
      </div>
    </div> 
 --}}





  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Division</label>
    <div class="col-sm-10">
      <input type="text" size="15" maxlength="15" class="form-control" name='div' id="inputPassword3">
      <span class="text-danger error-text div_error"></span>
    </div>
  </div>
  
      
  
  <button type="submit" name='submit' class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-primary">Reset</button>

</form>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script></head>



<script>
  $(function(){

    $("#main_form").on('submit', function(e){
      e.preventDefault();

      $.ajax({
        url:$(this).attr('action'),
        method:$(this).attr('method'),
        data:new FormData(this),
        processData:false,
        dataType:'json',
        contentType:false,
        beforeSend:function(){
          $(document).find('span.error-text').text('');

        },
        success:function(data){
          
          if(data.status == 0){
            $.each(data.error, function(prefix, val){
              $('span.'+prefix+'_error').text(val[0]);
            });

          }else{
            $('#main_form')[0].reset();
            alert(data.msg);
            location.replace('http://127.0.0.1:8000/dashboard')
          }
        }

      });

    });



 
 
 
    });
</script>
</body>
</html>

<! DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <title> Laravel 8 PDF </title>
    <! - Bootstrap5 CSS ->

   <style>


   </style>
</head>
<body>
    <div class = "container mt-4">
        <div class = "row">
            <div class = "col-md-8">
                <h2> Product list </h2>
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-12">
                <table class = "table">
                    <caption> Product list </caption>
                    <thead>
                      <tr>
                        <th scope = "col" class="col1"> ID </th>
                        <th scope = "col" class="col1"> Name </th>
                        <th scope = "col" class="col1"> Roll No</th>
                        <th scope = "col" class="col1"> Std </th>
                        <th scope = "col" class="col2"> Div </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($fmdata as $product)
                        <tr>
                            <th  class="col1" scope = "row"> {{$product-> id}} </th>
                            <td class="col1" > {{$product-> name}} </td>
                            <td class="col1" > {{$product-> rollno}} </td>
                            <td class="col1" > {{$product->std}} </td>
                            <td class="col2"> {{$product-> div}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
   
     
</body>
</html>



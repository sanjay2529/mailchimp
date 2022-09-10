<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
   <div class="container-fluid mt-5">
     <div class="row  justify-content-center ">
       <div class="col-md-6">
         <div class="row">
          <form action="submit.php" method="POST" >
           <div class="col-md-12">
            <label> First Name</label>
             <input type="text" name="fname" class="form-control">
           </div>
          <div class="col-md-12">
               <label> Last Name</label>

             <input type="text" name="lname" class="form-control">
           </div>
                      <div class="col-md-12">
                           <label>email</label>

             <input type="email" name="email" class="form-control">

           </div>
                <div class="col-md-12 mt-3">
             <input type="submit" name="submit" class="form-control btn btn-primary">
             
           </div>
           </form>
         </div>
       </div>
     </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
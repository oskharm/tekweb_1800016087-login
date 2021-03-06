<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="<?= base_url('css/login.css')?>">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

   <title>Hello, world!</title>
</head>

<body>
   <div class="container">
      <form class="form-signin card card-primary" action="/user/save/updateData" method="POST">
   <div class=" text-center mb-4">
    		
    		<h1>Edit Data</h1>
   
  		</div>
		
  		<div class="form-label-group">
         <input type="text" class="form-control" name="user_id" placeholder="Id" value="<?= $user->user_id; ?>">
    		<label for="inputEmail">User id</label>
  		</div>
		
  		<div class="form-label-group">
        <input type="text" class="form-control" name="user_nama" placeholder="Nama" value="<?= $user->user_nama; ?>"> 
    		<label for="inputPassword">Nama</label>
        </div>
       
      <div class="form-label-group">
         <input type="text" class="form-control" name="user_email" placeholder="Email" value="<?= $user->user_email; ?>">
    		<label for="inputEmail">Email</label>
        </div>
  		
		<br>  
  		<button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
		<br>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
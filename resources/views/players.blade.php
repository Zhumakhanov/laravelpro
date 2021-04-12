<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="script.js"></script>
   <title>Form</title>

</head>
<body>

    <div class = "container">
        <div class="jumbotron">
        <h1> Lab 8 Upload files </h1> <br>
            <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div calss="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                </div>

                <div calss="form-group">
                    <label>Surname</label>
                    <input type="text" name="surname" class="form-control" placeholder="Enter Surname">
                </div>

                <div calss="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email">
                </div>

                <div calss="input-group">
                    <label>Photo</label>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" >
                    <label class="custom-file-label">Choose file</label>
                </div>
</div>
    <button type="submit" name="submit" class="btn btn-primary">Send Data</button>  
    <a href="#">
      
</form>
        </div>
    </div>

</body>
</html>
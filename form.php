<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="continer">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="bg-body-secondary" style="padding: 20px; margin-top: 30px;" >
                <?php echo $_SESSION['error']; ?>
                <form action="checkLogin.php"  method="POST">
            <label for="name" >Name</label><br />
            <input type="text" name="name" class="form-control" id="name"><br />
            <label for="pass">Password</label><br />
            <input type="password" name="pass" class="form-control"id="pass"><br />
                <br />
            <button type="submit" class="btn btn-success" name="submit_btn">Submit</button>   
    </form>
                </div>            
            </div>
        </div>
    </div>
    
</body>
</html>
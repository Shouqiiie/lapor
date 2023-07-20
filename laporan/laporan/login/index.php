<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Login</title>
    <style>
        body{
            background: linear-gradient(#4655eb, #2f3fe0);
        }

        .box{
            background: white;
            margin: 0 auto;
            margin-top: 1   50px;
            width: 600px;
            border-radius: 3px;
            height: 450px;
            padding: 20px;
            margin-bottom: 405px;
        }

        .form-control{
            height: 45px;
            border-radius: 20px;
        }

        button{
            border: 1px solid gray;
            background: #2f3fe0;
            width: 100%;
            color: white;
            border-radius: 20px;
            height: 45px;
        }

        .my-button{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Aplikasi Pelaporan</h1>
        <p class="text-secondary mb-5">Login sesuai akses-mu, ya!</p>
        <form action="proses.php" method="post">
            <label for="username" class="mb-2">Username</label> 
            <input type="text" name="username" id="username" class="form-control mb-3" placeholder="masukkan username">

            <label for="password" class="mb-2">Password</label> 
            <input type="password" name="password" id="password" class="form-control mb-4" placeholder="masukkan password"> 

            <div class="my-button">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
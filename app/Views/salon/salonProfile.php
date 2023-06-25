<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </script>
    <style>
        .jumbotron {
            padding: 3rem 1rem;
        }

        .navbar .navbar-nav .nav-link:hover {
            background: rgba(202, 152, 152, 1);
            border-radius: 6px;
        }

        nav ul li a:hover {
            background: rgba(130, 38, 126, 0.7);
            border-radius: 6px;
        }

        form {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }
        .profile {
            text-align: center;
            font-size: 20px;
        }

        .profile img {
            display: block;
            margin: 0 auto;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Interface Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color: #FFFFFF">
        <div class="container justify-content-center">
            <a class="navbar-brand"><img src="/img/salon.png" width="80" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="">Price List</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <body>

    <div >
        <form method="POST" action="/asisten/check">
            <div class="mb-3 mt-3" style="width: 600px;">
                <?= csrf_field() ?>
                <h1 style="text-align: center;">Profile</h1><br>
                <div class="profile">
                    <img src="/img/profilku.jpg" style="width: 150px; height: 150px; border-radius: 50%;">
                </div>
                <br><h4 style="text-align: center;">Update your profile:</h4><br>
                <p>
                    <label for="nama">Name :</label>
                    <input placeholder="Enter your name" class="form-control" type="text" id="nama" name="nama">
                </p>
                <p>
                    <label for="email">Email :</label>
                    <input placeholder="Enter your email" class="form-control" type="text" id="email" name="email">
                </p>
                <p>
                    <label for="nohp">Phone Number :</label>
                    <input placeholder="Enter your number" class="form-control" type="text" id="noohp" name="nohp">
                </p>
                <p>
                    <button name="update" type="submit" value="update" class="form-control"  style="background-color: #BD7272; color: #fff;">Update your profile</button>
                </p>
            </div>
        </form>
    </div>

    </body>
</body>
</html>

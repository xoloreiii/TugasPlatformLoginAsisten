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
    </style>
    <script>
        function showPaymentForm() {
            var paymentMethod = document.getElementById("paymentMethod").value;
            var paymentForm = document.getElementById("paymentForm");

            if (paymentMethod === "QRIS") {
                paymentForm.style.display = "block";
            } else {
                paymentForm.style.display = "none";
            }
        }
    </script>
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
                        <a class="nav-link active text-dark" aria-current="page" href="/salon/salonHome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="/salon/salonPricelist">Price List</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="/salon/salonLogin">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="/salon/salonRegister">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <body>

    <div style="text-align: left; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">
        <form method="POST" action="/salon/salonUpdateProfile">
            <div class="mb-3 mt-3" style="width: 600px;">
                <?= csrf_field() ?>
                <h1 style="text-align: center;">Profile</h1><br>
                <h4>Update your profile :</h4><br>
                <p>
                    <label for="name">Name:</label>
                    <input placeholder="Enter your name" class="form-control" type="text" id="name" name="name">
                </p>
                <p>
                    <label for="email">Email:</label>
                    <input placeholder="Enter your email" class="form-control" type="text" id="email" name="email">
                </p>
                <p>
                    <label for="phone">Phone Number:</label>
                    <input placeholder="Enter your phone" class="form-control" type="text" id="phone" name="phone">
                </p>
                <p>
                    <button name="submit" type="submit" value="update" class="form-control" style="background-color: #BD7272; color: #fff;">Update Your Profile</button>
                </p>
            </div>
        </form>
    </div>

    </body>
</body>
</html>
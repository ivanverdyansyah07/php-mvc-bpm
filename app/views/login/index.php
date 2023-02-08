<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/bootstrap.min.css">

</head>

<body>
    <section class="d-flex align-items-start bg-dark d-flex justify-content-center" style="width: 100%; height: 100vh;">
        <div class="section-login bg-white mt-5 p-5 rounded-4" style="width: 500px;">
            <h1 class="display-4 fw-bold mb-3 text-center">Login!</h1>
            <form class="login-form" action="<?= BASEURL; ?>/Login/loginAction" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-dark py-2" style="width: 100%;">Login</button>
            </form>
        </div>
    </section>

    <script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.css"></script>
</body>

</html>

</html>
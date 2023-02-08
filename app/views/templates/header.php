<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['page']; ?> Page</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary navbar-light fixed-top" data-bs-theme="dark">
        <div class="container py-1">
            <a class="navbar-brand" href="<?= BASEURL; ?>/home">BPM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?= $data['page'] == "Home" ? 'active' : ''; ?>" href="<?= BASEURL; ?>/home">Home</a>
                    <a class="nav-link <?= $data['page'] == "Complaint" ? 'active' : ''; ?>" href="<?= BASEURL; ?>/complaint">Complaint</a>
                    <a class="nav-link <?= $data['page'] == "Report" ? 'active' : ''; ?>" href="<?= BASEURL; ?>/report">Report</a>
                    <!-- <a class="nav-link <?= $data['page'] == "History" ? 'active' : ''; ?>" href="<?= BASEURL; ?>/history/<?= $_SESSION['login']['id']; ?>">History</a> -->
                </div>
                <div class="navbar-nav">
                    <a class="nav-link <?= $data['page'] == "Login" ? 'active' : ''; ?>" href="<?= BASEURL; ?>/login">Login</a>
                    <a class="nav-link" href="<?= BASEURL; ?>/login">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
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
                    <?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'admin') : ?>
                        <a class="nav-link <?= $data['page'] == "Report" ? 'active' : ''; ?>" href="<?= BASEURL; ?>/report">Report</a>
                    <?php elseif (isset($_SESSION['login']) && $_SESSION['login'] == 'user') : ?>
                        <a class="nav-link <?= $data['page'] == "Complaint" ? 'active' : ''; ?>" href="<?= BASEURL; ?>/complaint">Complaint</a>
                        <a class="nav-link <?= $data['page'] == "History" ? 'active' : ''; ?>" href="<?= BASEURL; ?>/history">History</a>
                    <?php elseif (!isset($_SESSION['login'])) : ?>
                        <a class="nav-link <?= $data['page'] == "Complaint" ? 'active' : ''; ?>" href="<?= BASEURL; ?>/complaint">Complaint</a>
                    <?php endif; ?>
                </div>
                <div class="navbar-nav">
                    <?php if (isset($_SESSION['login'])) : ?>
                        <a class="nav-link" href="<?= BASEURL; ?>/logout">Logout</a>
                    <?php elseif (!isset($_SESSION['login'])) : ?>
                        <a class="nav-link" href="<?= BASEURL; ?>/login">Login</a>
                        <a class="nav-link" href="<?= BASEURL; ?>/register">Register</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
<?php

class Flasher
{
    public static function setFlash($bootstrap, $pesan, $aksi)
    {
        $_SESSION['flash'] = [
            'bootstrap' => $bootstrap,
            'pesan' => $pesan,
            'aksi' => $aksi
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['bootstrap'] . ' alert-dismissible fade show" role="alert">
            ' . $_SESSION['flash']['pesan'] . ' ' . $_SESSION['flash']['aksi'] . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            unset($_SESSION['flash']);
        }
    }
}

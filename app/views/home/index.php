<section class="d-flex align-items-center" style="width: 100%; height: 100vh;">
    <div class="section-group">
        <h1 class="display-4 fw-bold mb-3">Hello, Welcome Back
            <?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'admin') : ?>
                <?= "Admin"; ?>
            <?php elseif (isset($_SESSION['login']) && $_SESSION['login'] == 'user') : ?>
                <?= $_SESSION['userLogin']['fullname']; ?>
            <?php elseif (!isset($_SESSION['login'])) : ?>
                <?= "to BPM"; ?>
            <?php endif; ?>
            !</h1>
        <hr class="my-4">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia fuga, hic nostrum reprehenderit ipsum repellat ipsam, eum quisquam cupiditate minus esse rerum qui a molestias quas ratione ab fugit recusandae.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non odio incidunt sit itaque vel iste, fugit tenetur vero laboriosam unde optio atque eaque consectetur sed, animi quia placeat, voluptas ipsum impedit cum enim voluptatem vitae harum! Voluptatum cum minus voluptatem deleniti doloremque. Cupiditate eos dicta autem, sunt expedita non nostrum error ipsum quasi esse placeat alias id, ut dolorem minima tempora laborum voluptas nihil? Perferendis obcaecati officiis atque quas sint dolor explicabo voluptatibus voluptate asperiores. Dolores error harum veritatis sint voluptates non praesentium sed quidem maxime quo nihil cupiditate, ipsum animi id corporis sequi repellat dolore aspernatur ducimus explicabo assumenda.</p>
    </div>
</section>
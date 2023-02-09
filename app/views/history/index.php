<section style="margin-top: 72px;">
    <div class="section">
        <div class="section-header mb-4">
            <h2>History Complaint</h2>
        </div>

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Area</th>
                    <th scope="col">Complaint</th>
                    <th scope="col">Solution</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <!-- <?php foreach ($data['complaints'] as $complaint) : ?>
                    <tr>
                        <td scope="col"><?= $i; ?></td>
                        <td scope="col"><?= $complaint['name']; ?></td>
                        <td scope="col"><?= $complaint['email']; ?></td>
                        <td scope="col"><?= $complaint['phone']; ?></td>
                        <td scope="col"><?= $complaint['area']; ?></td>
                        <td scope="col"><?= $complaint['complaint']; ?></td>
                        <td scope="col"><?= $complaint['solution']; ?></td>
                        <td scope="col">
                            <a href="<?= BASEURL; ?>/report/detail/<?= $complaint['id']; ?>" class="btn btn-primary btn-sm">Detail</a>
                            <a href="<?= BASEURL; ?>/report/edit/<?= $complaint['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= BASEURL; ?>/report/complaintDelete/<?= $complaint['id']; ?>" class="btn btn-danger btn-sm">Danger</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?> -->
            </tbody>
        </table>
    </div>
</section>
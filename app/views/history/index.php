<section style="margin-top: 100px;">
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
                <?php foreach ($data['amount'] as $amount) : ?>
                    <?php if ($amount['total_complaint'] == 0) : ?>
                        <tr>
                            <td scope="col" colspan="6" class="text-center py-4">Data tidak ditemukan.</td>
                        </tr>
                    <?php else : ?>
                        <?php $i = 1; ?>
                        <?php foreach ($data['complaints'] as $complaint) : ?>
                            <tr>
                                <td scope="col"><?= $i; ?></td>
                                <td scope="col"><?= $complaint['name']; ?></td>
                                <td scope="col"><?= $complaint['area']; ?></td>
                                <td scope="col"><?= $complaint['complaint']; ?></td>
                                <td scope="col"><?= $complaint['reply'] == NULL ? '' : $complaint['reply']; ?></td>
                                <td scope="col">
                                    <a href="<?= BASEURL; ?>/history/detail/<?= $complaint['id']; ?>" class="btn btn-primary btn-sm">Detail</a>
                                    <a href="<?= BASEURL; ?>/history/edit/<?= $complaint['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= BASEURL; ?>/history/complaintDelete/<?= $complaint['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
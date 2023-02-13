<section style="margin-top: 100px;">
    <div class="section">
        <div class="section-header mb-4">
            <h2>Approved Complaint</h2>
        </div>

        <?php foreach ($data['complaint'] as $complaint) : ?>
            <form action="<?= BASEURL; ?>/report/complaintApproved" method="post">
                <div class="row">
                    <div class="col-7">
                        <!-- <div class="row">
                            <input type="text" disabled class="form-control" id="name" name="" value="<?= $complaint['id']; ?>">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" disabled class="form-control" id="name" value="<?= $complaint['name']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" disabled class="form-control" id="email" value="<?= $complaint['email']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Number Phone</label>
                                    <input type="text" disabled class="form-control" id="phone" value="<?= $complaint['phone']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="area" class="form-label">Area</label>
                                    <input type="text" disabled class="form-control" id="area" value="<?= $complaint['area']; ?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="complaint" class="form-label">Complaint</label>
                                    <textarea disabled class="form-control" id="complaint" rows="4"><?= $complaint['complaint']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="reply" class="form-label">Solution</label>
                                    <textarea class="form-control" id="reply" name="reply" rows="4"></textarea>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <input type="hidden" class="form-control" name="id" value="<?= $complaint['id']; ?>">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $complaint['name']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $complaint['email']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Number Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="<?= $complaint['phone']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="area" class="form-label">Area</label>
                                    <input type="text" class="form-control" id="area" name="area" value="<?= $complaint['area']; ?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="complaint" class="form-label">Complaint</label>
                                    <textarea class="form-control" id="complaint" name="complaint" rows="4"><?= $complaint['complaint']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="reply" class="form-label">Solution</label>
                                    <textarea class="form-control" id="reply" name="reply" rows="4"><?= $complaint['reply'] == NULL ? '' : $complaint['reply']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="button-group">
                            <a href="<?= BASEURL; ?>/report" class="btn btn-light">Back to Page</a>
                            <button type="submit" class="btn btn-dark">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>
        <?php endforeach; ?>

    </div>
</section>
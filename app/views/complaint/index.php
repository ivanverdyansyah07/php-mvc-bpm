<section style="margin-top: 72px;">
    <div class="section">
        <div class="section-header mb-4">
            <h2>Enter Your Complaint</h2>
        </div>

        <form action="<?= BASEURL; ?>/complaint/complaintCreate" method="post">
            <div class="row">
                <div class="col-7">
                    <div class="row">
                        <input type="hidden" class="form-control" name="id_level" value="<?= isset($_SESSION['login']) ? $_SESSION['userLogin']['id_level'] : '0'; ?>">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= isset($_SESSION['login']) ? $_SESSION['userLogin']['fullname'] : ''; ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Number Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="area" class="form-label">Area</label>
                                <input type="text" class="form-control" id="area" name="area">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="complaint" class="form-label">Complaint</label>
                                <textarea class="form-control" id="complaint" name="complaint" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="button-group">
                        <button type="submit" class="btn btn-dark">Send Complaint</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
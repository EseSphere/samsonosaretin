<?php require_once 'upload_backend.php'; ?>

<div class="container mt-5">
    <h2 class="mb-4">Upload Completed Website/App Project</h2>
    <form method="POST" enctype="multipart/form-data" class="bg-white p-4 shadow rounded">
        <div class="row text-decoration-none">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="form-group">
                    <label>Project Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="4" required></textarea>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="form-group">
                    <label>Upload File (ZIP, PDF, etc.)</label>
                    <input type="file" name="project_file" class="form-control-file" required>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label>Rating</label>
                    <select name="rating" class="form-control" required>
                        <option value="">-- Select Rating --</option>
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <option value="<?= $i ?>"><?= $i ?> Star<?= $i > 1 ? 's' : '' ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label>Project Url</label>
                    <input type="url" name="project_url" class="form-control" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>

<?php require_once 'footer.php'; ?>
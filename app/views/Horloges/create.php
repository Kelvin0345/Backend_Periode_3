<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-6">
            <h3 class="text-success"><?php echo $data['title']; ?></h3>
        </div>
    </div>

    <!-- Terugkoppelen -->
    <div class="row mt-3 d-<?php echo $data['display']; ?> justify-content-center">
        <div class="col-6">
            <div class="alert alert-success" role="alert">
                <?= $data['message']; ?>
            </div>
        </div>
    </div>

    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-6">
            <form action="<?= URLROOT; ?>/HorlogesController/create" method="post">
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input name="merk" type="text" class="form-control" id="merk" value="<?= $_POST['merk'] ?? ''; ?>">
                </div>

                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input name="model" type="text" class="form-control" id="model" value="<?= $_POST['model'] ?? ''; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="prijs" class="form-label">Prijs</label>
                    <input name="prijs" type="number" min="0" max="9999" step="0.01" class="form-control" id="prijs" value="<?= $_POST['prijs'] ?? ''; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="materiaal" class="form-label">Materiaal</label>
                    <input name="materiaal" type="text"  class="form-control" id="materiaal" value="<?= $_POST['materiaal'] ?? ''; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="Gewicht" class="form-label">Gewicht</label>
                    <input name="gewicht" type="number" min="0" max="4000" class="form-control" id="gewicht" value="<?= $_POST['gewicht'] ?? ''; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="releasedatum" class="form-label">Releasedatum</label>
                    <input name="releasedatum" type="date" class="form-control" id="releasedatum" value="<?= $_POST['releasedatum'] ?? ''; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="waterdichtheid" class="form-label">Waterdichtheid</label>
                    <input name="waterdichtheid" type="number" min="0" max="10" step="0.01" class="form-control" id="waterdichtheid" value="<?= $_POST['waterdichtheid'] ?? ''; ?>" required>
                </div>
              

                <div class="mb-3">
                    <label for="horlogetype" class="form-label">Horlogetype</label>
                    <input name="horlogetype" type="text" class="form-control" id="gewicht" value="<?= $_POST['Horlogetype'] ?? ''; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Verstuur</button>

                
            </form>

            <a href="<?= URLROOT; ?>/homepages/index"><i class="bi bi-arrow-left"></i></a>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>
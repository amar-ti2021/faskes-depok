<?php foreach ($faskes as $f) { ?>
    <div class="col-3">
        <div class="card">
            <img class="bd-placeholder-img card-img-top" src="<?= $f->foto1; ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $f->nama; ?></h5>
                <p class="card-text"><?= $f->alamat; ?></p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
<?php }  ?>
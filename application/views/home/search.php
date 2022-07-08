<?php foreach ($faskes as $f) { ?>
    <div class="col-12 col-md-3 mb-3">
        <div class="card h-100">
            <img class="bd-placeholder-img card-img-top" src="<?= base_url('assets/foto/') . $f->foto1; ?>" style="height: 200px;">
            <div class="card-body">
                <h5 class="card-title"><?= $f->nama; ?></h5>
                <p class="card-text"><?= $f->alamat; ?></p>
            </div>
            <div class="card-footer">
                <a href="<?= base_url('index.php/home/detail?id=') . $f->id; ?>" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
<?php }  ?>
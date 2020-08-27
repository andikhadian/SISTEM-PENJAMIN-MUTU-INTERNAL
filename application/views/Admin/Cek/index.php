<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Lihat Dokumen SPMI</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="<?= base_url('Admin/Dashboard') ?>">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Lihat Dokumen SPMI</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-5">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Cek Password Dokumen</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="password">Password Dokumen</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block btn-icon-split"> <i class="fa fa-arrow-right" aria-hidden="true"></i> Masuk</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</section>
</div>
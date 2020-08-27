<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <?php if ($dokumen == NULL) : ?>
                <h1>Lihat Dokumen SPMI</h1>
            <?php else : ?>
                <h1><?= $title ?></h1>
            <?php endif; ?>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="<?= base_url('Admin/Dashboard') ?>">Dashboard</a>
                </div>
                <div class="breadcrumb-item"><?= $title ?></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row sortable-card">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>FTI (Fakultas Teknik Informatika)</h4>
                        </div>
                        <div class="card-body">
                            <p><span class="font-weight-bold"><?= $num_dokumen_fti ?></span> Dokumen</p>
                            <?php if ($num_dokumen_fti == 0) : ?>
                                <a href="" class="btn btn-primary btn-lg btn-block disabled btn-icon-split"><i class="fas fa-file"></i>Dokumen Kosong</a>
                            <?php else : ?>
                                <a href="" class="btn btn-primary btn-lg btn-block btn-icon-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-file-archive" aria-hidden="true"></i> Lihat Dokumen</a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-title">Jenis Dokumen</div>
                                    <a class="dropdown-item" href="<?= base_url('Admin/Dokumen/lihat/FTI/KEBIJAKAN') ?>">Kebijakan</a>
                                    <a class="dropdown-item" href="<?= base_url('Admin/Dokumen/lihat/FTI/INSTRUMEN') ?>">Instrumen</a>
                                    <a class="dropdown-item" href="<?= base_url('Admin/Dokumen/lihat/FTI/MANUAL') ?>">Manual</a>
                                    <a class="dropdown-item" href="<?= base_url('Admin/Dokumen/lihat/FTI/STANDAR') ?>">Standar</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>SI (Sistem Informasi)</h4>
                        </div>
                        <div class="card-body">
                            <p><span class="font-weight-bold"><?= $num_dokumen_si ?></span> Dokumen</p>
                            <?php if ($num_dokumen_si == 0) : ?>
                                <a href="" class="btn btn-primary btn-lg btn-block disabled btn-icon-split"> <i class="fas fa-file"></i>Dokumen Kosong</a>
                            <?php else : ?>
                                <a href="" class="btn btn-primary btn-lg btn-block btn-icon-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-file-archive" aria-hidden="true"></i> Lihat Dokumen</a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-title">Jenis Dokumen</div>
                                    <a class="dropdown-item" href="<?= base_url('Admin/Dokumen/lihat/SI/KEBIJAKAN') ?>">Kebijakan</a>
                                    <a class="dropdown-item" href="<?= base_url('Admin/Dokumen/lihat/SI/INSTRUMEN') ?>">Instrumen</a>
                                    <a class="dropdown-item" href="<?= base_url('Admin/Dokumen/lihat/SI/MANUAL') ?>">Manual</a>
                                    <a class="dropdown-item" href="<?= base_url('Admin/Dokumen/lihat/SI/STANDAR') ?>">Standar</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>IK (Ilmu Komputer)</h4>
                        </div>
                        <div class="card-body">
                            <p><span class="font-weight-bold"><?= $num_dokumen_ik ?></span> Dokumen</p>
                            <?php if ($num_dokumen_ik == 0) : ?>
                                <a href="" class="btn btn-primary btn-lg btn-block disabled btn-icon-split"> <i class="fas fa-file"></i> Dokumen Kosong</a>
                            <?php else : ?>
                                <a href="" class="btn btn-primary btn-lg btn-block btn-icon-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-file-archive" aria-hidden="true"></i> Lihat Dokumen</a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-title">Jenis Dokumen</div>
                                    <a class="dropdown-item" href="<?= base_url('Admin/Dokumen/lihat/IK/KEBIJAKAN') ?>">Kebijakan</a>
                                    <a class="dropdown-item" href="<?= base_url('Admin/Dokumen/lihat/IK/INSTRUMEN') ?>">Instrumen</a>
                                    <a class="dropdown-item" href="<?= base_url('Admin/Dokumen/lihat/IK/MANUAL') ?>">Manual</a>
                                    <a class="dropdown-item" href="<?= base_url('Admin/Dokumen/lihat/IK/STANDAR') ?>">Standar</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
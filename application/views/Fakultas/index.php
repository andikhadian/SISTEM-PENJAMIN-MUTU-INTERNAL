<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <?= $this->session->flashdata('message'); ?>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info pt-4">
                        <h4 class="text-white font-weight-bold">FTI</h4>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Dokumen FTI</h4>
                        </div>
                        <div class="card-body">
                            <?= $countFti; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info pt-4">
                        <h4 class="text-white font-weight-bold">SI</h4>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Dokumen SI</h4>
                        </div>
                        <div class="card-body">
                            <?= $countSi ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info pt-4">
                        <h4 class="text-white font-weight-bold">IK</h4>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Dokumen IK</h4>
                        </div>
                        <div class="card-body">
                            <?= $countIk; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 1 -->
        <div class="row">
            <!-- Hero -->
            <div class="col-lg-8 col-md-12 col-12 col-sm-12 mb-4">
                <div class="hero align-items-center bg-info text-white">
                    <div class="hero-inner text-center mt-4">
                        <h1>Ingin melihat dokumen SPMI dengan cepat ?</h1>
                        <p class="lead mt-5">Anda memiliki akses untuk melihat dokumen SPMI. Untuk mempercepat proses melihat dokumen, anda dapat menekan tombol dibawah ini.</p>
                        <div class="mt-4">
                            <a href="<?= base_url('Fakultas/Cek') ?>" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-upload"></i> Lihat Dokumen SPMI Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Aktifitas Pengunggahan Dokumen</h4>
                    </div>
                    <div class="card-body" style=" height: 345px; overflow-y: scroll;">
                        <?php if ($countDokumen != 0) : ?>
                            <ul class="list-unstyled list-unstyled-border">
                                <?php foreach ($latestReportByAll as $lr) : ?>
                                    <li class="media">
                                        <?php if ($lr['format_dokumen'] == 'GAMBAR') {
                                            $icon = '<i class="fas fa-image fa-10x mt-2"></i>';
                                            $color = 'badge-warning';
                                        } else if ($lr['format_dokumen'] == 'PDF') {
                                            $icon = '<i class="fas fa-file-pdf fa-10x mt-2"></i>';
                                            $color = 'badge-danger';
                                        } else if ($lr['format_dokumen'] == 'WORD') {
                                            $icon = '<i class="fa fa-file-word mt-2"></i>';
                                            $color = 'badge-info';
                                        }
                                        ?>

                                        <span class="badge <?= $color ?> mr-3" style="width: 45px; height:45px"><?= $icon ?></span>

                                        <div class="media-body">
                                            <div class="float-right text-primary">
                                                <?php
                                                $now = date('j M');
                                                $yesterday = date('j M', strtotime("-1 days"));
                                                $userDate = date('j M', $lr['tgl_dokumen_masuk']);
                                                if ($userDate == $now) {
                                                    $userDate = 'Hari ini';
                                                } else if ($userDate == $yesterday) {
                                                    $userDate = 'Kemarin';
                                                } else {
                                                    $userDate = date('j M', $lr['tgl_dokumen_masuk']);
                                                }

                                                ?>

                                                <?= $userDate; ?>
                                            </div>
                                            <div class="media-title"><?= $lr['nama_dokumen']; ?></div>
                                            <span class="text-small text-muted">Dokumen diunggah untuk kelompok dokumen
                                                <span class="text-dark"><?= $lr['pemilik_dokumen']; ?></span>, kedalam jenis dokumen
                                                <span class="text-dark"> <?= $lr['jenis_dokumen']; ?></span> dan mengkategorikan dokumen sebagai <span class="text-dark"><?= $lr['format_dokumen']; ?></span></span>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else : ?>
                            <div class="empty-state" data-height="300">
                                <div class="empty-state-icon bg-warning">
                                    <i class="fas fa-comment-slash"></i>
                                </div>
                                <h2>Belum ada aktifitas</h2>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Row 1 -->
    </section>
</div>
</div>
</div>
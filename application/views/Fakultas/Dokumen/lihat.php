<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="<?= base_url('Fakultas/Dashboard') ?>">Dashboard</a>
                </div>
                <div class="breadcrumb-item"><?= $title ?></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Daftar <?= $title ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="mytable">
                                    <thead>
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>Nama Dokumen</th>
                                            <th>Kategori Dokumen</th>
                                            <th>File Dokumen</th>
                                            <th>Diunggah Pada</th>
                                        </tr>
                                    </thead>
                                    <?php

                                    $i = 1;
                                    foreach ($dokumen as $item) : ?>
                                        <tr>
                                            <td style="vertical-align: middle;">
                                                <?= $i++; ?>
                                            </td>
                                            <td style="vertical-align: middle;"><?= $item['nama_dokumen']; ?></td>
                                            <td class="align-middle">
                                                <?php if ($item['kategori_dokumen'] == 'GAMBAR') {
                                                    $icon = '<i class="fas fa-file-image mr-2"></i>';
                                                    $badge = 'badge-warning';
                                                } else if ($item['kategori_dokumen'] == 'PDF') {
                                                    $icon = '<i class="fas fa-file-pdf mr-2"></i>';
                                                    $badge = 'badge-danger';
                                                } else if ($item['kategori_dokumen'] == 'WORD') {
                                                    $badge = 'badge-info';
                                                    $icon = '<i class="fa fa-file-word mr-2"></i>';
                                                }
                                                ?>
                                                <div class="badge font-weight-bold <?= $badge ?>"><?= $icon . $item['kategori_dokumen']; ?></div>
                                            </td>
                                            <td style="vertical-align: middle;">
                                                <a download href="<?= base_url('assets/Documents/') . $item['kelompok_dokumen'] . '/' . $item['jenis_dokumen'] . '/' . $item['kategori_dokumen'] . '/' . $item['file_dokumen']; ?>"><i class="fa fa-download mr-2" aria-hidden="true"></i>Unduh File</a>
                                            </td>
                                            <td style="vertical-align: middle;"><?= date('d M Y', $item['tgl_dokumen_masuk']); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="<?= base_url('Fakultas/Dokumen') ?>" class="btn btn-primary btn-block btn-lg btn-icon-split"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a> -->
                </div>
            </div>
        </div>
    </section>
</div>
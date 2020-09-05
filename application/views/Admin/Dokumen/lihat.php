<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="<?= base_url('Admin/Dashboard') ?>">Dashboard</a>
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
                            <div class="card-header-form"><a href="<?= base_url('Admin/Unggah') ?>" class="btn btn-icon icon-left btn-success mr-2 ml-4"><i class="fas fa-upload"></i> Unggah Dokumen Baru</a></div>
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
                                            <th>Format Dokumen</th>
                                            <th>Diunggah Pada</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $i = 1;
                                        foreach ($dokumen as $item) : ?>
                                            <tr class="">
                                                <td style="vertical-align: middle;">
                                                    <?= $i++; ?>
                                                </td>
                                                <td style="vertical-align: middle; width:35%"><?= $item['nama_dokumen']; ?></td>
                                                <td class="align-middle">
                                                    <?php if ($item['format_dokumen'] == 'GAMBAR') {
                                                        $icon = '<i class="fas fa-file-image mr-2"></i>';
                                                        $badge = 'badge-warning';
                                                    } else if ($item['format_dokumen'] == 'PDF') {
                                                        $icon = '<i class="fas fa-file-pdf mr-2"></i>';
                                                        $badge = 'badge-danger';
                                                    } else if ($item['format_dokumen'] == 'WORD') {
                                                        $badge = 'badge-info';
                                                        $icon = '<i class="fa fa-file-word mr-2"></i>';
                                                    }
                                                    ?>
                                                    <div class="badge font-weight-bold <?= $badge ?>"><?= $icon . $item['format_dokumen']; ?></div>
                                                </td>
                                                <td style="vertical-align: middle;"><?= date('d M Y', $item['tgl_dokumen_masuk']); ?></td>
                                                <td>
                                                    <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-info my-3"><i class="fa fa-cog mr-2"></i> Menu</a>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-title">Menu Pilihan</div>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item has-icon" target="_blank" href="<?= base_url('assets/Documents/') . $item['pemilik_dokumen'] . '/' . $item['jenis_dokumen'] . '/' . $item['format_dokumen'] . '/' . $item['file_dokumen']; ?>"><i class="fa fa-eye text-primary" aria-hidden="true"></i> Lihat File</a>
                                                        <a class="dropdown-item has-icon" download href="<?= base_url('assets/Documents/') . $item['pemilik_dokumen'] . '/' . $item['jenis_dokumen'] . '/' . $item['format_dokumen'] . '/' . $item['file_dokumen']; ?>"><i class="fa fa-download text-primary" aria-hidden="true"></i> Unduh File</a>
                                                        <a class="dropdown-item has-icon btnHapus" href="<?= base_url('Admin/Dokumen/hapus/') . $item['dokumen_id'] . '/' . $item['pemilik_dokumen'] . '/' . $item['jenis_dokumen'] . '/' . $item['format_dokumen'] . '/' . $item['file_dokumen']; ?>"><i class="fa fa-trash text-primary" aria-hidden="true"></i> Hapus File</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="<?= base_url('Admin/Dokumen') ?>" class="btn btn-primary btn-block btn-lg btn-icon-split"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a> -->
                </div>
            </div>
        </div>
    </section>
</div>
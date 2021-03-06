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
            <h2 class="section-title">Aturan</h2>
            <p class="section-lead">
                Pastikan anda mengisi data dengan lengkap, agar tidak terjadi kesalahan dikemudian hari
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form <?= $title ?></h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="nama_dokumen">Nama Dokumen</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control w-100" id="nama_dokumen" name="nama_dokumen" value="<?= set_value('nama_dokumen'); ?>">
                                        <?= form_error('nama_dokumen', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="pemilik_dokumen">Pemilik Dokumen</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="pemilik_dokumen" id="pemilik_dokumen" class="form-control">
                                            <option value="">-- Pilih Pemilik Dokumen --</option>
                                            <option value="FTI">FTI</option>
                                            <option value="SI">SI</option>
                                            <option value="IK">IK</option>
                                        </select>
                                        <?= form_error('pemilik_dokumen', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="jenis_dokumen">Jenis Dokumen</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="jenis_dokumen" id="jenis_dokumen" class="form-control">
                                            <option value="">-- Pilih Jenis Dokumen --</option>
                                            <option value="KEBIJAKAN">KEBIJAKAN</option>
                                            <option value="INSTRUMEN">INSTRUMEN</option>
                                            <option value="MANUAL">MANUAL</option>
                                            <option value="STANDAR">STANDAR</option>
                                        </select>
                                        <?= form_error('jenis_dokumen', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="format_dokumen">Format Dokumen</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="format_dokumen" id="format_dokumen" class="form-control">
                                            <option value="">-- Pilih Format Dokumen --</option>
                                            <option value="GAMBAR">GAMBAR</option>
                                            <option value="PDF">PDF</option>
                                            <option value="WORD">WORD</option>
                                        </select>
                                        <?= form_error('format_dokumen', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="file_dokumen">Dokumen yang diunggah</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" class="form-control w-100 pb-5 pt-4" id="file_dokumen" name="file_dokumen">
                                        <?= form_error('file_dokumen', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary btn-block btn-lg btn-icon-split" type="submit"> <i class="fa fa-upload" aria-hidden="true"></i> Unggah Dokumen SPMI Sekarang</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
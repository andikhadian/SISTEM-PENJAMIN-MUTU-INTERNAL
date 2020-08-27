<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?= base_url('Fakultas/Dashboard'); ?>">SPMI</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url('Fakultas/Dashboard'); ?>">SP</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Fakultas</li>
            <li class="nav-item">
                <a href="<?= base_url('Fakultas/Dashboard'); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('Fakultas/Profil') ?>" class="nav-link"><i class="fas fa-user-circle"></i> <span>Profil Saya</span></a>
            </li>
            <li class="menu-header">Menu Utama</li>
            <li class="nav-item">
                <a href="<?= base_url('Fakultas/Cek') ?>" class="nav-link"><i class="fas fa-folder-open"></i> <span>Lihat Dokumen</span></a>
            </li>
            <li class="menu-header">Lainnya</li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-info-circle"></i> <span>Tentang</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?= base_url('Fakultas/Tentang') ?>">Tentang FTI</a></li>
                    <li><a class="nav-link" href="<?= base_url('Fakultas/Tentang/sambutan_dekan') ?>">Sambutan Dekan</a></li>
                    <li><a class="nav-link" href="<?= base_url('Fakultas/Tentang/visi_misi') ?>">Visi - Misi</a></li>
                    <li><a class="nav-link" href="<?= base_url('Fakultas/Tentang/struktur_organisasi') ?>">Struktur Organisasi</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('Fakultas/Kontak') ?>" class="nav-link"><i class="fas fa-phone"></i> <span>Kontak</span></a>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="<?= base_url('Auth/logout') ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </aside>
</div>
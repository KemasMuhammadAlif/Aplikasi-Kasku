<?php
$current_page = basename($_SERVER['PHP_SELF']);

switch ($current_page) {
    case 'dashboard_bendahara.php':
        $page_title = 'Dashboard';
        break;
    case 'tagihan_bendahara.php':
        $page_title = 'Tagihan';
        break;
    case 'pembayaran_warga.php':
        $page_title = 'Pembayaran Warga';
        break;
    case 'pengajuan.php':
        $page_title = 'Pengajuan';
        break;
    default:
        $page_title = 'KASKU';
        break;
}
?>

<div class="header">
    <div class="d-flex align-items-center header-left">
        <img src="../img/kasku.jpg" alt="Kasku Text" height="40">
    </div>
    <div class="center-title">
        <h2 class="page-title mb-0"><?= $page_title ?></h2>
    </div>
    <div class="d-flex align-items-center">
        <span class="me-2 text-secondary">Welcome, Bendahara</span>
        <i class="bi bi-person-circle fs-4 text-secondary"></i>
    </div>
</div>

<div class="sidebar">
    <img src="../img/kas.jpg" alt="Logo KASKU">
    <h4>KASKU</h4>
    <nav class="nav flex-column w-100 px-2">
        <a href="dashboard_bendahara.php" class="nav-link text-white d-flex align-items-center rounded px-3 <?= $current_page == 'dashboard_bendahara.php' ? 'active' : '' ?>">
            <i class="bi bi-house me-2"></i>
            <span>Dashboard</span>
        </a>

        <a href="tagihan_bendahara.php" class="nav-link text-white d-flex align-items-center rounded px-3 <?= $current_page == 'tagihan_bendahara.php' ? 'active' : '' ?>">
            <i class="bi bi-journal-text me-2"></i>
            <span>Tagihan</span>
        </a>

        <a href="pembayaran_warga.php" class="nav-link text-white d-flex align-items-center rounded px-3 <?= $current_page == 'pembayaran_warga.php' ? 'active' : '' ?>">
            <i class="bi bi-people me-2"></i>
            <span>Pembayaran Warga</span>
        </a>

        <a href="pengajuan.php" class="nav-link text-white d-flex align-items-center rounded px-3 <?= $current_page == 'pengajuan.php' ? 'active' : '' ?>">
            <i class="bi bi-journal-text me-2"></i>
            <span>Pengajuan</span>
        </a>

        <div class="mt-auto w-100">
            <a href="../index.php" class="nav-link logout-btn d-flex align-items-center justify-content-center rounded">
                <i class="bi bi-box-arrow-right me-2"></i>
                <span>Logout</span>
            </a>
        </div>
    </nav>
</div>
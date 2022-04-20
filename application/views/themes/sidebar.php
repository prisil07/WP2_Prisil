<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?= base_url('dashboard'); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    <a class="nav-link" href="<?= base_url('matakuliah'); ?>">
        <i class="fas fa-book-reader"></i>
        <span>Matakuliah</span></a>
    <a class="nav-link" href="<?= base_url('web'); ?>">
        <i class="far fa-newspaper"></i>
        <span>Artikel</span></a>
    <a class="nav-link" href="<?= base_url('sepatu'); ?>">
        <i class="fas fa-shoe-prints"></i>
        <span>Sepatu</span></a>
</li>
</ul>
<!-- End of Sidebar -->
 
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
 
    <!-- Main Content -->
    <div id="content">
 
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
 
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
 
            <ul class="navbar-nav ml-auto">
            </ul>
 
        </nav>
        <!-- End of Topbar -->
 
        <!-- Begin Page Content -->
        <div class="container-fluid">
 
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= $title_konten; ?></h1>
            </div>
            
<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <!-- <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link dropdown-toogle" href="#"<?php echo site_url('admin') ?>">
        <i class="fas fa-car"></i>
            <span>Kendaraan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/kendaraan/add') ?>">Kendaraan Baru</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/kendaraan') ?>">Daftar Kendaraan</a>
        </div>
    </li> -->

    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kendaraan' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-user-tie"></i>
            <span>Kendaraan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/kendaraan/add') ?>">Kendaraan Baru</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/kendaraan') ?>">Daftar Kendaraan</a>
        </div>
    </li>

    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'supir' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-user-tie"></i>
            <span>Supir</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/products/add') ?>">Supir Baru</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">Daftar SUpir</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/products/add') ?>">User Baru</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">Daftar User</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">        
        <i class="fas fa-retweet"></i>
            <span>Peminjaman</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-history"></i>
            <span>Riwayat Peminjaman</span>
        </a>
    </li>
    


</ul>

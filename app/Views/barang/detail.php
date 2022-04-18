<?php echo view('templates/v_header_user'); ?>
<?php echo view('templates/v_sidebar_user');; ?>
<?php echo view('templates/v_topbar_user'); ?>
<div class="container-fluid">
    <div class="col-md-8">
        <h2 class="mt-2">Detail Laporan</h2>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="card-body">
                    <h5 class="card-title">BKT: <?= $barang->BKT ?></h5>
                    <p class="card-text">Tanggal Input:<?= $barang->Tgl_Input ?></p>
                    <p class="card-text"> Jaringan: <?= $barang->IsJaringan ?></p>
                    <p class="card-text"> Software: <?= $barang->IsSoftware ?></p>
                    <p class="card-text"> Hardware: <?= $barang->IsHardware ?></p>
                    <p class="card-text"> No.User Pelapor: <?= $barang->Usr_Pelapor ?></p>
                    <p class="card-text"> No.User Teknisi: <?= $barang->Usr_Teknisi ?></p>
                    <p class="card-text"> Keterangan Pelapor: <?= $barang->Keterangan_Pelapor ?></p>
                    <p class="card-text"> Tanggal Penanganan: <?= $barang->Tgl_Penanganan ?></p>
                    <p class="card-text"> Keterangan Teknisi: <?= $barang->Keterangan_Teknisi ?></p>
                    <p class="card-text"> Status: <?= $barang->IsFinish ?></p>
                    <a href="<?= base_url(); ?>/barang/create2/<?= $barang->ID; ?>" class="btn btn-warning">Tangani</a>

                    <br><br>
                    <a class="nav-link" href="<?= base_url(); ?>/barang/index">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('templates/v_footer_user'); ?>
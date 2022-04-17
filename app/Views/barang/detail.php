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
                    <p class="card-text"> Hardware: <?= $barang->Keterangan_Pelapor ?></p>

                    <!-- <a href='/ci4/public/Mujahir/edit/<1?= $menu['SLUG']; ?>' class="btn btn-warning">Edit</a> -->

                    <form action="<?= base_url(); ?>/barang/delete/<?= $barang->ID; ?> " method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin?');">
                            Delete
                        </button>
                    </form>
                    <br><br>
                    <a class="nav-link" href="<?= base_url(); ?>/barang/index">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('templates/v_footer_user'); ?>
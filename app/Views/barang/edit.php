<?php echo view('templates/v_header_user'); ?>
<?php echo view('templates/v_sidebar_user'); ?>
<?php echo view('templates/v_topbar_user'); ?>
<div class="container-fluid">

    <form action="<?= base_url(); ?>/barang/tambahedit/<?= $barang->ID; ?>" method="post">
        <div class="form-group mb-0">
            <label for="BKT"></label>
            <input type="text" name="BKT" id="BKT" class="form-control" placeholder="Masukkan BKT">
        </div>
        <div class="form-group mb-0">
            <label for="Usr_Pelapor"></label>
            <input type="text" name="Usr_Pelapor" id="Usr_Pelapor" class="form-control" placeholder="Masukkan No. User">
        </div>
        <div class="form-group mb-0">
            <label for="Keterangan_Pelapor"></label>
            <input type="text" name="Keterangan_Pelapor" id="Keterangan_Pelapor" class="form-control" placeholder="Masukkan Keterangan">
        </div>

        <button type="submit" class="btn btn-primary" value="Submit">Ubah Data</button>
    </form>


    <?php echo view('templates/v_footer_user'); ?>
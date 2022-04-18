<?php echo view('templates/v_header_user'); ?>
<?php echo view('templates/v_sidebar_user'); ?>
<?php echo view('templates/v_topbar_user'); ?>
<div class="container-fluid">

    <form action="<?= base_url(); ?>/barang/tambah" method="post">
        <div class="form-group mb-0">
            <label for="BKT"></label>
            <input type="text" name="BKT" id="BKT" class="form-control" placeholder="Masukkan BKT">
        </div>
        <input type="checkbox" id="IsJaringan" name="IsJaringan" value=1>
        <label for="IsJaringan"> Jaringan </label><br>
        <input type="checkbox" id="IsSoftware" name="IsSoftware" value=1>
        <label for="IsSoftware"> Software </label><br>
        <input type="checkbox" id="IsHardware" name="IsHardware" value=1>
        <label for="IsJaringan"> Hardware </label><br><br>
        <div class="form-group mb-0">
            <label for="Usr_Pelapor"></label>
            <input type="text" name="Usr_Pelapor" id="Usr_Pelapor" class="form-control" placeholder="Masukkan No. User">
        </div>
        <div class="form-group mb-0">
            <label for="Keterangan_Pelapor"></label>
            <input type="text" name="Keterangan_Pelapor" id="Keterangan_Pelapor" class="form-control" placeholder="Masukkan Keterangan">

        </div>
        <button type="submit" class="btn btn-primary" value="Submit">Tambah Data</button>
    </form>


    <?php echo view('templates/v_footer_user'); ?>
<?php echo view('templates/v_header_user'); ?>
<?php echo view('templates/v_sidebar_user');; ?>
<?php echo view('templates/v_topbar_user'); ?>
<div class="container-fluid">


    <form action="<?= base_url(); ?>/barang/tambah2/<?= $barang->ID; ?>" method="post">
        <div class="form-group mb-0">
            <label for="BKT"></label>
            <input type="text" name="BKT" id="BKT" class="form-control" value=<?= $barang->BKT; ?> placeholder="Masukkan BKT" disabled>

        </div>
        <div class="form-group mb-0">
            <label for="Usr_Teknisi"></label>
            <input type="text" name="Usr_Teknisi" id="Usr_Teknisi" class="form-control" value=<?= $barang->Usr_Teknisi; ?> placeholder="Masukkan No. User Teknisi">
        </div>

        <div class="input-group mb-0">
            <label for="Tgl_Penanganan"></label>
            <input type="datetime-local" class="form-control pickdate date_range_filter" name="Tgl_Penanganan" id="Tgl_Penanganan" value=<?= $barang->Tgl_Penanganan; ?>>
            <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-calendar"></span></span>

        </div>

        <div class="form-group mb-0">
            <label for="Keterangan_Teknisi"></label>
            <input type="text" name="Keterangan_Teknisi" id="Keterangan_Teknisi" class="form-control" placeholder="Masukkan Keterangan">

        </div>
        <label for="IsFinish" name="IsFinish" id="IsFinish">Progress Laporan</label>
        <div class="select">
            <select id="IsFinish" name="IsFinish">
                <option value=1>Belum Dikerjakan</option>
                <option value=2>Pending Review</option>
                <option value=3>Sudah Selesai</option>

            </select>
            <span class="focus"></span>
        </div>
        <div class="modal-footer">
            <button type="submit" value="Submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </form>
</div>

</div>
</div>
</div>

</div>

<?php echo view('templates/v_footer_user'); ?>
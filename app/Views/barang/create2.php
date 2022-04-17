<?php echo view('templates/v_header_user'); ?>
<?php echo view('templates/v_sidebar_user');; ?>
<?php echo view('templates/v_topbar_user'); ?>
<div class="container-fluid">


    <form action="<?= '/tripilar/public/barang/tambah2'; ?>" method="post">
        <!-- <div class="form-group mb-0">
            <label for="BKT"></label>
            <input type="text" name="BKT" id="BKT" class="form-control" placeholder="Masukkan BKT">

        </div> -->
        <!-- <div class="form-group mb-0">
            <label for="IsJaringan"></label>
            <input type="text" name="IsJaringan" id="IsJaringan" class="form-control" placeholder="IsJaringan">

        </div> -->
        <!-- <div class="form-group mb-0">
            <label for="IsSoftware"></label>
            <input type="text" name="IsSoftware" id="IsSoftware" class="form-control" placeholder="Masukkan IsSoftware">
        </div> -->
        <!-- <div class="form-group mb-0">
            <label for="IsHardware"></label>
            <input type="text" name="IsHardware" id="IsHardware" class="form-control" placeholder="Masukkan IsSoftware">
        </div> -->

        <!-- <div class="form-group mb-0">
            <label for="Usr_Pelapor"></label>
            <input type="text" name="Usr_Pelapor" id="Usr_Pelapor" class="form-control" placeholder="Masukkan No. User">
        </div>
        <div class="form-group mb-0">
            <label for="Keterangan_Pelapor"></label>
            <input type="text" name="Keterangan_Pelapor" id="Keterangan_Pelapor" class="form-control" placeholder="Masukkan Keterangan">

        </div> -->


        <div class="form-group mb-0">
            <label for="Usr_Teknisi"></label>
            <input type="text" name="Usr_Teknisi" id="Usr_Teknisi" class="form-control" placeholder="Masukkan No. User Teknisi">

        </div>
        <div class="input-group">
            <label for="Tgl Penanganan"></label>
            <input type="datetime-local" class="form-control pickdate date_range_filter" name="Tgl_Penanganan" id="Tgl_Penanganan">
            <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-calendar"></span></span>

        </div>
        <div class="form-group mb-0">
            <label for="Keterangan_Teknisi"></label>
            <input type="text" name="Keterangan_Teknisi" id="Keterangan_Teknisi" class="form-control" placeholder="Masukkan Keterangan">

        </div>
        <!-- <div class="form-group mb-0">
            <label for="IsFinisih"></label>
            <input type="text" name="IsFinisih" id="IsFinisih" class="form-control" placeholder="Sudah selesai?">

        </div> -->
        <div class="checkbox-dropdown">
            Progress laporan
            <ul class="checkbox-dropdown-list">
                <li>
                    <label>
                        <input type="checkbox" value=1 name="IsFinisih" id="IsFinisih" />1</label>
                </li>
                <li>
                    <label>
                        <input type="checkbox" value=2 name="IsFinisih" id="IsFinisih" />2</label>
                </li>
                <li>
                    <label>
                        <input type="checkbox" value=3 name="IsFinisih" id="IsFinisih" />3</label>
                </li>
                <li>
                    <label>
                        <input type="checkbox" value=4 name="IsFinisih" id="IsFinisih" />4</label>
                </li>

            </ul>
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" value="Submit" class="btn btn-primary">Tambah Data</button>
</div>
</div>
</div>
</div>

</div>

<?php echo view('templates/v_footer_user'); ?>
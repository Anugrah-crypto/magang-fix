<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?= $judul; ?>
    </h1>

    <div class="container">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-12" style="margin-bottom: 20px">
                <div class="row">
                    <div class="col-md-2">
                        <span>Pilih dari tanggal</span>
                        <div class="input-group">
                            <input type="text" class="form-control pickdate date_range_filter" name="">
                            <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <span>Sampai tanggal</span>
                        <div class="input-group">
                            <input type="text" class="form-control pickdate date_range_filter2" name="">
                            <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?= base_url(); ?>/barang/create2" class="btn btn-primary btn-lg">Simpan Data</a>

            <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
            <table id='example'>
                <thead>
                    <tr>
                        <!-- <th>BKT</th> -->
                        <th>Tanggal Input</th>
                        <th>Jaringan</th>
                        <th>Software</th>
                        <th>Hardware</th>
                        <!-- <th> No.User</th>
                <th>Keterangan</th> -->
                        <th>No.Teknisi</th>
                        <th>Tanggal Penanganan</th>
                        <th>Keterangan Teknisi</th>
                        <th>Progress</th-->
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($barang as $b) : ?>
                        <tr>
                            <!-- <td><1?php echo $b['BKT']; ?></td> -->
                            <td><?php echo $b['Tgl_Input']; ?></td>
                            <td><?php echo $b['IsJaringan']; ?></td>
                            <td><?php echo $b['IsSoftware']; ?></td>
                            <td><?php echo $b['IsHardware']; ?></td>
                            <!-- <td><1?php echo $b['Usr_Pelapor']; ?></td>
                    <td><1?php echo $b['Keterangan_Pelapor']; ?></td> -->
                            <td><?php echo $b['Usr_Teknisi']; ?></td>
                            <td><?php echo $b['Tgl_Penanganan']; ?></td>
                            <td><?php echo $b['Keterangan_Teknisi']; ?></td>
                            <td><?php echo $b['IsFinish']; ?></td>
                            <td> <a href="<?= base_url(); ?>/barang/detail/<?= $b['ID']; ?>" class="btn btn-success">Detail</a>

                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    var table = $('#example').DataTable({
                        "order": [
                            [0, "desc"]
                        ],
                        "ordering": true
                    });

                    $.fn.dataTable.ext.search.push(
                        function(settings, data, dataIndex) {
                            var min = $('.date_range_filter').val();
                            var max = $('.date_range_filter2').val();
                            var createdAt = data[0]; // -> rubah angka 4 sesuai posisi tanggal pada tabelmu, dimulai dari angka 0
                            if (
                                (min == "" || max == "") ||
                                (moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max))
                            ) {
                                return true;
                            }
                            return false;
                        }
                    );
                    $('.pickdate').each(function() {
                        $(this).datepicker({
                            format: 'mm/dd/yyyy'
                        });
                    });
                    $('.pickdate').change(function() {
                        table.draw();
                    });
                });
            </script>
            <!--/div=-->

            <!-- Modal -->
        </div>
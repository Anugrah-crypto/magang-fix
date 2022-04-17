<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?= $judul; ?>
    </h1>
    <!-- Button trigger modal -->
    <a href="<?= base_url(); ?>/barang/create" class="btn btn-primary btn-lg">Tambah Data</a>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <table id='example'>
        <thead>
            <tr>
                <th>BKT</th>
                <th>Tanggal Input</th>
                <th>Jaringan</th>
                <th>Software</th>
                <th>Hardware</th>
                <th> No.User</th>
                <th>Keterangan</th>
                <!--th>No.Teknisi</th>
                <th>Tanggal Penangganan</th>
                <th>Keterangan Teknisi</th>
                <th>IsFinish</th-->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mlaporankerusakan as $b) : ?>
                <tr>
                    <td><?php echo $b['BKT']; ?></td>
                    <td><?php echo $b['Tgl_Input']; ?></td>
                    <td><?php echo $b['IsJaringan']; ?></td>
                    <td><?php echo $b['IsSoftware']; ?></td>
                    <td><?php echo $b['IsHardware']; ?></td>
                    <td><?php echo $b['Usr_Pelapor']; ?></td>
                    <td><?php echo $b['Keterangan_Pelapor']; ?></td>
                    <!--td><1?php echo $value['Usr_Teknisi'] ?></td>
                    <td><1?php echo $value['Tgl_Penanganan'] ?></td>
                    <td><1?php echo $value['Keterangan_Teknisi'] ?></td>
                    <td><!?php echo $value['IsFinisih'] ?-->
                    <!--/td-->

                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "order": [
                    [5, "asc"]
                ]
            });
        });
    </script>
    <!--/div=-->

    <!-- Modal -->
</div>
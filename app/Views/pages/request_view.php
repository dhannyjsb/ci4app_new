<div class="container-sm mt-3">
    <div class="row">
        <div class="col">
            <h1>List Request</h1>
            <table class="table table-striped table-dark">
        <thead class="bg-danger">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Toko</th>
                <th scope="col">Nama Toko</th>
                <th scope="col">Nik Request</th>
                <th scope="col">Nama Request</th>
                <th scope="col">Request</th>
                <th scope="col">Tanggal Request</th>
                <th scope="col">Status</th>

            </tr>
        </thead>
        <tbody>
        <?php foreach($request as $row):?>
            <tr>
                <td><?= $row['id'];?></td>
                <td><?= $row['kode_toko'];?></td>
                <td><?= $row['nama_toko'];?></td>
                <td><?= $row['nik'];?></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['nama_request'];?></td>
                <td><?= $row['tgl_request'];?></td>
                <td><?= $row['status'];?></td>
            </tr>
        <?php endforeach;?>
       

        </div>
    </div>
</div>
   
<div class="container pt-5">
        <div class="text-right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom:10px;">Request</button>
        </div>
 
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title" style="text-align: center;">DATA REQUEST</h4>
            </div>
 
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th scope="col">No Request</th>
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
                    
                        </tbody>
 
                    </table>
                </div>
            </div>
        </div>
    </div>
 
    <!--   Modal Tambah Data-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">REQUEST DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('request/add'); ?>">
                        <div class="form-group">
                            <label for="kode_toko" class="col-form-label">Kode Toko</label>
                            <input type="text" class="form-control" id="kode_toko" name="kode_toko" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="nama_toko" class="col-form-label">Nama Toko</label>
                            <input type="text" class="form-control" id="nama_toko" name="nama_toko">
                        </div>
                        <div class="form-group">
                            <label for="nik" class="col-form-label">Nik Request</label>
                            <input type="text" class="form-control" id="nik" name="nik">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama Request</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
             
                        <div class="form-group">
                            <label for="tgl_request" class="col-form-label">Tanggal Request</label>
                            <input disabled type="text" class="form-control" id="tgl_request" name="tgl_request" value="<?php echo date('d-m-Y') ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="nama_request" class="col-form-label">Request</label>
                            <select class="form-control" name="nama_request">
                                <option value="">---Pilih Request---</option>
                                <option value="FLAG_PDA">FLAG_PDA</option>
                                <option value="EDIT SO">EDIT SO</option>
                            </select>
                        </div>
                       
 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </body>
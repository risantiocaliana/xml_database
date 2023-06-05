<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD XML</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">CRUD XML MENGGUNAKAN PHP</h1>
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New</a>
      <?php 
       session_start();
       if(isset($_SESSION['message'])){
      ?>
      <div class="alert alert-info text-center" style="margin-top:20px;">
      <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
 
                    unset($_SESSION['message']);
                }
                function hitung_umur($tanggal_lahir){
                    list($year, $month, $day) = explode("-", $tanggal_lahir);
                    $year_diff = date("Y") - $year;
                    $month_diff = date("m") - $month;

                    if ($month_diff < 0) {
                        $year_diff--;
                
                    } elseif ($month_diff== 0){

                    }

                    return $year_diff;
                }
                
                
            ?>

<table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>TEMPAT_LAHIR</th>
                    <th>TGL_LAHIR</th>
                    <th>JEKEL</th>
                    <th>ALAMAT</th>
                    <th>AGAMA</th>
                    <th>STATUS_PRKAWINAN</th>
                    <th>PEKERJAAN</th>
                    <th>KEWARGANEGARAAN</th>
                    <th>STATUS_BERLAKU</th>
                    <th>UMUR</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    //load xml file
                    $file = simplexml_load_file('files/mahasiswa.xml');
 
                    foreach($file->user as $row){
                        ?>
                        <tr>
                            <td><?php echo $row->nik; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->tempat_lahir; ?></td>
                            <td><?php echo $row->tanggal_lahir; ?></td>
                            <td><?php echo $row->jekel; ?></td>
                            <td><?php echo $row->alamat; ?></td>
                            <td><?php echo $row->agama; ?></td>
                            <td><?php echo $row->status_perkawinan; ?></td>
                            <td><?php echo $row->pekerjaan; ?></td>
                            <td><?php echo $row->kewarganegaraan; ?></td>
                            <td><?php echo $row->status_berlaku; ?></td>
                            <td><?php echo hitung_umur ($row->tanggal_lahir); ?></td>

                            <td>
<a href="#edit_<?php echo $row->id; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</a>
<a href="#delete_<?php echo $row->id; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                            </td>
                            <?php include('edit_delete_modal.php'); ?>
                        </tr>
                        <?php
                    }
 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('add_modal.php'); ?>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
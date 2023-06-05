<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
   <center><h4 class="modal-title" id="myModalLabel">TAMBAH DATA</h4></center>
            </div>
<div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">NIK:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="nik">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">NAMA:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="nama">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">TEMPAT_LAHIR:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="tempat_lahir">
					</div>
				</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">TGLLAHIR:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="tanggal_lahir">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">JEKEL:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="jekel">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">ALAMAT:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="alamat">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">AGAMA:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="agama">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">STATUS_PRKAWINAN:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="status_perkawinan">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">PEKERJAAN:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="pekerjaan">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">KEWARGANEGARAAN:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="kewarganegaraan">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">STATUS_BERLAKU:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="status_berlaku">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>
 
        </div>
    </div>
</div>
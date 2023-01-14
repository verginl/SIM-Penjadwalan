
<?php 
$perintah=new crud();
@$where="id_tiketrequestvisit=$_GET[id]";
$link="?menu=hc";
@$tgl=date('Y-m-d');
@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM qw_send_costumer where id_tiketrequestvisit='$_SESSION[id_tiketrequestvisit]'"));
@$table="tbl_histori";

@$table2="tbl_send_request_visit";
@$query="qw_histori_costumer";
@$query1="qw_send_costumer";
@$field=array(	'id_tiketrequestvisit'=>$_POST['id_tiketrequestvisit'],
				'no_tiket'=>$_POST['no_tiket'],
				'nama_pelanggan'=>$_POST['nama_pelanggan'],
				'alamat'=>$_POST['alamat'],
				'pic'=>$_POST['pic'],
				'id_infrastruktur'=>$_POST['infrastruktur'],
				'id_problem'=>$_POST['initial_problem'],
				'tgl_visit'=>$_POST['tgl_visit'],
				'note'=>$_POST['note'],
				'id_area'=>$_POST['area'],
				'id_service'=>$_POST['service'],
				'id_status'=>$_POST['status']);
		

if(isset($_POST['cancel'])){
	@$perintah->cancelvisit($table,$field,$where,$link);
	$perintah->hapus($table2,$where,$link);
}
if(isset($_GET['edit'])){
	@$edit=$perintah->edit($query1,$where);
	
}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../../css/vergi.css">
<link rel="stylesheet" href="../../css/dataTables.bootstrap.css" />
<link rel="stylesheet" href="../../css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="../../css/responsive.dataTables.min.css" />
<link href="../../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<meta charset="utf-8">
<title>Send Request Visiters</title>
</head>

<body><br>
<form method="post" name="testform">
 <?php if (@$_GET['id']==""){
	echo '<div class="alert alert-info">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Read This!</strong> Untuk Mengisi data, pilih data dari "Form Data Troubleshoot", lalu Go.
	</div>';

	  ?>


<?php }else{?>
<?php } ?>


<table class="table table-responsive" width="500">
<thead>
    		<tr class="tr">
        		<Th  colspan="4"><center><h4>Cancel Visit Single Costumer</h4></center></Th>
        	</tr>
        </thead>
  <tbody>
    <tr>
      <td>ID Tiket</td>
      <td>:</td>
      <td><input type="text" class="form-control" readonly placeholder="ID Harus Sesuai" name="id_tiketrequestvisit" value="<?php echo @$edit['id_tiketrequestvisit'] ?>"></td>
</tr>

<tr>
      <td>No Tiket</td>
      <td>:</td>
      <td><input name="no_tiket" type="text" readonly  class="form-control" id="no_tiket" placeholder="Nomer Tiket Harus Sesuai" value="<?php echo @$edit['no_tiket'] ?>"></td>
</tr>
<tr>
      <td>Nama Costumer</td>
      <td>:</td>
      <td><input type="text" class="form-control" readonly  placeholder="Nama Costumer Harus Sesuai" name="nama_pelanggan" value="<?php echo @$edit['nama_pelanggan'] ?>"></td>
</tr>

<tr>
      <td>Alamat</td>
      <td>:</td>
      <td>
<input type="text" name="alamat" readonly  class="form-control" id="alamat" placeholder="Masukkan Alamat" value="<?php echo @$edit['alamat'] ?>">

      </td>
</tr>
<tr>
      <td>PIC</td>
      <td>:</td>
      <td><input type="text" class="form-control"  readonly  placeholder="Masukan Pic" name="pic" value="<?php echo @$edit['pic'] ?>"></td>
</tr>
<tr>
      <td>Infrastruktur</td>
      <td>:</td>
      <td><select name="infrastruktur" class="form-control"   >
        <option value="<?php echo @$edit ['id_infrastruktur'] ?>"> <?php echo @$edit ['infrastruktur']?> </option>
</select>
   </td>
   </tr>

<tr>
      <td>Initial Problem</td>
      <td>:</td>
      <td><select name="initial_problem" class="form-control"   >
        <option value="<?php echo @$edit ['id_problem'] ?>"> <?php echo @$edit ['initial_problem']?> </option>
  
   </select>
   </td>
</tr>
<tr>
      <td>Area</td>
      <td>:</td>
      <td><select name="area" class="form-control"   >
        <option value="<?php echo @$edit ['id_area'] ?>"> <?php echo @$edit ['area']?> </option>
        
   </select></td>
</tr>
<tr>
      <td>Sevice</td>
      <td>:</td>
      <td><select name="service" class="form-control"   >
        <option value="<?php echo @$edit ['id_service'] ?>"> <?php echo @$edit ['service']?> </option>
        
   </select></td>
</tr>
<tr>
      <td>Tanggal Visit</td>
      <td>:</td>
      <td><div class="form-group">
                <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input size="16" name="tgl_visit" type="text" required class="form-control" id="tgl_visit" placeholder="Tanggal Lahir" readonly value="<?php echo @$edit['tgl_visit'] ?>" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
          </div></td>
</tr>
<tr>
      <td>Status</td>
      <td>:</td>
      <td><select name="status" class="form-control" required>
        <option value="<?php echo @$edit ['id_status'] ?>"> <?php echo @$edit ['status']?> </option>
    <?php 
   $b= $perintah ->tampil("tbl_status");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['0']?>" > <?php echo $value['1'] ?></option>
   <?php } ?>
   </select>
   </td>
</tr>
<tr>
      <td>Note</td>
      <td>:</td>
      <td>
<input type="text" name="note" class="form-control" id="note" placeholder="Masukkan Personal Note" value="<?php echo @$edit['note'] ?>"></textarea>

      </td>
      </tr>
      <tr>
<td align="right" colspan="4">
<input class="btn btn-danger" type="submit" name="cancel" value="Cancel Visit">
</td>
</td>
</tr>
  </tbody>
</table>
<table id="example" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
<div class="container">
<div class="box-body table-responsive">
<thead>
<tr class="tr">
<th>No</th>
<th>Nomer Tiket</th>
<th>Nama Costumer</th>
<th>Alamat</th>
<th>PIC</th>
<th>Infrastruktur</th>
<th>Initial Problem</th>
<th>Area</th>
<th>Service</th>
<th>Tanggal Visit</th>
<th>Status</th>
<th>Note</th>
</tr>
</thead>
                    <?php
					$result = mysql_query("SELECT * FROM qw_histori_costumer");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>
<tr>
<td><?php echo $no?> </td>
<td><?php echo $row['no_tiket'] ?></td>
<td><?php echo $row['nama_pelanggan']?> </td>    
<td><?php echo $row['alamat'] ?></td>
<td><?php echo $row['pic'] ?></td>
<td><?php echo $row['infrastruktur']?> </td>    
<td><?php echo $row['initial_problem']?> </td>    
<td><?php echo $row['area'] ?></td>
<td><?php echo $row['service'] ?></td>
<td><?php echo $row['tgl_visit'] ?></td>
<td><?php echo $row['status'] ?></td>

<td><?php echo $row['note'] ?></td>

</tr>
<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	
</table>
</form>
<script type="text/javascript" src="../../js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="../../js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
</body>
</html>
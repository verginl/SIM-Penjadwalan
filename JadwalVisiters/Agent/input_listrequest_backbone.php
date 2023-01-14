<?php 
$perintah=new crud();
$table="tbl_list_backbone";
$query = "qw_list_backbone";
@$where="id_tiketbackbone = $_GET[id]";
$link="?menu=input_troubleshoot_backbone";
@$field=array(
	'id_problem_backbone'=>$_POST['initial_problem_backbone'],
				'id_area'=>$_POST['area'],
				'sub_area'=>$_POST['sub_area'],
				'subjek_email'=>$_POST['subjek_email'],
				'id_infrastruktur'=>$_POST['infrastruktur'],
								'id_level'=>$_POST['level'],
				'note'=>$_POST['note'],
				'tgl_visit'=>$_POST['tgl_visit']);


if(isset($_POST['simpan'])){
	$perintah->simpan($table,$field,$link);
}
if(isset($_GET['hapus'])){
$perintah->hapus($table,$where,$link);
}

if(isset($_GET['edit'])){
	@$edit=$perintah->edit($query,$where);
	
}
if(isset($_POST['ubah'])){
	@$perintah->ubah($table,$field,$where,$link);
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
<title>Input Request Visit</title>
</head>

<body><br>
<form method="post" >
<table class="table table-responsive" width="500">
<thead>
    		<tr class="tr">
        		<Th  colspan="4"><center><h4>INPUT DATA LIST REQUEST MULTIPLE</h4></center></Th>
        	</tr>
        </thead>
  <tbody>
 <tr>
      <td>ID Tiket</td>
      <td>:</td>
      <td><input type="text" class="form-control"  readonly  placeholder="ID Otomatis" name="id_tiketbackbone" value="<?php echo @$edit['id_tiketbackbone'] ?>"></td>
</tr>
<tr>
<tr>
      <td>Initial Problem</td>
      <td>:</td>
      <td><select name="initial_problem_backbone" class="form-control" required>
        <option value="<?php echo @$edit ['id_problem_backbone'] ?>"> <?php echo @$edit ['initial_problem_backbone']?> </option>
    <?php 
   $b= $perintah ->tampil("tbl_problem_backbone");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['0']?>" > <?php echo $value['1'] ?></option>
   <?php } ?>
   </select>
   </td>
</tr>
<tr>
      <td>Area</td>
      <td>:</td>
      <td><select name="area" class="form-control" required>
        <option value="<?php echo @$edit ['id_area'] ?>"> <?php echo @$edit ['area']?> </option>
    <?php 
   $b= $perintah ->tampil("tbl_area");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['0']?>" > <?php echo $value['1'] ?></option>
   <?php } ?>
   </select></td>
</tr>
<tr>
      <td>Sub Area</td>
      <td>:</td>
      <td><input name="sub_area" type="text" required class="form-control" id="sub_area" placeholder="Masukkan Sub Area" value="<?php echo @$edit['sub_area'] ?>"></td>
</tr>
<tr>
      <td>Subjek Email</td>
      <td>:</td>
      <td><input name="subjek_email" type="text" required class="form-control" id="no_tiket" placeholder="Masukkan Subjek Email" value="<?php echo @$edit['subjek_email'] ?>"></td>
</tr>

<tr>
      <td>Infrastruktur</td>
      <td>:</td>
      <td><select name="infrastruktur" class="form-control" required>
        <option value="<?php echo @$edit ['id_infrastruktur'] ?>"> <?php echo @$edit ['infrastruktur']?> </option>
    <?php 
   $b= $perintah ->tampil("tbl_infrastruktur");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['0']?>" > <?php echo $value['1'] ?></option>
   <?php } ?>
   </select>
   </td>
   </tr>
<tr>
      <td>Level</td>
      <td>:</td>
      <td><select name="level" class="form-control" required>
        <option value="<?php echo @$edit ['id_level'] ?>"> <?php echo @$edit ['level']?> </option>
    <?php 
   $b= $perintah ->tampil("tbl_level");
   	foreach ($b as $value){   ?>
   <option value="<?php echo $value['0']?>" > <?php echo $value['1'] ?></option>
   <?php } ?>
   </select>
   </td>
   </tr>
<tr>
<tr>

      <td>Note</td>
      <td>:</td>
      <td>
<textarea name="note" type="text" required class="form-control" id="alamat" placeholder="Masukkan Personal Note" value=""><?php echo @$edit['note'] ?></textarea>

      </td>
</tr>
<tr>
      <td>Tanggal Visit</td>
      <td>:</td>
      <td><div class="form-group">
                <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input size="16" name="tgl_visit" type="text" required class="form-control" id="tgl_visit" placeholder="Tanggal Vsiit" value="<?php echo @$edit['tgl_visit'] ?>" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
          </div></td>
</tr>
<td align="right" colspan="4">
 <?php if (@$_GET['id']==""){ ?>
<input class="btn btn-success" type="submit" name="simpan" value="Save">
<?php }else{?>
<input class="btn btn-success" type="submit" name="ubah" value="Update"> </td>
<?php }?></td>
</tr>
  </tbody>
</table>

<table id="example" class="display responsive nowrap table table-bordered" cellspacing="0" width="100%">
            <div class="container">
            <div class="box-body table-responsive">

                    <thead>
                        <tr class="tr">
<th>No</th>
<th>Sub Email</th>
<th>Tanggal Visit</th>
<th>Area</th>
<th>Initial Problem</th>
<th>Infrastruktur</th>
<th>Level</th>
<th>Sub Area</th>
<th>ID Tiket Backbone</th>
<th>Note</th>
<th>Action</th>
<th>Action</th>
                        </tr>
                    </thead>
                    <?php
					$result = mysql_query("SELECT * FROM qw_list_backbone");
					$no = 1;
                    while ($row = mysql_fetch_array($result)) {
						
                        ?>

                                            <tr>
<td><?php echo $no?> </td>    
<td><?php echo $row['subjek_email']?> </td>    
<td><?php echo $row['tgl_visit']?> </td>    
<td><?php echo $row['area']?> </td>    
<td><?php echo $row['initial_problem_backbone']?> </td>  
<td><?php echo $row['infrastruktur']?> </td>   
<td><?php echo $row['level']?> </td>  
<td><?php echo $row['sub_area']?> </td>   
<td><?php echo $row['id_tiketbackbone']?> </td>    
<td><?php echo $row['note']?> </td>   
<td width="100" align="center"><a href="?menu=itb&hapus&id=<?php echo @$row['id_tiketbackbone'] ?>" onClick="return confirm('Anda ingin menghapus ?')"><input  type="submit" name="hapus" value="Delete" class="btn btn-danger"></a></td>
	<td width="100" align="center"> <a href="?menu=itb&edit&id=<?php echo @$row['id_tiketbackbone'] ?>"><input  type="submit" name="edit" value="Edit" class="btn btn-info"></a></td>
            
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
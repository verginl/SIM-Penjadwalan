<?php 
$perintah=new crud();
$table="tbl_send_backbone";
$query="qw_list_backbone";
@$where="id_tiketbackbone=$_GET[id]";
@$where2="$_POST[id_karyawan]";
$link="?menu=send_tbs_backbone";
@$field=array(	'id_tiketbackbone'=>$_POST['id_tiketbackbone'],
				'id_problem_backbone'=>$_POST['initial_problem_backbone'],
				'id_area'=>$_POST['area'],
				'sub_area'=>$_POST['sub_area'],
				'subjek_email'=>$_POST['subjek_email'],
				'id_infrastruktur'=>$_POST['infrastruktur'],
								'id_level'=>$_POST['level'],
				'note'=>$_POST['note'],
				'tgl_visit'=>$_POST['tgl_visit'],
				'id_karyawan' => $_POST['nama_karyawan'],
				'nama_partner' => $_POST['nama_partner'],
				'id_jam'=> $_POST['jam_berangkat']);
@$tgl=date('Y-m-d');
@$tgl_visit="$_POST[tgl_visit]";
@$id_jam="$_POST[jam_berangkat]";
@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM qw_list_backbone where id_tiketbackbone='$_SESSION[id_tiketbackbone]'"));
@$table2="tbl_send_backbone";
@$query1="qw_send_backbone";
if(isset($_POST['simpan'])){
	@$perintah->simpanvisit($table,$where2,$field,$link);	
}
if(isset($_POST['ubah'])){
	@$perintah->ubah($table,$field,$where,$link);
}	
if(isset($_GET['edit'])){
	@$edit=$perintah->edit($query,$where);
	
}
if(isset($_GET['edit1'])){
	@$edit=$perintah->edit($query1,$where);
	
}
?>
<!doctype html>
<html>
<head>
<script type="text/javascript">
function AjaxFunction()
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
		  try
   			 		{
   				 httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    				}
  			catch (e)
    				{
    			try
      		{
      		httpxml=new ActiveXObject("Microsoft.XMLHTTP");
     		 }
    			catch (e)
      		{
      		alert("Your browser does not support AJAX!");
      		return false;
      		}
    		}
  }
function stateck() 
    {
    if(httpxml.readyState==4)
      {
//alert(httpxml.responseText);
var myarray = JSON.parse(httpxml.responseText);
// Remove the options from 2nd dropdown list 
for(j=document.testform.jam_berangkat.options.length-1;j>=0;j--)
{
document.testform.jam_berangkat.remove(j);
}


for (i=0;i<myarray.data.length;i++)
{
var optn = document.createElement("OPTION");
optn.text = myarray.data[i].jam_masuk;
optn.value = myarray.data[i].id_jam;  // You can change this to subcategory 
document.testform.jam_berangkat.options.add(optn);

} 
      }
    } // end of function stateck
	var url="dd.php";
var id_karyawan=document.getElementById('s1').value;
url=url+"?id_karyawan="+id_karyawan;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateck;
//alert(url);
httpxml.open("GET",url,true);
httpxml.send(null);
  }
</script>
<link rel="stylesheet" href="../../css/vergi.css">
<link rel="stylesheet" href="../../css/dataTables.bootstrap.css" />
<link rel="stylesheet" href="../../css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="../../css/responsive.dataTables.min.css" />
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
        		<Th  colspan="4"><center><h4>Send Request Visit Multiple</h4></center></Th>
        	</tr>
        </thead>
  <tbody>
    <tr>
      <td>ID Tiket</td>
      <td>:</td>
      <td><input type="text" class="form-control"  readonly  placeholder="ID Jangan Diubah" name="id_tiketbackbone" value="<?php echo @$edit['id_tiketbackbone'] ?>"  ></td>
</tr>

<tr>
      <td>Problem</td>
      <td>:</td>
      <td><select name="initial_problem_backbone" class="form-control"   >
        <option value="<?php echo @$edit ['id_problem_backbone'] ?>"> <?php echo @$edit ['initial_problem_backbone']?> </option>
 
   </select></td>
</tr>
<tr>
       <td>Area</td>
      <td>:</td>
      <td><select name="area" class="form-control"    >
        <option value="<?php echo @$edit ['id_area'] ?>"> <?php echo @$edit ['area']?> </option>
   </select></td>
</tr>

<tr>
      <td>Subjek Area</td>
      <td>:</td>
      <td>
<input type="text" name="sub_area" placeholder="Subjek Area" class="form-control" readonly value="<?php echo @$edit['sub_area'] ?>"  >
 
      </td>
</tr>
<tr>
      <td>Subjek Email</td>
      <td>:</td>
      <td>
<input type="text" readonly name="subjek_email"  class="form-control" id="alamat" placeholder="Subjek Email" value="<?php echo @$edit['subjek_email'] ?>"  >
</tr>
<tr>
      <td>Infrastruktur</td>
      <td>:</td>
      <td><select name="infrastruktur" class="form-control"    >
        <option value="<?php echo @$edit ['id_infrastruktur'] ?>"> <?php echo @$edit ['infrastruktur']?> </option>
   </select>
   </td>
   </tr>
   <tr>
      <td>Level</td>
      <td>:</td>
      <td><select name="level" class="form-control"    >
        <option value="<?php echo @$edit ['id_level'] ?>"> <?php echo @$edit ['level']?> </option>
   </select>
   </td>
   </tr>
<tr>
<tr>
      <td>Note</td>
      <td>:</td>
      <td>
      <textarea name="note" class="form-control" id="note" placeholder="Masukkan Personal Note"><?php echo @$edit['note'] ?></textarea>

      </td>

</tr>

<tr>
      <td>Tanggal Visit</td>
      <td>:</td>
      <td>
<input type="text" readonly name="tgl_visit" class="form-control" id="tgl_visit" placeholder="Tanggal Visit" value="<?php echo @$edit['tgl_visit'] ?>">

      </td>

</tr>
<tr>
      <td>Nama TS</td>
      <td>:</td>
      <td>
<select class="form-control" name=nama_karyawan id='s1' onchange=AjaxFunction(); required>
<option value="">Pilih Ts</option>
<?Php
require "config.php";// connection to database 
$sql="select * from qw_absen_detail where tgl_absen = '$tgl' group by id_karyawan"; // Query to collect data from table 
foreach ($dbo->query($sql) as $row) {
echo "<option value=$row[id_karyawan]>$row[nama_karyawan]</option>";
}

?></td>
</tr>
<tr>
      <td>Nama Partner</td>
      <td>:</td>
      <td><input size="16" name="nama_partner" type="text" class="form-control" id="nama_partner" placeholder="Nama Partner Visit" value="<?php echo @$edit['nama_partner'] ?>" >
</td>
</tr>
<tr>
<td>Jam Berangkat</td>
<td>:</td>
<td>
<select name=jam_berangkat id="s2" class="form-control" required ><option value="">Pilih Jam Berangkat</option></select>
</td>

</tr>

<td align="right" colspan="4">
<?php if (isset ($_GET['edit'])) { ?>
<input class="btn btn-success" type="submit" name="simpan" value="Save">
<?php }else { ?>
<input class="btn btn-success" type="submit" name="ubah" value="Update">
 </td>
<?php }?></td>
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
<th>Sub Email</th>
<th>Tanggal Visit</th>
<th>Area</th>
<th>Initial Problem</th>
<th>Infrastruktur</th>
<th>Level</th>
<th>Sub Area</th>
<th>ID Tiket Backbone</th>
<th>Note</th>
<th>Nama TS</th>
<th>Nama Partner</th>
<th>Jam Berangkat</th>


</tr>
</thead>
                    <?php
					$result = mysql_query("SELECT * FROM qw_send_backbone");
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
<td><?php echo $row ['nama_karyawan'] ?></td>
<td><?php echo $row ['nama_partner'] ?></td>
<td><?php echo $row ['jam_masuk'] ?></td>
</tr>
<?php  $no++;  }
					?>
		</div><!-- /.box-body -->
        </div>	
</table>
</form>
</body>
</html>
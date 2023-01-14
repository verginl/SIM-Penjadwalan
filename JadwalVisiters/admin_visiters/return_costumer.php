
<?php 
$perintah=new crud();
@$where="id_tiketrequestvisit=$_GET[id]";
$link="?menu=data_send_costumer";
@$tgl=date('Y-m-d');
@$tampil=mysql_fetch_array(mysql_query("SELECT *FROM qw_list_costumer where id_tiketrequestvisit='$_SESSION[id_tiketrequestvisit]'"));
@$table2="tbl_listrequest_visit";
@$query1="qw_send_costumer";
@$field2=array(	'id_tiketrequestvisit'=>$_POST['id_tiketrequestvisit'],
				'no_tiket'=>$_POST['no_tiket'],
				'nama_pelanggan'=>$_POST['nama_pelanggan'],
				'alamat'=>$_POST['alamat'],
				'pic'=>$_POST['pic'],
				'id_infrastruktur'=>$_POST['infrastruktur'],
				'id_problem'=>$_POST['initial_problem'],
				'tgl_visit'=>$_POST['tgl_visit'],
				'note'=>$_POST['note'],
				'id_area'=>$_POST['area'],
				'id_service'=>$_POST['service']);

if(isset($_POST['return'])){
	@$perintah->returnn($table2,$field2,$where,$link);
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
<link href="../../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<meta charset="utf-8">
<title>Send Request Visiters</title>
</head>

<body><br>
<form method="post" name="testform">

<table class="table table-responsive" width="500">
<thead>
    		<tr class="tr">
        		<Th  colspan="4"><center><h4>Return Data Single</h4></center></Th>
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
      <td>Note</td>
      <td>:</td>
      <td>
<input type="text" name="note" class="form-control" id="note" placeholder="Masukkan Personal Note" value="<?php echo @$edit['note'] ?>"></textarea>

      </td>
      </tr>
      <tr>
<td align="right" colspan="4">
<input class="btn btn-danger" type="submit" name="return" value="Return">
</td>
</td>
</tr>
  </tbody>
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
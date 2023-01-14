<?Php
@$cat_id=$_GET['id_karyawan'];
if(!is_numeric($cat_id)){
echo "Data Error";
exit;
 }
require "config.php";
$tgl=date('Y-m-d');
$sql="select jam_masuk ,id_jam from qw_absen_detail where id_karyawan= $cat_id and tgl_absen = '$tgl' ";
$row=$dbo->prepare($sql);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);

$main = array('data'=>$result);
echo json_encode($main);
?>
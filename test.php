<?php
$connect = mysqli_connect("localhost", "root", "", "klinik_kesehatan");
$no = "SELECT COUNT(no_pelayanan) as total FROM pelayanan WHERE MONTH(tgl_pelayanan) = '01'";
$result = mysqli_query($connect, $no);
$row = mysqli_fetch_array($result);
echo $row['total'];

$id = $row['no_pasien'] + 1;
$id_pasien = "PA" . $id;

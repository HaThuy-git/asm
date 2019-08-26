<?php 
$hostname= 'ec2-184-73-169-163.compute-1.amazonaws.com';
// username and password is the account of phpmyadmin
$username= 'jbkbbnprzowmds';
$password= 'c6dce3cbd5e39b2922e5a631f020f7843bb8ecf50a4232d14de6c6f1c249652c';
$dbname= 'd79pkm4gfki68u';
$port=5432;
function query($sql)
{
    global $hostname; // hàm truyền vào câu truy vấn mình muốn chạy 
    global $username;
    global $password;
    global $dbname;
    global $port;
$conn = new mysqli($hostname, $username, $password, $dbname, $port);
	if($conn-> connect_error)
   {
	// nếu như kết nối không thành công thì dừng chương trình 
	echo "Connection fail";
	//dừng chương trình
	die($conn-> connect_error);
   }
// chạy câu truy vấn lấy kết quả 
$result = $conn -> query($sql);
if(!$result)
   {
  //nếu không có kết quả ( $result = null ) thì dừng chương trình 
  echo "SQL excution fail";
  die ($conn -> error);
   }
// lấy tất cả các bản ghi từ kết quả 
$rows = mysqli_fetch_all($result);
return $rows;
}

<?php
    $DB_hostname = "localhost";
    $fcuDB_Name = "fcu";
    $DB_username = "fcu";
    $DB_password = "12345678";
    $fcuDB_conn = mysqli_connect($DB_hostname, $DB_username, $DB_password) or trigger_error(mysqli_error($fcuDB_conn),E_USER_ERROR); 
	mysqli_query($fcuDB_conn,"SET NAMES UTF8");
	session_start();
	//	Connection() ;
   	mysqli_select_db($fcuDB_conn,$fcuDB_Name); 	//切換目前資料庫

	$s01=$_GET["sid"];		        //取得POST參數 : sid
	$s02=$_GET["sname"];		    //取得POST參數 : sname
	$s03=$_GET["sdatetime"];	    //取得POST參數 : sdatetime
	$s04=$_GET["lat"];		        //取得POST參數 : lat
	$s05=$_GET["lon"];		        //取得POST參數 : roomid
	$s06=$_GET["hight"];		    //取得POST參數 : roomid
	$s07=$_GET["rain"];		        //取得POST參數 : roomid
	$s08=$_GET["minten"];		    //取得POST參數 : roomid
	$s09=$_GET["hourthree"];		//取得POST參數 : roomid
	$s10=$_GET["hoursix"];		    //取得POST參數 : roomid
	$s11=$_GET["hourtwelve"];		//取得POST參數 : roomid
	$s12=$_GET["hourtwentyfour"];   //取得POST參數 : roomid
	$s13=$_GET["nowr"];		        //取得POST參數 : roomid
	$s14=$_GET["cid"];		        //取得POST參數 : roomid
	$s15=$_GET["cname"];		    //取得POST參數 : roomid
	$s16=$_GET["tid"];		        //取得POST參數 : roomid
	$s17=$_GET["tname"];		    //取得POST參數 : roomid
	$sysdt = getdatetime() ;
	$ddt   = getdataorder() ;
	$ddt2  = getdataorder2() ;

	$sql= "INSERT INTO fcu.rain (dataorder, sid, sname, sdatetime, lat, lon, hight, rain, minten, hourthree, hoursix, hourtwelve, hourtwentyfour, nowr ,cid, cname, tid, tname) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', %d, %d, '%s', '%s', '%s', '%s', %d, '%s', '%s', '%s', '%s', '%s')" ;
	$sql = sprintf($sql,$ddt,$s01,$s02,$s03,$s04,$s05,$s06,$s07,$s08,$s09,$s10,$s11,$s12,$s13,$s14,$s15,$s16,$s17);

    echo "Insert: " + $sql;
	if (mysqli_query($fcuDB_conn,$sql))
		echo "DBGET Successful <br>" ;
	else
	    echo "DBGET Fail <br>" ;
	echo "<br>" ;

	mysqli_close($fcuDB_conn);		//關閉DBconnection
	
?>

<?php
    /* Defining a PHP Function */
    function getdataorder() {
        $dt   = getdate() ;
		$yyyy = str_pad($dt['year'],4,"0",STR_PAD_LEFT);
		$mm   = str_pad($dt['mon'] ,2,"0",STR_PAD_LEFT);
		$dd   = str_pad($dt['mday'] ,2,"0",STR_PAD_LEFT);
		$hh   = str_pad($dt['hours'] ,2,"0",STR_PAD_LEFT);
		$min  = str_pad($dt['minutes'] ,2,"0",STR_PAD_LEFT);
		$sec  = str_pad($dt['seconds'] ,2,"0",STR_PAD_LEFT);
		return ($yyyy.$mm.$dd.$hh.$min.$sec);
    }

    function getdataorder2() {
        $dt   = getdate() ;
	    $yyyy = str_pad($dt['year'],4,"0",STR_PAD_LEFT);
	    $mm   = str_pad($dt['mon'] ,2,"0",STR_PAD_LEFT);
	    $dd   = str_pad($dt['mday'] ,2,"0",STR_PAD_LEFT);
	    $hh   = str_pad($dt['hours'] ,2,"0",STR_PAD_LEFT);
	    $min  = str_pad($dt['minutes'] ,2,"0",STR_PAD_LEFT);
	    return ($yyyy.$mm.$dd.$hh.$min)  ;
    }
    function getdatetime() {
        $dt   = getdate() ;
	    $yyyy = str_pad($dt['year'],4,"0",STR_PAD_LEFT);
	    $mm   = str_pad($dt['mon'] ,2,"0",STR_PAD_LEFT);
	    $dd   = str_pad($dt['mday'] ,2,"0",STR_PAD_LEFT);
	    $hh   = str_pad($dt['hours'] ,2,"0",STR_PAD_LEFT);
	    $min  = str_pad($dt['minutes'] ,2,"0",STR_PAD_LEFT);
	    $sec  = str_pad($dt['seconds'] ,2,"0",STR_PAD_LEFT);
	    return ($yyyy.$mm.$dd.$hh.$min.$sec)  ;
    }
?>

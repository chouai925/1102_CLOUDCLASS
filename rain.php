<?php
   	include('../Connections/iot.php');	//使用資料庫的呼叫程式
		//	Connection() ;
   	
		mysqli_select_db($iot,$database_iot); 	//切換目前資料庫

	$s01=$_GET["sid"];		//取得POST參數 : roomid
	$s02=$_GET["sname"];		//取得POST參數 : roomid
	$s03=$_GET["sdatetime"];		//取得POST參數 : roomid
	$s04=$_GET["lat"];		//取得POST參數 : roomid
	$s05=$_GET["lon"];		//取得POST參數 : roomid
	$s06=$_GET["hight"];		//取得POST參數 : roomid
	$s07=$_GET["rain"];		//取得POST參數 : roomid
	$s08=$_GET["minten"];		//取得POST參數 : roomid
	$s09=$_GET["hourthree"];		//取得POST參數 : roomid
	$s10=$_GET["hoursix"];		//取得POST參數 : roomid
	$s11=$_GET["hourtwelve"];		//取得POST參數 : roomid
	$s12=$_GET["hourtwentyfour"];		//取得POST參數 : roomid
	$s13=$_GET["nowr"];		//取得POST參數 : roomid
	$s14=$_GET["cid"];		//取得POST參數 : roomid
	$s15=$_GET["cname"];		//取得POST參數 : roomid
	$s16=$_GET["tid"];		//取得POST參數 : roomid
	$s17=$_GET["tname"];		//取得POST參數 : roomid
	$sysdt = getdatetime() ;
	$ddt = getdataorder() ;
	$ddt2 = getdataorder2() ;

// http://localhost:8088/fcu/opendata/rainadd.php?f01='C0C630'&f02='大溪'&f03='2020-03-03 22:01:00'&f04=24.884722&f05=121.256944&f06=209.0&f07=64&f08=1.2&f09=18.1&f10=8.4&f11=995.5&f12=0.0&f13='08'&f14='桃園市'&f15='060'&f16='大溪區'

//INSERT INTO fcu.environment (dataorder, sid, sname, sdatetime, lat, lon, hight, wdir, wspeed, temp, humid, bar, rain, cid, cname, tid, tname) VALUES ('%s', %s, %s, %s, %s, %s, %d, %d, %s, %s, %s, %s, %d, %s, %s, %s, %s)
	$q1= "INSERT INTO fcu.rain (dataorder, sid, sname, sdatetime, lat, lon, hight, rain, minten, hourthree, hoursix, hourtwelve, hourtwentyfour, nowr ,cid, cname, tid, tname) VALUES ('%s', %s, %s, %s, %s, %s, %d, %d, %s, %s, %s, %s, %d, %s, %s, %s, %s, %s)" ;
// 	$q2="update fcu.cwbsite set dataorder = '%s', lat= %f, lon = %f, sdatetime = %s, hight = %d , wdir = %d , wspeed = %f, temp = %f, humid = %f, bar = %f, rain = %f  where sid = %s" ;
	$query = sprintf($q1,$ddt,$s01,$s02,$s03,$s04,$s05,$s06,$s07,$s08,$s09,$s10,$s11,$s12,$s13,$s14,$s15,$s16,$s17);
// 	$query2 = sprintf($q2,$ddt,$s04,$s05,$s03,$s06,$s07,$s08,$s09,$s10,$s11,$s12,$s01);

	echo $query ;
	echo "<br>" ;
	echo $query2 ;
	echo "<br>" ;

	if (mysqli_query($iot,$query))
		{
				echo "Successful <br>" ;
		}
		else
		{
				echo "Fail <br>" ;
		}
		
			;			//執行SQL語法
	echo "<br>" ;

	if (mysqli_query($iot,$query2))
		{
				echo "Successful <br>" ;
		}
		else
		{
				echo "Fail <br>" ;
		}
		
			;			//執行SQL語法
	echo "<br>" ;

	mysqli_close($iot);		//關閉Query
	


?>


    <?php
         /* Defining a PHP Function */
         function getdataorder() {
           $dt = getdate() ;
				$yyyy =  str_pad($dt['year'],4,"0",STR_PAD_LEFT);
				$mm  =  str_pad($dt['mon'] ,2,"0",STR_PAD_LEFT);
				$dd  =  str_pad($dt['mday'] ,2,"0",STR_PAD_LEFT);
				$hh  =  str_pad($dt['hours'] ,2,"0",STR_PAD_LEFT);
				$min  =  str_pad($dt['minutes'] ,2,"0",STR_PAD_LEFT);
				$sec  =  str_pad($dt['seconds'] ,2,"0",STR_PAD_LEFT);

			return ($yyyy.$mm.$dd.$hh.$min.$sec)  ;
         }
         function getdataorder2() {
           $dt = getdate() ;
				$yyyy =  str_pad($dt['year'],4,"0",STR_PAD_LEFT);
				$mm  =  str_pad($dt['mon'] ,2,"0",STR_PAD_LEFT);
				$dd  =  str_pad($dt['mday'] ,2,"0",STR_PAD_LEFT);
				$hh  =  str_pad($dt['hours'] ,2,"0",STR_PAD_LEFT);
				$min  =  str_pad($dt['minutes'] ,2,"0",STR_PAD_LEFT);

			return ($yyyy.$mm.$dd.$hh.$min)  ;
         }
         function getdatetime() {
           $dt = getdate() ;
				$yyyy =  str_pad($dt['year'],4,"0",STR_PAD_LEFT);
				$mm  =  str_pad($dt['mon'] ,2,"0",STR_PAD_LEFT);
				$dd  =  str_pad($dt['mday'] ,2,"0",STR_PAD_LEFT);
				$hh  =  str_pad($dt['hours'] ,2,"0",STR_PAD_LEFT);
				$min  =  str_pad($dt['minutes'] ,2,"0",STR_PAD_LEFT);
				$sec  =  str_pad($dt['seconds'] ,2,"0",STR_PAD_LEFT);

			return ($yyyy.$mm.$dd.$hh.$min.$sec)  ;
         }
		

      ?>
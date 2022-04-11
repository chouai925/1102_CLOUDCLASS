

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
         function getdataorderten() {
           $dt = getdate() ;
				$yyyy =  str_pad($dt['year'],4,"0",STR_PAD_LEFT);
				$mm  =  str_pad($dt['mon'] ,2,"0",STR_PAD_LEFT);
				$dd  =  str_pad($dt['mday'] ,2,"0",STR_PAD_LEFT);
				$hh  =  str_pad($dt['hours'] ,2,"0",STR_PAD_LEFT);
				$min  =  str_pad((integer)($dt['minutes']/10) ,1,"0",STR_PAD_LEFT);

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

			return ($yyyy."/".$mm."/".$dd." ".$hh.":".$min.":".$sec)  ;
         }
		
         function trandatetime0($dt) 
		 {
			 	//2021-05-06 09:39:42
				$yyyy =  substr($dt,0,4);
				$mm  =   substr($dt,5,2);
				$dd  =   substr($dt,8,2);
				$hh  =   substr($dt,11,2);
				$min  =   substr($dt,14,2);
				$sec  =   substr($dt,17,2);

			return ($yyyy.$mm.$dd.$hh.$min.$sec)  ;
         }		

         function trandatetime($dt) {
				$yyyy =  substr($dt,0,4);
				$mm  =   substr($dt,4,2);
				$dd  =   substr($dt,6,2);
				$hh  =   substr($dt,8,2);
				$min  =   substr($dt,10,2);
				$sec  =   substr($dt,12,2);

			return ($yyyy."/".$mm."/".$dd." ".$hh.":".$min)  ;
		 }
         function trandatetime2($dt) {
				$yyyy =  substr($dt,0,4);
				$mm  =   substr($dt,4,2);
				$dd  =   substr($dt,6,2);
				$hh  =   substr($dt,8,2);
				$min  =   substr($dt,10,2);
				$sec  =   substr($dt,12,2);

			return ($mm."/".$dd." ".$hh.":".$min)  ;
		 }

         function trandatetime3($dt) {
				$yyyy =  substr($dt,0,4);
				$mm  =   substr($dt,4,2);
				$dd  =   substr($dt,6,2);
				$hh  =   substr($dt,8,2);
				$min  =   substr($dt,10,2);
				$sec  =   substr($dt,12,2);

			return ($mm."/".$dd." <br>".$hh.":".$min)  ;
		 }
         function trandatetime4($dt) {
				$yyyy =  substr($dt,0,4);
				$mm  =   substr($dt,4,2);
				$dd  =   substr($dt,6,2);
				$hh  =   substr($dt,8,2);
				$min  =   substr($dt,10,2);
				$sec  =   substr($dt,12,2);

			return ($mm."/".$dd."  ".$hh.":".$min)  ;
		 }

		function uniztime2datetime($udt)
		{
			return date("Y-m-d H:i:s", $udt);	
		}
		 
?>

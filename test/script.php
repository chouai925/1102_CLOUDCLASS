<?php

    # This script is for testing functions from given demo file.

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


    echo "getdatetime() -> ".getdatetime()."<br><br>";

    echo "getdataorder() -> ".getdataorder()."<br><br>";

    echo "getdataorder2() -> ".getdataorder2()."<br><br>";
    
?>
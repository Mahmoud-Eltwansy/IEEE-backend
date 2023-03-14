<?php 
function check_status($a, $b, $c) {
    if(gettype($a)=="integer"){
        $age=$a;
        if(gettype($b)=="string"){
            $name=$b;
            $status=$c;
        }
        elseif(gettype($b)=="boolean"){
            $name=$c;
            $status=$b;
        }
    }    
    elseif(gettype($b)=="integer"){
        $age=$b;
        if(gettype($a)=="string"){
            $name=$a;
            $status=$c;
        }
        elseif(gettype($a)=="boolean"){
            $name=$c;
            $status=$a;
        }
    }
    else{
        $age=$c;
        if(gettype($a)=="string"){
            $name=$a;
            $status=$b;
        }
        elseif(gettype($a)=="boolean"){
            $name=$b;
            $status=$a;
        }
    }
    if($status==true)
        return "Hello $name, Your Age Is $age, You Are Available For Hire";
    else
        return "Hello $name, Your Age Is $age, You Are Not Available For Hire";

  }
  
  // Needed Output
//   echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
//   echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
//   echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
  
?>
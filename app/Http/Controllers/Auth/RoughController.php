<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rough1;

class RoughController extends Controller
{
    //
    public function index(Request $request){

// Read the variables sent via POST from our API

$sessionId   = $request->input('sessionId');
$serviceCode =  $request->input('serviceCode');
$phoneNumber =  $request->input('phoneNumber');
$text        =  $request->input('text');


$level_1 = 0;
$level_2 = 0;
$level_3 = 0;
$level_4 = 0;
$level_5 = 0;
$level_6 = 0;
$level_7 = 0;


if ($text == "") {
    // This is the first request. Note how we start the response with CON
   $response  = "CON Karibu kupata msaada wa ukatili na unyanyasaji \n";
   $response .= "1. Toa taarifa zako husika \n";
   $response .= "2. Msaada wa haraka";


}

//umechagua toa taarifa

else if ($text == "1") {
    // Business logic for first level response
   $response = "CON Umri ulionao \n";
   $level_1 = 1;
   $response .= "1. miaka chini ya 8  \n";
   $response .= "2. miaka 8- 17 \n";
   $response .= "3. miaka 18-24  \n";
   $response .= "4. miaka 25 na zaidi \n";

}

//ukiwa umeshachagua umri  miaka chini ya 8
// select gender
 else if ($text == "1*1") {
    $response = "CON Jinsia yako \n";
    $level_2 = 1;
    $response .= "1. mme \n";
    $response .= "2. mke" ;
}

else if ($text == "1*2") {

    $response = "CON Jinsia yako \n";
   $level_2 = 2;
    $response .= "1. mme \n";
    $response .= "2. mke" ;
}

else if ($text == "1*3") {

    $response = "CON Jinsia yako \n";
    $level_2 = 3;
    $response .= "1. mme \n";
    $response .= "2. mke" ;
}

else if ($text == "1*4") {
    $response = "CON Jinsia yako \n";
    $level_2 = 4;
    $response .= "1. mme \n";
    $response .= "2. mke" ;
}




//umeshachagua jinsia
else if ($text == "1*1*1") {
    $response = "CON Chagua wilaya unayoishi \n";
   $level_3 = 1;
    $response .= "1. Kinondoni \n";
    $response .= "2. Ilala \n";
    $response .= "3. Kigamboni \n";
    $response .= "4. Temeke \n";
    $response .= "5. Ubungo\n";
 }

else if ($text == "1*1*2") {
    $response = "CON Chagua wilaya unayoishi \n";
    $level_3 = 2;
    $response .= "1. Kinondoni \n";
    $response .= "2. Ilala \n";
    $response .= "3. Kigamboni \n";
    $response .= "4. Temeke \n";
    $response .= "5. Ubungo\n";
}

else if ($text == "1*2*1") {
    $response = "CON Chagua wilaya unayoishi \n";
   $level_3 = 1;
    $response .= "1. Kinondoni \n";
    $response .= "2. Ilala \n";
    $response .= "3. Kigamboni \n";
    $response .= "4. Temeke \n";
    $response .= "5. Ubungo\n";
}

else if ($text == "1*2*2") {
    $response = "CON Chagua wilaya unayoishi \n";
    $level_3 = 2;
    $response .= "1. Kinondoni \n";
    $response .= "2. Ilala \n";
    $response .= "3. Kigamboni \n";
    $response .= "4. Temeke \n";
    $response .= "5. Ubungo\n";
}


else if ($text == "1*3*1") {
    $response = "CON Chagua wilaya unayoishi \n";
   $level_3 = 1;
    $response .= "1. Kinondoni \n";
    $response .= "2. Ilala \n";
    $response .= "3. Kigamboni \n";
    $response .= "4. Temeke \n";
    $response .= "5. Ubungo\n";
}

else if ($text == "1*3*2") {
    $response = "CON Chagua wilaya unayoishi \n";
    $level_3 = 2;
    $response .= "1. Kinondoni \n";
    $response .= "2. Ilala \n";
    $response .= "3. Kigamboni \n";
    $response .= "4. Temeke \n";
    $response .= "5. Ubungo\n";
 }

else if ($text == "1*4*1") {
    $response = "CON Chagua wilaya unayoishi \n";
   $level_3 = 1;
    $response .= "1. Kinondoni \n";
    $response .= "2. Ilala \n";
    $response .= "3. Kigamboni \n";
    $response .= "4. Temeke \n";
    $response .= "5. Ubungo\n";
 }

 else if ($text == "1*4*2") {
    $response = "CON Chagua wilaya unayoishi \n";
    $level_3 = 2;
    $response .= "1. Kinondoni \n";
    $response .= "2. Ilala \n";
    $response .= "3. Kigamboni \n";
    $response .= "4. Temeke \n";
    $response .= "5. Ubungo\n";
}


//amechagua wilaya
else if ($text == "1*1*1*1") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 1;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }
 else if ($text == "1*1*1*2") {
     $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
     $level_4 = 2;
     $response .= "1. Ndio \n";
     $response .= "2. Hapana" ;

  }

  else if ($text == "1*1*1*3") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    $level_4 = 3;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*1*1*4") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    $level_4 = 4;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*1*1*5") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 5;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }



 else if ($text == "1*1*2*1") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 1;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }
 else if ($text == "1*1*2*2") {
     $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
     $level_4 = 2;
     $response .= "1. Ndio \n";
     $response .= "2. Hapana" ;

  }

  else if ($text == "1*1*2*3") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    $level_4 = 3;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*1*2*4") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    $level_4 = 4;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*1*2*5") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 5;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*2*1*1") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 1;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }
 else if ($text == "1*2*1*2") {
     $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
     $level_4 = 2;
     $response .= "1. Ndio \n";
     $response .= "2. Hapana" ;

  }

  else if ($text == "1*2*1*3") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    $level_4 = 3;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*2*1*4") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    $level_4 = 4;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*2*1*5") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 5;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*2*2*1") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 1;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }
 else if ($text == "1*2*2*2") {
     $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
     $level_4 = 2;
     $response .= "1. Ndio \n";
     $response .= "2. Hapana" ;

  }

  else if ($text == "1*2*2*3") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    $level_4 = 3;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*2*2*4") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    $level_4 = 4;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*2*2*5") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 5;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*3*1*1") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 1;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }
 else if ($text == "1*3*1*2") {
     $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
     //$level_4 = 2;
     $response .= "1. Ndio \n";
     $response .= "2. Hapana" ;

  }

  else if ($text == "1*3*1*3") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    $level_4 = 3;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*3*1*4") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    $level_4 = 4;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*3*1*5") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 5;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*3*2*1") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 1;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }
 else if ($text == "1*3*2*2") {
     $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
     $level_4 = 2;
     $response .= "1. Ndio \n";
     $response .= "2. Hapana" ;

  }

  else if ($text == "1*3*2*3") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    //$level_4 = 3;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*3*2*4") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    $level_4 = 4;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*3*2*5") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 5;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*4*1*1") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 1;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }
 else if ($text == "1*4*1*2") {
     $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
     $level_4 = 2;
     $response .= "1. Ndio \n";
     $response .= "2. Hapana" ;

  }

  else if ($text == "1*4*1*3") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    $level_4 = 3;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*4*1*4") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    $level_4 = 4;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*4*1*5") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 5;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*4*2*1") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 1;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }
 else if ($text == "1*4*2*2") {
     $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
     $level_4 = 2;
     $response .= "1. Ndio \n";
     $response .= "2. Hapana" ;

  }

  else if ($text == "1*4*2*3") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    $level_4 = 3;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*4*2*4") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
    $level_4 = 4;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }

 else if ($text == "1*4*2*5") {
    $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $level_4 = 5;
    $response .= "1. Ndio \n";
    $response .= "2. Hapana" ;

 }



//umechagua kama umewah au hujawah kutoa taarifa
else if ($text == "1*1*1*1*1") {
  $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
  $level_5 = 1;
  $response .= "1. kijinsia \n";
  $response .= "2. kimwili \n";
  $response .= "3. hisia";
 }

 else if ($text == "1*1*1*1*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";
   }

 else if ($text == "1*1*1*2*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";
  }


 else if ($text == "1*1*1*2*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";
  }

  else if ($text == "1*1*1*3*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*1*1*3*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*1*1*4*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*1*1*4*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*1*1*5*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*1*1*5*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*1*2*1*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*1*2*1*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*1*2*2*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

  }


  else if ($text == "1*1*2*2*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

  }

  else if ($text == "1*1*2*3*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*1*2*3*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*1*2*4*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*1*2*4*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }


 else if ($text == "1*1*2*5*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*1*2*5*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*2*1*1*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }


 else if ($text == "1*2*1*1*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }
 else if ($text == "1*2*1*2*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

  }

  else if ($text == "1*2*1*2*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

  }

  else if ($text == "1*2*1*3*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*2*1*3*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*2*1*4*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }


 else if ($text == "1*2*1*4*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }
 else if ($text == "1*2*1*5*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*2*1*5*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*2*2*1*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*2*2*1*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*2*2*2*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

  }

  else if ($text == "1*2*2*2*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

  }
  else if ($text == "1*2*2*3*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*2*2*3*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*2*2*4*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*2*2*4*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*2*2*5*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*2*2*5*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*3*1*1*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";
 }


 else if ($text == "1*3*1*1*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";
 }

 else if ($text == "1*3*1*2*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

  }

  else if ($text == "1*3*1*2*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

  }

  else if ($text == "1*3*1*3*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*3*1*3*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*3*1*4*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*3*1*4*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*3*1*5*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*3*1*5*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*3*2*1*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*3*2*1*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*3*2*2*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

  }

  else if ($text == "1*3*2*2*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

  }

  else if ($text == "1*3*2*3*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*3*2*3*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }


 else if ($text == "1*3*2*4*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }


 else if ($text == "1*3*2*4*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }
 else if ($text == "1*3*2*5*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*3*2*5*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*4*1*1*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";
 }

 else if ($text == "1*4*1*1*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*4*1*2*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

  }

  else if ($text == "1*4*1*2*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

  }

  else if ($text == "1*4*1*3*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*4*1*3*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*4*1*4*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*4*1*4*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }


 else if ($text == "1*4*1*5*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*4*1*5*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*4*2*1*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*4*2*1*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*4*2*2*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

  }

  else if ($text == "1*4*2*2*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

  }

  else if ($text == "1*4*2*3*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";
 }

 else if ($text == "1*4*2*3*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";
 }


 else if ($text == "1*4*2*4*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }

 else if ($text == "1*4*2*4*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }


 else if ($text == "1*4*2*5*1") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 1;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }
 else if ($text == "1*4*2*5*2") {
    $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
    $level_5 = 2;
    $response .= "1. kijinsia \n";
    $response .= "2. kimwili \n";
    $response .= "3. hisia";

 }






// umechagua ndio au hapana

else if ($text == "1*1*1*1*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;
 }

 else if ($text == "1*1*1*1*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;
 }

 else if ($text == "1*1*1*1*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;
 }


 else if ($text == "1*1*1*1*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;
 }

 else if ($text == "1*1*1*1*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;
 }

 else if ($text == "1*1*1*1*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;
 }

 else if ($text == "1*1*1*2*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;
  }

  else if ($text == "1*1*1*2*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;
  }

  else if ($text == "1*1*1*2*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;
  }

 else if ($text == "1*1*1*2*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;
  }

  else if ($text == "1*1*1*2*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;
  }

  else if ($text == "1*1*1*2*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;
  }

  else if ($text == "1*1*1*3*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;

 }

 else if ($text == "1*1*1*3*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;

 }

 else if ($text == "1*1*1*3*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;

 }

 else if ($text == "1*1*1*3*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;

 }

 else if ($text == "1*1*1*3*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;

 }

 else if ($text == "1*1*1*3*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;

 }

 else if ($text == "1*1*1*4*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;

 }

 else if ($text == "1*1*1*4*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;

 }

 else if ($text == "1*1*1*4*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;

 }

 else if ($text == "1*1*1*4*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;
 }

 else if ($text == "1*1*1*4*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;
 }

 else if ($text == "1*1*1*4*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;
 }

 else if ($text == "1*1*1*5*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;

 }

 else if ($text == "1*1*1*5*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;

 }

 else if ($text == "1*1*1*5*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;

 }

 else if ($text == "1*1*1*5*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;

 }

 else if ($text == "1*1*1*5*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;

 }

 else if ($text == "1*1*1*5*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine" ;

 }

 else if ($text == "1*1*2*1*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*1*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*1*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }


 else if ($text == "1*1*2*1*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*1*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*1*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*2*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*1*2*2*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*1*2*2*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*1*2*2*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*1*2*2*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*1*2*2*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*1*2*3*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*3*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*3*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*3*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*3*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*3*2*2")  {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*4*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*1*2*4*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*1*2*4*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*1*2*4*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*4*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*4*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*5*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*1*2*5*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*1*2*5*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }


 else if ($text == "1*1*2*5*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*5*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*1*2*5*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*1*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*1*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*1*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*1*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*1*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*1*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*2*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*2*1*2*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*2*1*2*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*2*1*2*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*2*1*2*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*2*1*2*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*2*1*3*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*3*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*3*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*3*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*3*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*3*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*4*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*4*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*4*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*4*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*4*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*4*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*5*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*5*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }


 else if ($text == "1*2*1*5*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*1*5*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*2*1*5*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*2*1*5*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*2*2*1*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*2*2*1*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*2*2*1*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*2*2*1*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*2*1*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*2*1*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*2*2*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*2*2*2*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*2*2*2*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*2*2*2*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*2*2*2*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*2*2*2*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*2*2*3*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*2*2*3*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*2*2*3*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*2*2*3*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*2*3*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*2*3*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*2*4*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*2*2*4*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*2*2*4*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*2*2*4*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*2*4*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*2*4*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*2*5*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*2*5*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*2*5*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*2*5*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*2*5*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*2*2*5*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*1*1*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*1*1*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*1*1*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }


 else if ($text == "1*3*1*1*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*1*1*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*1*1*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*1*2*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*3*1*2*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*3*1*2*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*3*1*2*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*3*1*2*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*3*1*2*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*3*1*3*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*1*3*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*1*3*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*1*3*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*1*3*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*1*3*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }


 else if ($text == "1*3*1*4*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*1*4*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*1*4*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*1*4*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*1*4*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*1*4*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*1*5*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*1*5*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*1*5*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*1*5*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*1*5*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*1*5*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*2*1*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*2*1*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*2*1*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }


 else if ($text == "1*3*2*1*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*2*1*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*2*1*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }


 else if ($text == "1*3*2*2*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*3*2*2*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*3*2*2*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*3*2*2*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*3*2*2*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*3*2*2*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*3*2*3*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*2*3*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*2*3*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*2*3*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*2*3*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*2*3*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }


 else if ($text == "1*3*2*4*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }


 else if ($text == "1*3*2*4*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }


 else if ($text == "1*3*2*4*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*3*2*4*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*2*4*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*2*4*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*2*5*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*2*5*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*2*5*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*2*5*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*2*5*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*3*2*5*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }


 else if ($text == "1*4*1*1*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*1*1*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*1*1*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*1*1*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*4*1*1*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*4*1*1*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*4*1*2*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*4*1*2*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*4*1*2*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

  }

  else if ($text == "1*4*1*2*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
  }

  else if ($text == "1*4*1*2*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
  }

  else if ($text == "1*4*1*2*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
  }

  else if ($text == "1*4*1*3*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*1*3*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*1*3*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*1*3*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*1*3*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*1*3*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*1*4*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*1*4*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*1*4*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*1*4*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*4*1*4*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*4*1*4*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }


 else if ($text == "1*4*1*5*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }


 else if ($text == "1*4*1*5*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }


 else if ($text == "1*4*1*5*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*1*5*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*1*5*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*2*1*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*4*2*1*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*4*2*1*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*4*2*1*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*4*2*1*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }
 else if ($text == "1*4*2*1*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*4*2*2*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
  }

  else if ($text == "1*4*2*2*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
  }

  else if ($text == "1*4*2*2*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
  }

  else if ($text == "1*4*2*2*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
  }

  else if ($text == "1*4*2*2*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
  }

  else if ($text == "1*4*2*2*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
  }

  else if ($text == "1*4*2*3*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*2*3*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*2*3*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*2*3*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }


 else if ($text == "1*4*2*3*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }


 else if ($text == "1*4*2*3*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }


 else if ($text == "1*4*2*4*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*2*4*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*2*4*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }


 else if ($text == "1*4*2*4*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*2*4*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*2*4*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";
 }

 else if ($text == "1*4*2*5*1*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*4*2*5*1*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*4*2*5*1*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*4*2*5*2*1") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 1;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*4*2*5*2*2") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
    $level_6 = 2;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }

 else if ($text == "1*4*2*5*2*3") {
    $response = "CON Nani amekunyanyasa au kukukatili \n";
   $level_6 = 3;
    $response .= "1. Mzazi \n";
    $response .= "2. Mlezi \n";
    $response .= "3. mtu mwingine";

 }




// ending

else if ($text == "1*1*1*1*1*1*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    //$level_7 = 1;
}

else if ($text == "1*1*1*1*1*1*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    //$level_7 = 2;
}

else if ($text == "1*1*1*1*1*1*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    //$level_7 = 3;
}


else if ($text == "1*1*1*1*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*1*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*1*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*1*1*1*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*1*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*1*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*1*1*1*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*1*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*1*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*1*1*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*1*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*1*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*1*1*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*1*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*1*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*1*2*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*2*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*2*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*1*2*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*2*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*2*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*1*2*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*2*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*2*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*1*2*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*2*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*2*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}





else if ($text == "1*1*1*2*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*2*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*2*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*1*2*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*2*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*2*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*1*3*1*1*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}

else if ($text == "1*1*1*3*1*1*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}

else if ($text == "1*1*1*3*1*1*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*1*3*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*3*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*3*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*1*3*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*3*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*3*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*1*3*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*3*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*3*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}





else if ($text == "1*1*1*3*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*3*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*3*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}





else if ($text == "1*1*1*3*2*3*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}

else if ($text == "1*1*1*3*2*3*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}

else if ($text == "1*1*1*3*2*3*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*1*4*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*4*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*4*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}





else if ($text == "1*1*1*4*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*4*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*4*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}





else if ($text == "1*1*1*4*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*4*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*4*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*1*4*2*1*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*4*2*1*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*4*2*1*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*1*4*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*4*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*4*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}






else if ($text == "1*1*1*4*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}

else if ($text == "1*1*1*4*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*4*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*1*5*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*5*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*5*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}





else if ($text == "1*1*1*5*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}

else if ($text == "1*1*1*5*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}

else if ($text == "1*1*1*5*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}






else if ($text == "1*1*1*5*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*5*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*5*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*1*5*2*1*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*5*2*1*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*5*2*1*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*1*5*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*5*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*5*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}





else if ($text == "1*1*1*5*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*1*5*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*1*5*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}





else if ($text == "1*1*2*1*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*1*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*1*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}





else if ($text == "1*1*2*1*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*1*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*1*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}



else if ($text == "1*1*2*1*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*1*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*1*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*2*1*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*1*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 = 2;
}
else if ($text == "1*1*2*1*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}






else if ($text == "1*1*2*1*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*1*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*1*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}





else if ($text == "1*1*2*1*2*3*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*1*2*3*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*1*2*3*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}





else if ($text == "1*1*2*2*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*2*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*2*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*2*2*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*2*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*2*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*2*2*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*2*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*2*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*2*2*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*2*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*2*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*2*2*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*2*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*2*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*2*2*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*2*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*2*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*2*3*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*3*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*3*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}





else if ($text == "1*1*2*3*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*3*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*3*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*2*3*1*3*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*3*1*3*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*3*1*3*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*2*3*2*1*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*3*2*1*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*3*2*1*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*2*3*2*2*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*3*2*2*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*3*2*2*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*2*3*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*3*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*3*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*2*4*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*4*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*4*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*2*4*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*4*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*4*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*2*4*1*3*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*4*1*3*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*4*1*3*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*2*4*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*4*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*4*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*2*4*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*4*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*4*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*2*4*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*4*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*4*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*2*5*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*5*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*5*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*2*5*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*5*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*5*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*1*2*5*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*5*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*5*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*2*5*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*5*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*5*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*2*5*2*2*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*5*2*2*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*5*2*2*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*1*2*5*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*1*2*5*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*1*2*5*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*2*1*1*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*1*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*1*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*2*1*1*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*1*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*1*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*1*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*1*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*1*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*2*1*1*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}

else if ($text == "1*2*1*1*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}

else if ($text == "1*2*1*1*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*1*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*1*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*1*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*1*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}

else if ($text == "1*2*1*1*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}

else if ($text == "1*2*1*1*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*2*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*2*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*2*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*2*1*2*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*2*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*2*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*2*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*2*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*2*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*2*1*2*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*2*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*2*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*2*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*2*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*2*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*2*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}

else if ($text == "1*2*1*2*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}

else if ($text == "1*2*1*2*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*3*1*1*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*3*1*1*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*3*1*1*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*3*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}

else if ($text == "1*2*1*3*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}

else if ($text == "1*2*1*3*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*3*1*3*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*3*1*3*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*3*1*3*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*3*2*1*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*3*2*1*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*3*2*1*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*3*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*3*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*3*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*3*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*3*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*3*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*4*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*4*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*4*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*4*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}

else if ($text == "1*2*1*4*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}

else if ($text == "1*2*1*4*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*4*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*4*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*4*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*1*4*2*1*1"){
     $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*4*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
   $level_7 =2;
}
else if ($text == "1*2*1*4*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
   $level_7 =3;
}




else if ($text == "1*2*1*4*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*4*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*4*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*4*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*4*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*4*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*5*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*5*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*5*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*5*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*5*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*5*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*1*5*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*5*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*5*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*1*5*2*1*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*5*2*1*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*5*2*1*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*1*5*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*5*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*5*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*1*5*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*5*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*5*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*1*5*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*1*5*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*1*5*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*1*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*1*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*1*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*2*1*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*1*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*1*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*1*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*1*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*1*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*1*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*1*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*1*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*1*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*1*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*1*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*1*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*1*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*1*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*2*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*2*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*2*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*2*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*2*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*2*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*2*2*1*3*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*2*1*3*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*2*1*3*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*2*2*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*2*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*2*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*2*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}

else if ($text == "1*2*2*2*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*2*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*2*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*2*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*2*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*3*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*3*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*3*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*2*3*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*3*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*3*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*3*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*3*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*3*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*3*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*3*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*3*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*2*3*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*3*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*3*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}

else if ($text == "1*2*2*3*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*3*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*3*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*4*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*4*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*4*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*4*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*4*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*4*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*4*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*4*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*4*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*4*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*4*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*4*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*4*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*4*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*4*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*2*4*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*4*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*4*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*5*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*5*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*5*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*5*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*5*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*5*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*5*1*3*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*5*1*3*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*5*1*3*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*2*2*5*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*5*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*5*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*5*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*5*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*5*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*2*2*5*2*3*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*2*2*5*2*3*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*2*2*5*2*3*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*1*1*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*1*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*1*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*1*1*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*1*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*1*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*1*1*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*1*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*1*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*1*1*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*1*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*1*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*1*1*2*2*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*1*2*2*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*1*2*2*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*1*1*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*1*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*1*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*1*2*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*2*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*2*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*1*2*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}

else if ($text == "1*3*1*2*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}

else if ($text == "1*3*1*2*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}

else if ($text == "1*3*1*2*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*2*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*2*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*1*2*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*2*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*2*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*1*2*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*2*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*2*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*1*2*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*2*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*2*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*1*3*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*3*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*3*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*1*3*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*3*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*3*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*1*3*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*3*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*3*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*1*3*2*1*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*3*2*1*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*3*2*1*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*1*3*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*3*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*3*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*1*3*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*3*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*3*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*1*4*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*4*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*4*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*1*4*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*4*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*4*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*1*4*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*4*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*4*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*1*4*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*4*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*4*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*1*4*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*4*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*4*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*1*4*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*4*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*4*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*1*5*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*5*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*5*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*3*1*5*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*5*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*5*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*3*1*5*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*5*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*5*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*1*5*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*5*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*5*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*1*5*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*5*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*5*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*3*1*5*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*1*5*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*1*5*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*1*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*1*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*1*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*2*1*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*1*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*1*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*1*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*1*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*1*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*1*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}

else if ($text == "1*3*2*1*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*1*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*2*1*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*1*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*1*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*1*2*3*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*1*2*3*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*1*2*3*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*2*1*1*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*2*1*1*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*2*1*1*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*2*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*2*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*2*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*2*2*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*2*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*2*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*3*2*2*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*2*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*2*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*2*2*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*2*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*2*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*2*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*2*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*2*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*3*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*3*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*3*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*3*1*2*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*3*1*2*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*3*1*2*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*2*3*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*3*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*3*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*2*3*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}

else if ($text == "1*3*2*3*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*3*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*3*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*3*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*3*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*3*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*3*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*3*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*4*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*4*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*4*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*4*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*4*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*4*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*3*2*4*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*4*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*4*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*4*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*4*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*4*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*4*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*4*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*4*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*4*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*4*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*4*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}

else if ($text == "1*3*2*5*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*5*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*5*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*3*2*5*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*5*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*5*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*3*2*5*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*5*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*5*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*3*2*5*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*5*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*5*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*3*2*5*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*5*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*5*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*3*2*5*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*3*2*5*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*3*2*5*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*4*1*1*1*1*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*1*1*1*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*1*1*1*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*4*1*1*1*2*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*1*1*2*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*1*1*2*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*4*1*1*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*1*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*1*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*4*1*1*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*1*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*1*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*4*1*1*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*1*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*1*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*4*1*1*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*1*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*1*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*4*1*2*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*2*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*2*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*4*1*2*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*2*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*2*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*4*1*2*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*2*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*2*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*4*1*2*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*2*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*2*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*4*1*2*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*2*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*2*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*4*1*2*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*2*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*2*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*4*1*3*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*3*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*3*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*4*1*3*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*3*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*3*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*4*1*3*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*3*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*3*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*4*1*3*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*3*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*3*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*4*1*3*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*3*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*3*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*4*1*3*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*3*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*3*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*4*1*4*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*4*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*4*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*4*1*4*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*4*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*4*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*4*1*4*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*4*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*4*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*4*1*4*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*4*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*4*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}


else if ($text == "1*4*1*4*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*4*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*4*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*4*1*4*2*3*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*4*2*3*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*4*2*3*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*4*1*5*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*1*5*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*1*5*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}



else if ($text == "1*4*1*5*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*1*5*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*1*5*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}




else if ($text == "1*4*1*5*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*1*5*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*1*5*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}



else if ($text == "1*4*1*5*2*2*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*1*5*2*2*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*1*5*2*2*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}


else if ($text == "1*4*1*5*2*3*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*1*5*2*3*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*1*5*2*3*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}


else if ($text == "1*4*2*1*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*1*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*1*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}




else if ($text == "1*4*2*1*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*1*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*1*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}




else if ($text == "1*4*2*1*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*1*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*1*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}



else if ($text == "1*4*2*1*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*1*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*1*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}



else if ($text == "1*4*2*1*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*1*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*1*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}




else if ($text == "1*4*2*1*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*1*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*1*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}





else if ($text == "1*4*2*2*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}

else if ($text == "1*4*2*2*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}

else if ($text == "1*4*2*2*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}






else if ($text == "1*4*2*2*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*2*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*2*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}





else if ($text == "1*4*2*2*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*2*2*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*2*2*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}





else if ($text == "1*4*2*2*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*2*2*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =2;
}
else if ($text == "1*4*2*2*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =3;
}




else if ($text == "1*4*2*2*2*2*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*2*2*2*2*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*2*2*2*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}





else if ($text == "1*4*2*2*2*3*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*2*2*3*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*2*2*3*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}


else if ($text == "1*4*2*3*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*3*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*3*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}



else if ($text == "1*4*2*3*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*3*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*3*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}




else if ($text == "1*4*2*3*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*3*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*3*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}






else if ($text == "1*4*2*3*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*3*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*3*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}





else if ($text == "1*4*2*3*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*3*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*3*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}



else if ($text == "1*4*2*3*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*3*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*3*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}



else if ($text == "1*4*2*4*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*4*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*4*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}




else if ($text == "1*4*2*4*1*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*4*1*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*4*1*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}




else if ($text == "1*4*2*4*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*4*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*4*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}





else if ($text == "1*4*2*4*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*4*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*4*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}



else if ($text == "1*4*2*4*2*2*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*4*2*2*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*4*2*2*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}





else if ($text == "1*4*2*4*2*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    $level_7 =1;
}
else if ($text == "1*4*2*4*2*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*4*2*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}




else if ($text == "1*4*2*5*1*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*5*1*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*5*1*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}





else if ($text == "1*4*2*5*1*2*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*5*1*2*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*5*1*2*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}





else if ($text == "1*4*2*5*1*3*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*5*1*3*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*5*1*3*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}





else if ($text == "1*4*1*5*2*1*1"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*1*5*2*1*2"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*1*5*2*1*3"){
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}

else if ($text == "1*4*2*5*1*2*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*5*1*2*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}else if ($text == "1*4*2*5*1*2*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}




else if ($text == "1*4*2*5*2*2*1") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =1;
}
else if ($text == "1*4*2*5*2*2*2") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =2;
}
else if ($text == "1*4*2*5*2*2*3") {
    $response = "END Taarifa zako zimetumwa ahsante.";
    // $level_7 =3;
}





else if ($text == "1*4*2*5*2*3*1"){
        $response = "END Taarifa zako zimetumwa ahsante.";
        // $level_7 =1;
    }
else if ($text == "1*4*2*5*2*3*2"){
        $response = "END Taarifa zako zimetumwa ahsante.";
        // $level_7 =2;
    }
else if ($text == "1*4*2*5*2*3*3"){
        $response = "END Taarifa zako zimetumwa ahsante.";
        // $level_7 =3;
    }













else if ($text == "2")
{

   $response = "END Piga namba 116  ili kupata msaada zaidi";
   $level_1 = 2;

}






    // // Echo the response back to the API
    header('Content-type: text/plain');
    echo $response;



    if($text!=null){
        $userData = new Rough1;
        $userData->phone = $phoneNumber;
        $userData->sessionId = $sessionId;
        $userData->level_1 = $level_1;
        $userData->level_2 = $level_2;
        $userData->level_3 = $level_3;
        $userData->level_4 = $level_4;
        $userData->level_5 = $level_5;
        $userData->level_6 = $level_6;
        $userData->level_7 = $level_7;
        $userData->save();
    }



    }
    public function select_gender($response)
    {
   $response = "CON Jinsia yako \n";
   $response .= "1. mme \n";
   $response .= "2. mke" ;

    }
    public function select_district($response){
   $response = "CON Chagua wilaya unayoishi \n";
   $response .= "1. Kinondoni \n";
   $response .= "2. Ilala \n";
   $response .= "3. Kigamboni \n";
   $response .= "4. Temekt \n";
   $response .= "5. Ubungo \n";

    }
    public function violence_info($response){
   $response = "CON Umewahi kutoa taarifa yeyote ya ukatiri na unyanyasaji \n";
   $response .= "1. Ndio \n";
   $response .= "2. Hapana" ;
    }

    public function violence_info_true($response){
   $response = "CON Ni aina gani ya unyanyasaji na ukatili uliyofanyiwa au kuona \n";
   $response .= "1. kijinsia \n";
   $response .= "2. kimwili \n";
   $response .= "3. hisia";
    }


    public function violence_info_true_proceed($response){
   $response = "CON Ni aina gani ya unyanyasaji na ukatili umefanyiwa au kuona \n";
   $response .= "1. kijinsia \n";
   $response .= "2. kimwili \n";
   $response .= "3. hisia";
            }

    public function violence_info_false($response){
   $response = "CON Nani amekunyanyasa au kukukatili \n";
   $response .= "1. Mzazi \n";
   $response .= "2. Mlezi \n";
   $response .= "3. mtu mwingine" ;
            }

    public function done($response){
   $response = "END Taatrifa zako zimetumwa ahsante.";


}










public function jinsia(){
  $mme = null;
  $mke = null;
  $idadi = null;

  $mme = Rough1::select('id')->where('level_3', 1)->count();

  $mke = Rough1::select('id')->where('level_3', 2)->count();

  $idadi = $mme + $mke;
    $mme = $mme/$idadi * 100;
    $mke = $mke/$idadi * 100;
  

  return response(['mme'=>round($mme), 
                   'mke'=>round($mke), 
                   'idadi'=>round($idadi)
                ]);
}





  




public function umri(){
   
    $zaidiya25 = null;
    $katiya18na28 = null;
    $katiya8hadi17 = null;
    $chiniya8 = null;
    $idadi = null;

    $zaidiya25 = Rough1::select('id')->where('level_2', 1)->count();
    $katiya18na28 = Rough1::select('id')->where('level_2', 2)->count();
    $katiya8hadi17 = Rough1::select('id')->where('level_2', 3)->count();
    $chiniya8 = Rough1::select('id')->where('level_2', 4)->count();
  
      $idadi = $zaidiya25 + $katiya18na28 + $katiya8hadi17 + $chiniya8;
      $zaidiya25 = $zaidiya25/$idadi * 100;
      $katiya18na28 = $katiya18na28/$idadi * 100;
      $katiya8hadi17 = $katiya8hadi17/$idadi * 100;
      $chiniya8 = $chiniya8/$idadi * 100;

    return response(['zaidiya25'=>round($zaidiya25), 
                    'katiya18na28'=>round($katiya18na28), 
                    'katiya8hadi17'=>round($katiya8hadi17),
                    'chiniya8'=>round($chiniya8),
                ]);
  }
  







public function mahali(){

    $kinondoni = null;
    $ilala = null;
    $kigamboni = null;
    $temeke = null;
    $ubungo = null;
    $idadi = null;


    $kinondoni = Rough1::select('id')->where('level_4', 1)->count();
    $ilala = Rough1::select('id')->where('level_4', 2)->count();
    $kigamboni = Rough1::select('id')->where('level_4', 3)->count();
    $temeke = Rough1::select('id')->where('level_4', 4)->count();
    $ubungo = Rough1::select('id')->where('level_4', 5)->count();

    
      $idadi = $kinondoni + $ilala + $kigamboni + $temeke + $ubungo;
      $kinondoni = $kinondoni/$idadi * 100;
      $ilala = $ilala/$idadi * 100;
      $kigamboni = $kigamboni/$idadi*100;
      $temeke = $temeke/$idadi * 100;
      $ubungo = $ubungo/$idadi * 100;

    return response(['kinondoni'=>round($kinondoni), 
                    'ilala'=>round($ilala),
                    'kigamboni'=>round($kigamboni),
                    'temeke'=>round($temeke),
                    'ubungo'=>round($ubungo),
                ]);
  }








public function ainazaunyanyasaji(){
    $kijinsia=null;
    $kimwili=null;
    $kihisia=null;
    $idadi=null;

    $kijinsia = Rough1::select('id')->where('level_6', 1)->count();
    $kimwili = Rough1::select('id')->where('level_6', 2)->count();
    $kihisia = Rough1::select('id')->where('level_6', 3)->count();

    $idadi = $kijinsia + $kimwili + $kihisia;
    $kijinsia = $kijinsia/$idadi * 100;
    $kimwili = $kimwili/$idadi * 100;
    $kihisia = $hisia/$idadi * 100;

    return response(['kijinsia'=>round($kijinsia),
                     'kimwili'=>round($kimwili),
                     'kihisia'=>round($kihisia),
                    ]);
}
  







public function muhusikawaunyanyasaji(){
    $mzazi = null;
    $mlezi = null;
    $mtumwingine = null;
    $idadi = null;

    $mzazi = Rough1::select('id')->where('level_7',1)->count();
    $mlezi = Rough1::select('id')->where('level_7',2)->count();
    $mtumwingine = Rough1::select('id')->where('level_7',3)->count();

    $idadi = $mzazi + $mlezi + $mtumwingine;
    $mzazi = $mzazi/$idadi * 100;
    $mlezi = $mlezi/$idadi * 100;
    $mtumwingine = $mtumwingine/$idadi * 100;

    return response (['mzazi'=>round($mzazi),
                      'mlezi'=>round($mlezi),
                      'mtumwingine'=>round($mtumwingine),
                     ]);
}

}

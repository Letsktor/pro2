<?php
    
    $s = file_get_contents("password.txt");
    $st[6] = "";
    $row = 0;
    $dd = 0;
    $ss = "";
    for ($i = 0; $i < strlen($s); $i++) {
        if (ord($s[$i]) == 10) {
            $dd = 1;
            if ($dd == 1) {
                $sss = "";
                $ddd = 0;
                $rr = 0;
                for ($k = 0; $k < strlen($ss); $k++) {
                    if ($ddd == 4) {
                        $sss = $sss . chr(ord($ss[$k]) - 3);
                        $ddd = 0;
                    } else {

                        if ($ddd == 3) {
                            $sss = $sss . chr(ord($ss[$k]) + 9);
                            $ddd = $ddd + 1;
                        } else {

                            if ($ddd == 2) {
                                $sss = $sss . chr(ord($ss[$k]) - 31);
                                $ddd = $ddd + 1;
                            } else {
                                if ($ddd == 1) {
                                    $sss = $sss . chr(ord($ss[$k]) + 14);
                                    $ddd = $ddd + 1;
                                } else {
                                    if ($ddd == 0) {
                                        $sss = $sss . chr(ord($ss[$k]) - 5);
                                        $ddd = $ddd + 1;
                                    }
                                }
                            }
                        }
                    }





                }
                $st[$row] = $sss;
                $row = $row + 1;
                $dd = 0;
                $ss = "";
            }

        } else {

            if ($dd == 0) {
                $ss = $ss . $s[$i];

            }
        }
    }
    for($i=0;$i<6;$i++)
    {
        echo $st[$i]."\n";
    }
    

    for($i=0;$i<6;$i++)
    {
        if(strcmp($st[$i],$_POST["name"]."*".$_POST["password"])==0)
        {

        }
        else
        {

        }
    }
    ?>

<?php



     if ($x==1 ){
         echo "Jan";
        }
     if ($x==2 ){
         echo "Feb";
        }
     if ($x==3) {
         echo "March";
        }
     if ($x==4 ){
         echo "April" ;
        }
     if ($x==5) {
         echo "May" ;
         }
     if ($x==6) {
         echo "June" ;
         }
     if ($x==7) {
         echo "July" ;
         }
     if ($x==8) {
         echo "August" ;
         }
     if($x==9) {
         echo "September" ;
         }
     if($x==10) {
         echo "October" ;
         }
     if($x==11) {
         echo "November" ;
        }
     if($x==12) {
         echo "December" ;
        }
     if($x<1 or $x>12) {
         echo "Invalid input" ;
        }
     }
$x=4;
print_month_name($x )

?>
<?php


$opt = 3;

switch ($opt) {
    case 1:
        echo "Jan";
        break;

    case 2:
        echo "Feb";
        break;

    case 3:
        echo "March";
        break;

    case 4:
        echo "April" ;
        break;case 1:
    case 5:

        echo "May" ;
        break;

    case 6:
        echo "June" ;
        break;

    case 7:
        echo "July" ;
        break;

    case 8:
        echo "August" ;
        break;

    case 9:
        echo "September" ;
        break;
    case 10:

        echo "October" ;
    break;

    case 11:
    echo '30 days';
    break;

    case 12:
        echo '31 days';
        break;

    default:
    echo "not valid month number";
}
?>
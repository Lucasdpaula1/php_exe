<?php
declare(strict_types=1);
$day_week = random_int(0,7);
function show_day(int $day_week):string{
  switch($day_week){
    case 0 :
        return 'monday';
        break;
    case 1 :
          return 'Tuesday';
          break;
    case 2 :
            return 'Wednesday,';
            break;
    case 3 :
              return 'Thursday';
              break;
    case 4 :
                return 'Friday';
                break;
    case 5 :
                  return 'Saturday';
                  break;
    case 6 :
                    return 'Sunday';
                    break;
    default:
      return "there's no day of the week with this number";
  }
  
}
echo 'the day is : ' . show_day($day_week);
?>
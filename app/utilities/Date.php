<?php

namespace app\utilities;

use datetime;
class  Date
{
    public static  function isweekend(){
    return (new Datetime)-> format ('N')>= 6 ;
}


}

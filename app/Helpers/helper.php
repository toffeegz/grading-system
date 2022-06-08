<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

use App\Models\CompanyInformation;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use DateTime;
use DatePeriod;
use DateInterval;



class Helper
{
    

    // COMPANY INFORMATION
    
    public function getCompanyInformation()
    {
        return CompanyInformation::find(1);
    }
    
    ////////////// // GENERATOR


}
<?php

namespace App\Services;

use Illuminate\Http\Request;
use Romans\Filter\IntToRoman;

class PasienService
{
    public function getkodepasien()
    {
        $filter = new IntToRoman();
        $year = $filter->filter(date('y'));
        $month = $filter->filter(date('m'));
        $day = $filter->filter(date('d'));
        $hour = $filter->filter(date('h'));
        $minute = $filter->filter(date('i'));
        $temp = $year.''.$month.''.$day.''.$hour.''.$minute;

        return 'PS'.$temp;
    }
}

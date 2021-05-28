<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{


    protected $arr;

 function __construct($array) {
        $this->arr = $array;
 } 

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       return collect($this->arr);
    }
}

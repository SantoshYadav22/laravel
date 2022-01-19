<?php

namespace App\Exports;
use App\Models\RelationModel;
use App\Models\Disneyplus;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

use Maatwebsite\Excel\Concerns\WithHeadings;

class DisneyplusExport implements FromCollection,WithCustomCsvSettings,WithHeadings{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function getCsvSettings(): array
    {
        return [
            'delimiter'=>','
    ];
    }
    public function headings(): array
    {
        return ['name','rollno','std','div'];
    }
    public function collection(){
        return RelationModel::select('name','rollno','std','div')->get();
    }


}

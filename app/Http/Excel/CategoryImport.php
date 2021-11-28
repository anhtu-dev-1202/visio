<?php

namespace App\Http\Excel;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CategoryImport implements ToModel
{
    use Importable;
    /**
     * @param array $row
     *
     * @return Category|null
     */
    public function model(array $row)
    {
        $createdAt = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[4]));
        $url = $row[2];
        $contents = file_get_contents($url);
        $name = time() . '-' . substr($url, strrpos($url, '/') + 1);
        Storage::put($name, $contents);
        File::put( public_path( 'images/news/' . $name), $contents);

        $data = [
            'title' => $row[0],
            'slug' => Str::slug($row[0]),
            'description' => $row[1],
            'image' => '/images/news/' . $name,
            'created_at' => $createdAt->format('Y-m-d H:i'),
            'content' => $row[5],
        ];

        return new News($data);
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: vietlv
 * Date: 1/18/2019
 * Time: 4:15 PM
 */

namespace App\Helpers;

use App\Commune;
use App\District;
use App\Document;
use App\GeneralInformation;
use App\Province;
use App\User;
use App\Category; // sử dụng biến các thứ liên quan tới  category
use App\Post;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use ZipArchive;

class FunctionHelpers
{

    private static function stringToColorCode($str)
    {
        $code = dechex(crc32($str));
        $code = substr($code, 0, 6);

        return $code;
    }

    /**
     * @return Authenticatable|null
     */

    public static function slug($str)
    {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '_', $str);

        return $str;
    }

    /**
     * @param $table
     * @param $attributes
     * @param $file
     * @param $start
     * @param $end
     * @throws BadRequestHttpException
     */
    public static function import_data_excel($table, $attributes, $file, $start = null, $end = null)
    {
        ini_set('memory_limit', '-1');
        set_time_limit(1200);
        $inputFileName = $file;

        if (!file_exists($inputFileName)) {
            throw new BadRequestHttpException('File doesn\'t exists.');
        }

        $inputFileName = $file;

        try {
            $spreadsheet = IOFactory::load($inputFileName);

            try {
                $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
                $data = [];
                foreach ($sheetData as $key => $value) {
                    if (($start == null || $key >= $start) && ($end == null || $key <= $end)) {
                        $row = [];
                        foreach ($attributes as $key_att => $value_att) {
                            $row[$value_att] = $value[$key_att];
                        }
                        $data[] = $row;
                    }
                }

                DB::table($table)->insert($data);
            } catch (\PhpOffice\PhpSpreadsheet\Exception $e) {

            }
        } catch (Exception $e) {

        }
    }


    /**
     * @param $file
     */
    public static function download($file)
    {
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
        }
    }

    public static function convert_number_to_words($number)
    {
        $hyphen = ' ';
        $conjunction = '  ';
        $separator = ' ';
        $negative = 'âm ';
        $decimal = ' phẩy ';
        $dictionary = array(
            0 => 'không',
            1 => 'một',
            2 => 'hai',
            3 => 'ba',
            4 => 'bốn',
            5 => 'năm',
            6 => 'sáu',
            7 => 'bảy',
            8 => 'tám',
            9 => 'chín',
            10 => 'mười',
            11 => 'mười một',
            12 => 'mười hai',
            13 => 'mười ba',
            14 => 'mười bốn',
            15 => 'mười năm',
            16 => 'mười sáu',
            17 => 'mười bảy',
            18 => 'mười tám',
            19 => 'mười chín',
            20 => 'hai mươi',
            30 => 'ba mươi',
            40 => 'bốn mươi',
            50 => 'năm mươi',
            60 => 'sáu mươi',
            70 => 'bảy mươi',
            80 => 'tám mươi',
            90 => 'chín mươi',
            100 => 'trăm',
            1000 => 'nghìn',
            1000000 => 'triệu',
            1000000000 => 'tỷ',
            1000000000000 => 'nghìn tỷ',
            1000000000000000 => 'nghìn triệu triệu',
            1000000000000000000 => 'tỷ tỷ'
        );
        if (!is_numeric($number)) {
            return false;
        }
        if (($number >= 0 && (int)$number < 0) || (int)$number < 0 - PHP_INT_MAX) {
            // overflow
            trigger_error(
                'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
                E_USER_WARNING
            );
            return false;
        }
        if ($number < 0) {
            return $negative . self::convert_number_to_words(abs($number));
        }
        $string = $fraction = null;
        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }
        switch (true) {
            case $number < 21:
                $string = $dictionary[$number];
                break;
            case $number < 100:
                $tens = ((int)($number / 10)) * 10;
                $units = $number % 10;
                $string = $dictionary[$tens];
                if ($units) {
                    $string .= $hyphen . $dictionary[$units];
                }
                break;
            case $number < 1000:
                $hundreds = $number / 100;
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if ($remainder) {
                    $string .= $conjunction . self::convert_number_to_words($remainder);
                }
                break;
            default:
                $baseUnit = pow(1000, floor(log($number, 1000)));
                $numBaseUnits = (int)($number / $baseUnit);
                $remainder = $number % $baseUnit;
                $string = self::convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
                if ($remainder) {
                    $string .= $remainder < 100 ? $conjunction : $separator;
                    $string .= self::convert_number_to_words($remainder);
                }
                break;
        }
        if (null !== $fraction && is_numeric($fraction)) {
            $string .= $decimal;
            $words = array();
            foreach (str_split((string)$fraction) as $number) {
                $words[] = $dictionary[$number];
            }
            $string .= implode(' ', $words);
        }
        while (strpos($string, '  ')) {
            $string = str_replace('  ', ' ', $string);
        }
        $string = ucfirst($string);
        return $string;
    }

    public static function convert_number_to_money($number)
    {
        if (is_numeric($number)) {
            $money = '';
            if (strpos($number, '.')) {
                $decima_path = explode('.', $number);
                $before_point = $decima_path[0];
                $after_point = $decima_path[1];
                $array = str_split($before_point);
                $money = ',' . $after_point;
            } else
                $array = str_split($number);
            $flag = 0;
            for ($i = count($array) - 1; $i >= 0; $i--) {
                if ($flag++ % 3 == 0 && $flag > 1)
                    $money = '.' . $money;
                $money = $array[$i] . $money;
            }
            return $money;
        } else
            return $number;

    }


    public static function toObjectSave($object)
    {
        if (gettype($object) == 'array') {
            foreach ($object as $column => $value)
                if (gettype($value) == 'array')
                    $object[$column] = json_encode($value);
        } else
            return false;
        return $object;
    }

    public static function databaseMoneyToFormMoney($object)
    {
        foreach ($object as $key => $value) {
            if (strpos($key, 'bang_so') || $key == 'gia_tri') {
                $object->$key = str_replace('.', ',', $value);
            } else if (gettype($value) == 'object') {
                $object->$key = self::databaseMoneyToFormMoney($value);
            }
        }
        return $object;
    }

    static function rand_float($st_num=0,$end_num=1,$mul=1000000)
    {
        if ($st_num>$end_num) return false;
        return mt_rand($st_num*$mul,$end_num*$mul)/$mul;
    }

    public static function getCategories()
    {

       
        $posts = Post::all();  // 
        return $posts;
        $categories = Category::all();  // 
        return $categories;  // xuất $categories thành biến toàn cục
    }

     public static function getPosts()
    {
        $categories = Category::all();
        // xuất $categories thành biến toàn cục
        $posts = Post::all();  // 
        return $posts;
        return $categories;

    }



}

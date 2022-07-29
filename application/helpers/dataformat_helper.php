<?php
function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}

if (!function_exists('bulan')) {
    function bulan($bulan)
    {
        switch ($bulan) {
            case 1:
                $bulan = "Januari";
                break;
            case 2:
                $bulan = "Februari";
                break;
            case 3:
                $bulan = "Maret";
                break;
            case 4:
                $bulan = "April";
                break;
            case 5:
                $bulan = "Mei";
                break;
            case 6:
                $bulan = "Juni";
                break;
            case 7:
                $bulan = "Juli";
                break;
            case 8:
                $bulan = "Agustus";
                break;
            case 9:
                $bulan = "September";
                break;
            case 10:
                $bulan = "Oktober";
                break;
            case 11:
                $bulan = "November";
                break;
            case 12:
                $bulan = "Desember";
                break;
            default:
                $bulan = Date('F');
                break;
        }
        return $bulan;
    }
}

if (!function_exists('tanggal')) {
    function tanggal($tanggal)
    {
        if (empty($tanggal)) {
            return "";
        }
        $a = explode('-', $tanggal);
        $tanggal = $a['2'] . " " . bulan($a['1']) . " " . $a['0'];
        return $tanggal;
    }
}

if (!function_exists('date_difference')) {
    function date_difference($date1, $date2)
    {
        $datetime1 = new DateTime($date1);
        $datetime2 = new DateTime($date2);
        $interval = $datetime1->diff($datetime2);
        $diffInDays    = $interval->d;
        $diffInMonths  = $interval->m;
        $diffInYears   = $interval->y;

        if ($diffInYears == 0) {
            if ($diffInMonths == 0) {
                return $diffInDays . " hari";
            }
            return $diffInMonths . " bulan, " . $diffInDays . " hari";
        }
        return $diffInYears . " Tahun, " . $diffInMonths . " Bulan, " . $diffInDays . " Hari";
    }
}

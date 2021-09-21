<?php

/**
 * Make an image directory function
 * @param  $path: nama folder yang ingin dibuat
 * @return mixed
 */
if(!function_exists('makeImgDirectory')) {
    function makeImgDirectory($path) {
        # pastikan file atay folder yang dimaksud tidak ada
	    if (!file_exists($path )):
	        # bila benar, buat direktori yang dimaksud dengan permission 0777
	        $oldmask = umask(0);
	        mkdir($path , 0777, true);
	        umask($oldmask);
	    endif;
	    return;
    }
}

/**
 * Make an image directory function
 * @param  $path: nama folder yang ingin dibuat
 * @return mixed
 */
if(!function_exists('makeStorageImgDirectory')) {
    function makeStorageImgDirectory($path) {
        # pastikan file atay folder yang dimaksud tidak ada
        if (!file_exists(storage_path() .'/'. $path )):
            # bila benar, buat direktori yang dimaksud dengan permission 0777
            $oldmask = umask(0);
            mkdir(storage_path() .'/'. $path , 0777, true);
            umask($oldmask);
        endif;
        return;
    }
}

if(!function_exists('tgl_aja')) {
    function tgl_aja($tgl) {
        $tanggal = date('Y-m-d', strtotime($tgl));
        $bulan = array (1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
        );
        $split = explode('-', $tanggal);
        return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    }
}

Daftar

nathmei

/

belajar-php

Publik

Kode

Masalah

Tarik permintaan

Tindakan

Proyek

Keamanan

Wawasan

belajar-php/ perbarui.php

@nathmei

nathmei mentah

 1 kontributor

95 baris (79 slok)  2,93 KB

<?php

jika (isset( $ _GET [ 'id' ])){

    // ambil id dari url atau method get

    $ id = $ _GET [ 'id' ];

    //Buat koneksi dengan MySQL

    $ con = mysqli_connect(" localhost "," root ",""," struktur ");

    // Periksa koneksi

    jika (mysqli_connect_errno()) {

        echo " Gagal terhubung ke MySQL: " . mysqli_connect_error();

        KELUAR();

    } lain {

        echo  '<br>koneksi berhasil' ;

    }

    $ sql =" PILIH * DARI mahasiswa WHERE id=' $ id ' ";

    if ( $ hasil = mysqli_query( $ con , $ sql )) {

        echo " <br>data tersedia ";

        while ( $ user_data = mysqli_fetch_assoc( $ result )) {

            $ nim = $ user_data [ 'nim' ];

            $ nama = $ user_data [ 'nama' ];

            $ id_jurusan = $ user_data [ 'id_jurusan' ];

            $ tpt_lahir = $ user_data [ 'tempat_lahir' ];

            $tgl_lahir = $user_data[ 'tanggal_lahir' ];

            $jenis kelamin = $user_data[ 'jenis_kelamin' ];

            $alamat = $user_data[ 'alamat' ];

        }

    } lain {

        gema " Kesalahan: " . $sql. " <br> " . mysqli_error( $ con );

    }

    mysqli_close( $con );

}

jika (isset( $ _POST [ 'kirim' ])){

    //var_dump($_POST);

    $nim = $_POST[ 'nim' ];

    $nama = $_POST[ 'nama' ];

    $id_jurusan = $_POST[ 'id_jurusan' ];

    $tpt_lahir = $_POST[ 'tpt_lahir' ];

    $tgl_lahir = $_POST[ 'tgl_lahir' ];

    $ jenis kelamin = $ _POST [ 'jenis kelamin' ];

    $alamat = $_POST[ 'alamat' ];

    

    $con = mysqli_connect("localhost","root","","struktur");

    

    jika (mysqli_connect_errno()) {

        echo " Gagal terhubung ke MySQL: " . mysqli_connect_error();

        KELUAR();

    } lain {

        echo '<br>koneksi berhasil' ;

    }

    $sql =" UPDATE mahasiswa SET nim=' $nim',nama=' $nama',id_jurusan=' $id_jurusan',tempat_lahir=' $tpt_lahir',

    tanggal_lahir=' $ tgl_lahir ',alamat=' $ alamat ' WHERE id=' $ id ' ";

    if (mysqli_query( $ con , $ sql )) {

        echo " <br>Data berhasil diupdate ";

    } lain {

        gema " Kesalahan: " . $sql. " <br> " . mysqli_error( $ con );

    }

      

    mysqli_close( $con );

}

?>

<!DOCTYPE html >

< html lang =" en " >

<kepala>

    <meta charset="UTF-8" >

    < meta http-equiv ="Kompatibel dengan X-UA " konten =" IE=edge " >

    < meta name =" viewport " content =" width=device-width, initial-scale=1.0 " >

    < judul > Perbarui </ judul >

</kepala>

<tubuh>

    <?php if (isset( $ _GET [ 'id' ])): ?>

    <form action ="" method =" post " >

        NIM: < input type =" text " name =" nim " value =" <?php echo $nim ; ?> " > < br >

        Nama: < input type=" text " name =" nama " value =" <?php echo $ nama ; ?> " > < br >

        ID Jurusan : < input type=" number " name =" id_jurusan " value =" <?php echo $id_jurusan ; ?> " > < br >

        Jenis Kelamin: < input type =" text " name =" gender " value =" <?php echo $ gender ; ?> " > < br >

        Tempat Lahir: < input type =" text " name =" tpt_lahir " value =" <?php echo $ tpt_lahir ; ?> " > < br >

        Tanggal Lahir (yyyy-mm-dd): < input type =" text " name =" tgl_lahir " value =" <?php echo $ tgl_lahir ; ?> " > < br >

        Alamat: < input type=" text " name =" alamat " value =" <?php echo $alamat ; ?> " > < br >

        < button type=" submit " name =" submit " > Perbarui Data </ button >

    </bentuk>

    <?php  endif ; ?>

</ tubuh >

</ html >

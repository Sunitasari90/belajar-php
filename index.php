<?php

$con = mysqli_connect("localhost","root","","struktur");

jika (mysqli_connect_errno()) {

    echo " Gagal terhubung ke MySQL: " . mysqli_connect_error();

    KELUAR();

} lain {

    echo 'koneksi berhasil' ;

}

$sql = "PILIH *DARI mahasiswa";

$mahasiswa = [];

if ( $hasil = mysqli_query( $con , $sql )) {

    sementara ( $ baris = mysqli_fetch_assoc( $ result )) {

        $mahasiswa[] = $baris;

    }

    mysqli_free_result( $hasil );

  }

mysqli_close( $con );

?>

<!DOCTYPE html >

< html lang =" en " >

<kepala>

    <meta charset="UTF-8" >

    < meta http-equiv ="Kompatibel dengan X-UA " konten =" IE=edge " >

    < meta name =" viewport " content =" width=device-width, initial-scale=1.0 " >

    < title > Data Mahasiswa </ title >

</kepala>

<tubuh>

    < h1 > Data Mahasiswa </ h1 >

    < a href =" insert.php " > Tambah Data </ a >

    < batas tabel = 1 gaya =" lebar: 100%; " >

        <tr>

            < th > NIM </ th >

            < th > Nama </ th >

            < th > Jenis Kelamin </ th >

            < th > Tempat Lahir </ th >

            < th > Tanggal Lahir </ th >

            < th > Alamat </ th >

            < th > Tindakan </ th >

        </tr>

        <?php foreach( $mahasiswa sebagai $baris ): ?>

            <tr>

                < td > <?= $ baris [ 'nim' ] ?> </ td >

                < td > <?= $ baris [ 'nama' ] ?> </ td >

                < td > <?= $ baris [ 'jenis_kelamin' ] ?> </ td >

                < td > <?= $ baris [ 'tempat_lahir' ] ?> </ td >

                < td > <?= $ baris [ 'tanggal_lahir' ] ?> </ td >

                < td > <?= $ baris [ 'alamat' ] ?> </ td >

                <td>

                    < a href =" update.php?id= <?= $ baris [ 'id' ] ?> " > Edit </ a > |

                    < a href =" delete.php?id= <?= $ baris [ 'id' ] ?> " > Hapus </ a >

                </td>

            </tr>

        <?php endforeach ; ?>

    </ meja >

</tubuh>

</ html >

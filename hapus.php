<?php 

jika (isset( $ _GET [ 'id' ])){

    

    $ id = $ _GET [ 'id' ];

    $ con = mysqli_connect(" localhost "," root ",""," seal_fakultas ");

    jika (mysqli_connect_errno()) {

        echo " Gagal terhubung ke MySQL: " . mysqli_connect_error();

        KELUAR();

    } lain {

        echo  'koneksi berhasil' ;

    }

    $ sql =" HAPUS DARI MANA SAJA id=' $ id ' ";

    if (mysqli_query( $ con , $ sql )) {

        echo " Hapus data berhasil ";

    } lain {

        gema " Kesalahan: " . $ sql . " <br> " . mysqli_error( $ con );

    }

      

    mysqli_close( $ con );

}

?>

<section>
    <h1><?php echo $judul ?></h1>
    <p align='justify'>Pada pengertian codeigniter di atas tadi
        di jelaskan bahwa codeigniter menggunakan metode MVC. Apa itu 
        MvC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih
        jauh dalam belajar codeigniter.
    </p>
    <p>MVC adalah teknik atau konsep yang memisahkan
        komponen utama menjadi tiga komponen  yaitu model, view dan 
        controller  
    </p>
                        <ol type="a">
                        <li>Model</li>
    <p align='justify'>Model adalah kelas yang mempresntasikan atau memodelkan
        tipe data yang akan digunakan oleh aplikasi. Model juga dapat definisikan 
        sebagai bagian penanganan yang berhubungan dengan pengolahan atau manipulasi 
        database. Seperti misalnya mengambil data dari database, menginput dan pengolaan 
        database lainnya. Semua intruksi atau fungsi yang berhubungan dengan pengolahan 
        database di letakkan di dalam model.Sebagi contoh, jika ingin membuat aplikasi
        untuk menghitung luas dan keliling lingkaran, maka dpaat memodelkan objek lingkaran 
        sebagai kelas model. 

    </p>
    <p align='justify'>Sebagi catatan, semua model harus di simpan di
        dalam folder application/models
    </p>
    <p align='justify'>View merupakan bagian yang menangani halaman user 
        interface atau halaman yang muncul pada user(pada browser). Tampilan 
        dari user interface di kumpulkan pada view untuk memisahkannya dengan
        controller dan model sehingga memudahkan web designer dalam melakukan 
        pengembangan tampilan halaman website 
    </p>
    <p align='justify'>Controller merupakan kumpulan instruksi aksi yang 
        menghubungkan model dan view, jadi user tidak akan berhubungan 
        dengan model secara langsung, intinya data yang tersimpan di 
        database (model) di ambil oleh controller dan kemudian controller 
        pula yang menampilkan nya ke view. Jadi controllerlah yang mengolah 
        instruksi.
    </p>
    <p align='justify'>Dari penjelasan tentang model, view dan controller
        di atas dapat di simpulkan bahwa controller sebagai penghubung
        view dan model. Misalnya pada aplikasi yang menampilkan data dengan 
        menggunakan metode konsep mvc, controller memanggil intruksi pada model
        yang mengambil data pada database, kemudian controller yang meneruskan 
        pada view untuk di tampilkan. Jadi jelas sudah dan sangat mudah dalam 
        pengembangan aplikasi dengan cara mvc ini karena web designer atau font-end 
        developer tidak perlu lagi berhubungan dengan controller, dia hanya perlu 
        berhubungan dengan view untuik mendesign tampilan aplikasi, karena back-end
        developer yang mengenai bagian conteollwr dan modelnya. Jadi pembagian tugas pun 
        menjadi mudah dan pengembangan aplikasi dapat dilakukan dengan cepat dan terstruktur.
    </p>
</section>
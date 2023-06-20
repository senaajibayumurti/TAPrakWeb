## UASPPW1_22-505018-SV-21751_LYRA-Literary-Realm
### Sena Aji Bayu Murti

# LYRA - Literary Realm
> <img src="https://github.com/senaajibayumurti/UASPPW1_22-505018-SV-21751_LYRA-Literary-Realm/assets/110106706/aff748b4-c2e2-45cf-8063-ebcff050f16e" width= 100px>
>
>Lyra logotype

Adalah sebuah website untuk para penulis di luar sana, baik pemula maupun profesional. Setiap karya sastra tulis dibagikan kepada semua pengguna LYRA dengan harapan meningkatkan minat baca ke semua orang. Setiap pengguna bisa merespon setiap karya dengan menekan tombol "Like", berkomentar pada kolom "Comment", membagikan literatur dengan fitur "Share" ataupun menyimpan tulisan di dalam "Bookmark" masing-masing. Di sini lah kalian bisa memulai untuk menulis.
><img src="https://github.com/senaajibayumurti/UASPPW1_22-505018-SV-21751_LYRA-Literary-Realm/assets/110106706/af77bbfb-effb-4ffc-b3d7-9444d1d3c91c" width="600px">
>
>Preview LYRA

Menanggapi klien untuk diciptakannya website LYRA, warna utama sebagai identitas produk adalah cyan. Kemudian demi melancarkan tujuan utama yaitu meningkatkan minat baca, desain tampilan secara umum didominasi dengan tone yang gelap dan warna font putih untuk memudahkan para pembaca dalam membaca dan kenyamanan saat membaca karena di depan layar digital. Sehingga dengan kenyamanan yang disediakan bisa membuat para pembaca bertahan lebih lama dalam menikmati karya sastra yang disediakan.

## DESAIN
- Logo
  - Logo berupa logotype sederhana dengan modifikasi kecil pada huruf "L" dan "Y". Merujuk pada gambar 'Lyra logotype' bisa dilihat bahwa spasi diantara kedua huruf tersebut membentuk siluet buku yang setengah terbuka atau laptop yang setengah terbuka tergantung interpretasi masing-masing individu. Ini mengisyaratkan di masa serba digital ini bahwa membaca tidak hanya melalui buku yang terlalu pakem, bahan bacaan bisa di dapat dari mana saja namun buku tetaplah penting sebagai sumber utama ilmu pengetahuan.
  - Warna logo menyesuaikan dengan identitas brand yaitu cyan. Warna yang cukup terang dan mencolok, serta cukup kontras dengan tampilan produk secara keseluruhan yaitu abu-abu gelap.
- Font
> <img src="https://github.com/senaajibayumurti/UASPPW1_22-505018-SV-21751_LYRA-Literary-Realm/assets/110106706/a74ebfba-0328-4b82-ac3b-2ed3273757a0" width="100px">
>
>Font Bahnschrift

  - Font yang kamu pilih adalah Bahnschrift. Font mainstream, namun kami pilih karena desainnya yang sederhana dan mudah dibaca namun masih memeliki estetika tidak terlihat begitu standar. Font ini juga merupakan font dasar yang digunakan untuk mendesain logo.
- Warna
  - Sebagaimana yang sudah disebutkan sebelumnya warna utama adalah cyan `#00ffff`, kemudian putih `#ffffff` serta tiga warna lain yang menjadi dasar warna layout secara keseluruhan:
> ```css
> :root{
> --abu1:#131313;
> --abu2:#0a0a0a;
> --abu3:#0a0a0a80;
> }
> ```
> 
> Opsi warna

- Layout
  - Layout pada dasarnya tidak terlalu banyak visualisasi yang cukup ilustratif bertujuan agar pengguna tidak terlalu terganggu dengan tampilan website sehingga bisa fokus dan nyaman dalam membaca.
  - Layout pada halaman utama atau "Beranda" dibagi menjadi tiga bagian utama yaitu ada `left-bar`, `mid-bar`, dan `right-bar`. 
><img src="https://github.com/senaajibayumurti/UASPPW1_22-505018-SV-21751_LYRA-Literary-Realm/assets/110106706/7220de96-1152-4869-9111-17e17c84aac8" width="600px">
>
>Halaman utama

  - `left-bar` merupakan side bar berisikan tombol-tombol navigasi berbagai menu beserta penempatan logo.
  - `mid-bar` sebagai bagian tengah halaman merupakan bagian utama untuk menampilkan "feed" berisikan semua unggahan para pengguna. Penempatan "feed" yang berada di tengah bertujuan menyesuaikan fokus utama mata pengguna dalam melihat layar
><img src="https://github.com/senaajibayumurti/UASPPW1_22-505018-SV-21751_LYRA-Literary-Realm/assets/110106706/17849daf-d6ff-4540-b757-e1904b7444d1" width="600px">
>
>Tampilan profil dan postingan

  - `right-bar` merupakan bar utilitas yang hanya muncul untuk halaman utama atau "Beranda". Berisi menu "Category" dan "Tag" dengan opsi di dalamnya untuk memfilter konten yang ada di "Beranda". Merujuk pada gif 'Tampilan profil dan postingan' pada tampilan profil pengguna dan postingan bisa dilihat bahwa `right-bar` dihilangkan.

## WEBSITE RESPONSIVE
Target pengguna website ini adalah semua umur, dengan begitu jangkauan pasar yang luas diperlukan dengan menargetkan pengguna layar yang besar seperti Laptop, kemudian Tablet, dan Smartphone. Untuk itu desain website yang responsif diperlukan. 

Desain responsif yang kami lakukan pada dasarnya tediri dari dua desain, desain pertama untuk layar yang lebih lebar seperti tablet dan laptop serta desain kedua untuk layar yang lebih kecil untuk smartphone.

> ```css
> @media (max-width: 1024px){}
> @media (max-width: 768px){}
> @media (max-width: 767px){}
> @media (max-width: 375px){}
> @media (max-width: 280px){}
> ```
> 
> Klasifikasi pembagian layar media query

Mengacu pada "Klasifikasi pembagian layar media query" media query yang mengatur layar yang lebih lebar adalah media query baris pertama dan kedua, tampilannya masih menampilkan ketiga layout utama. Hanya mengatur padding dan ukuran font menyesuaikan kenyamanan pengguna. Kemudian untuk klasifikasi pada media query baris ketiga, keempat, dan kelima adalah untuk menyesuaikan untuk layar smartphone.
> ```css
> @media (max-width: 1024px){
>     #synopsis-bar{
>         padding: 10px;
>     }
> }
> @media (max-width: 768px){
>     #synopsis-bar{
>         font-size: 15px;
>         padding: 20px;
>     }
> }
> ```
> Klasifikasi media query layar lebih lebar

Pada tampilan website yang lebih kecil, bar utilitas `right-bar` disembunyikan, untuk itu menu "Category" dan "Tag" ditaruh bersama dengan menu lainnya pada `left-bar` yang ditaruh di atas `mid-bar`. Pada awalnya, merujuk ke file `homePageCSS.css` dan file css dengan format nama `(section)CSS.css` lainnya, terdapat tag div dengan id "hidden-menu" yang akan ditampilkan hanya untuk tampilan layar lebih kecil atau smartphone.
> ```css
>     #hidden-menu{
>         display:block;
>     }
>     #third-row{
>         display: none;
>     }
> ```
> 
> Desain ulang tampilan untuk layar lebih kecil

> <img src="https://github.com/senaajibayumurti/UASPPW1_22-505018-SV-21751_LYRA-Literary-Realm/assets/110106706/4b87d004-856d-46a0-903b-aba80a8ba69c" width="600px">
> <img src="https://github.com/senaajibayumurti/UASPPW1_22-505018-SV-21751_LYRA-Literary-Realm/assets/110106706/672aecc4-1e5a-4633-a3c0-23e23e93c026" width="600px">
> Tampilan untuk layar smartphone


## DIRECT FEEDBACK
- Klik "BACA" mengarahkan pengguna ke laman baru
- Berbagai tombol dan fitur yang belum bisa kemduian alert
## WEBSITER DINAMIS


<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArtikelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('artikel')->delete();
        
        \DB::table('artikel')->insert(array (
            0 => 
            array (
                'id' => 27,
                'nama' => 'Perempuan berhak menjadi manusia sepenuhnya',
                'slug' => 'perempuan-berhak-menjadi-manusia-sepenuhnya',
                'foto' => '/assets/artikel/perempuan-16502068100.png',
            'detail' => '<p style="text-align: center; "><img style="width: 399.4px; height: 399.4px;" data-bs-filename="243879440_1199208743908116_8009084175971361223_n.jpg" src="/assets/artikel/perempuan-16502068100.png"><p style="text-align: center; "><img style="width: 400.4px; height: 400.4px;" data-bs-filename="243879440_1199208743908116_8009084175971361223_n.jpg" src="/assets/artikel/perempuan-16502068101.png"><br></p><p>"Kita dapat menjadi manusia sepenuhnya, tanpa berhenti menjadi wanita sepenuhnya. RA Kartini"<br style=""><br style="">Perempuan berhak menjadi manusia sepenuhnya, sesuai apa yang diinginkan. Mengejar keinginan dan cita-cita tanpa harus melupakan peran utamanya sebagai Ibu dan istri nantinya.<br style=""><br style="">Join Us:<br style="">}Youtube (Orda Karmapack)<br style=""><a href="https://youtube.com/channel/UCYLkZIjHmDkQH7j7qfVIHbg" target="_blank">https://youtube.com/channel/UCYLkZIjHmDkQH7j7qfVIHbg</a><br style="">}Instagram (orda_karmapack)<br style=""><a href="https://instagram.com/orda_karmapack?utm_medium=copy_link" target="_blank">https://instagram.com/orda_karmapack?utm_medium=copy_link</a><br style="">}Facebook (Orda Karmapack)<br style=""><a href="https://www.facebook.com/karmapack.id" target="_blank">https://www.facebook.com/karmapack.id</a><br style=""><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/karmapack/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#karmapack</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/ordakarmapack/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#ordakarmapack</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/halingkuaing/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#halingkuaing</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/inicianjurkidul/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#inicianjurkidul</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/infocianjur/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#infocianjur</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/infocianjur24jam/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#infocianjur24jam</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/karmapackkabinetmasagi/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#karmapackkabinetmasagi</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/keperempuanankarmapack/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#keperempuanankarmapack</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/perempuanbersatukarmapackmaju/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#perempuanbersatukarmapackmaju</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/kominfokarmapack/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#kominfokarmapack</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/karmapackmengudara/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#karmapackmengudara</a><br></p><p></p><p></p></p>
',
                'excerpt' => '“Kita dapat menjadi manusia sepenuhnya, tanpa berhenti menjadi wanita sepenuhnya.” RA Kartini',
                'counter' => 15,
                'date' => '2021-09-01',
                'status' => 1,
                'created_at' => '2022-04-17 14:46:50',
                'updated_at' => '2023-05-07 06:12:33',
                'user_id' => 1,
            ),
            1 => 
            array (
                'id' => 28,
                'nama' => 'Peringatan Hari Pengkhianatan G30S PKI',
                'slug' => '2021-peringatan-hari-pengkhianatan-g30s-pki',
                'foto' => '/assets/artikel/2021-perin16502083510.png',
            'detail' => '<p style="text-align: center; "><img style="width: 429.2px; height: 429.2px;" data-bs-filename="243376117_865703194118466_5174505604356463028_n.jpg" src="/assets/artikel/2021-perin16502083510.png"><p style="text-align: center; "><br></p><p style="text-align: left;">Tidak ada kematian yang sia sia, begitu juga dengan kematian pahlawan kita di tanggal 30 September, mereka mati atas nama bangsa indonesia.<br></p><div class="MOdxS " style="border: 0px solid rgb(0, 0, 0); font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; -webkit-box-align: stretch; align-items: stretch; display: inline; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; flex-shrink: 0; position: relative;"><span class="_7UhW9   xLCgt      MMzan   KV-D4            se6yk       T0kll " style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 18px; vertical-align: baseline; display: inline !important;">Join Us:<br>}Youtube (Orda Karmapack)<br><a href="https://youtube.com/channel/UCYLkZIjHmDkQH7j7qfVIHbg" target="_blank">https://youtube.com/channel/UCYLkZIjHmDkQH7j7qfVIHbg</a><br>}Instagram (orda_karmapack)<br><a href="https://instagram.com/orda_karmapack?utm_medium=copy_link" target="_blank">https://instagram.com/orda_karmapack?utm_medium=copy_link</a><br>}Facebook (Orda Karmapack)<br><a href="https://www.facebook.com/karmapack.id" target="_blank">https://www.facebook.com/karmapack.id</a><br><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/karmapack/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#karmapack</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/ordakarmapack/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#ordakarmapack</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/halingkuaing/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#halingkuaing</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/inicianjurkidul/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#inicianjurkidul</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/infocianjur/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#infocianjur</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/infocianjur24jam/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#infocianjur24jam</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/karmapackkabinetmasagi/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#karmapackkabinetmasagi</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/kominfokarmapack/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#kominfokarmapack</a><br><a class=" xil3i" href="https://www.instagram.com/explore/tags/karmapackmengudara/" tabindex="0" style="font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; border: 0px; vertical-align: baseline; overflow-wrap: break-word;">#karmapackmengudara</a></span></div></p>
',
                'excerpt' => 'Tidak ada kematian yang sia sia, begitu juga dengan kematian pahlawan kita di tanggal 30 September, mereka mati atas nama bangsa indonesia.',
                'counter' => 14,
                'date' => '2021-09-30',
                'status' => 1,
                'created_at' => '2022-04-17 15:12:31',
                'updated_at' => '2023-05-07 09:12:15',
                'user_id' => 1,
            ),
            2 => 
            array (
                'id' => 29,
                'nama' => 'Pelatihan Budidaya Tanaman Hias Kampung KB - Keluarga Berkualitas',
                'slug' => 'pelatihan-budidaya-tanaman-hias-kampung-kb-keluarga-berkualitas-',
                'foto' => '/assets/artikel/hari-donge16744472200.png',
            'detail' => '<p style="text-align: center; "><img style="width: 1130.4px;" data-bs-filename="visi.jpeg" src="/assets/artikel/hari-donge16744472200.png"><br><p style="text-align: center; "><br></p><p>Green Education Bandung (GEB) kembali dipercaya oleh Dinas PPKB Kota Bandung untuk memberikan pelatihan kepada ibu-ibu pengurus Kampung KB di 10 kelurahan/kecamatan. Kegiatan ini bertujuan memberikan materi mengenai alternatif peningkatan kesejahteraan melalui kegiatan urban farming yang menjanjikan nilai ekonomi yaitu budidaya tanaman hias, khususnya tanaman yang baru mulai diperkanalkan kepada masyarakat dengan istilah " edible flower " atau bunga yang dapat dikonsumsi atau dimakan.</p><p>Kegiatan ini berlangsung selama 10 hari, dari pagi sampai siang. Diharapkan masyarakat pada umumnya menjadi paham akan potensi dari budidaya tanaman hias ini. Para peserta tampak antusias dengan pelatihan ini, karena mereka jadi mengenal tanaman edible flower ini, dan berniat untuk belajar membudidayakannya di tempatnya masing-masing.</p><p>Semoga berhasil ya Ibu-ibu, sampai jumpa di pelatihan berikutnya.&nbsp;&nbsp;</p><p></p><p></p><p></p><p></p></p>
',
                'excerpt' => 'Pelatihan Ibu-ibu PKK pengurus Kampung KB, bekerjasama dengan DPPKB Kota Bandung',
                'counter' => 14,
                'date' => '2022-04-20',
                'status' => 1,
                'created_at' => '2022-04-25 03:50:37',
                'updated_at' => '2023-05-09 03:39:01',
                'user_id' => 1,
            ),
            3 => 
            array (
                'id' => 30,
                'nama' => 'Penyewaan Tanaman Hias pdf',
                'slug' => 'penyewaan-tanaman-hias-pdf',
                'foto' => '/assets/artikel/peringatan16744464890.png',
            'detail' => '<p class="MsoNormal" style="text-align: center; margin-bottom: 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><font color="#222222" face="Helvetica, sans-serif"><span style="caret-color: rgb(34, 34, 34);">Brosur penyewaan tanaman hias GEB</span></font><p class="MsoNormal" style="text-align: left; margin-bottom: 0cm; line-height: normal;"><font color="#222222" face="Helvetica, sans-serif"><span style="caret-color: rgb(34, 34, 34);">Berikut ini adalah brosur penyewaan tanaman hias dalam format pdf.&nbsp;</span></font><a href="https://drive.google.com/file/d/11X58kSdMWtGoVpO7n5kI1dxvGtqWEcGF/view?usp=drivesdk" target="_blank">https://drive.google.com/file/d/11X58kSdMWtGoVpO7n5kI1dxvGtqWEcGF/view?usp=drivesdk</a><a href="https://drive.google.com/file/d/11X58kSdMWtGoVpO7n5kI1dxvGtqWEcGF/view?usp=drivesdk" style="-webkit-tap-highlight-color: transparent;"></a>&nbsp;</p><p></p><p></p><p></p><p></p></p>
',
                'excerpt' => 'Brosur penyewaan tanaman hias',
                'counter' => 20,
                'date' => '2022-04-21',
                'status' => 1,
                'created_at' => '2022-04-25 04:07:23',
                'updated_at' => '2023-05-07 04:49:15',
                'user_id' => 1,
            ),
            4 => 
            array (
                'id' => 31,
                'nama' => 'Green Edu Bdg menyediakan Rental Tanaman Hias',
                'slug' => 'Rental tanaman hias',
                'foto' => '/assets/artikel/green-edu-16744461500.png',
                'detail' => '<p style="text-align: center; "><p style="text-align: left;"><img data-bs-filename="WhatsApp Image 2023-01-10 at 20.10.29 2.jpeg" style="width: 663px;" src="/assets/artikel/green-edu-16744461500.png"><br></p><p>Kami menyediakan penyewaan tanaman hias dalam pot, untuk keperluan dekorasi cafe, resto, atau kantor anda. Ada banyak jenis tanaman hias koleksi kami yang bisa anda sewa. Minimal sewa 10 pot untuk 1 bulan. Penataan tanaman hias dan pemeliharaan rutin menjadi tanggung jawab kami. Bila anda berminat, silahkan hubungin kami pada kontak atau nomor yang tercantum. Terima kasih.</p><p><a href="https://drive.google.com/file/d/1u--wV3KwQlykbCIKpFgxylqYIWNgIhAM/view?usp=sharing" target="_blank">Brour Penyewaan Tanaman.pdf</a><br></p><p><br></p><p></p><p></p></p>
',
                'excerpt' => 'Sedia Tanaman Hias dalam pot untuk disewakan kepada cafe, resto, kantor, dsb. N',
                'counter' => 62,
                'date' => '2022-04-23',
                'status' => 1,
                'created_at' => '2022-04-25 04:15:09',
                'updated_at' => '2023-05-07 02:45:38',
                'user_id' => 1,
            ),
            5 => 
            array (
                'id' => 32,
                'nama' => 'Sejarah dan Tema Hari Keadilan Sosial Sedunia pada 20 Februari 2022',
                'slug' => 'sejarah-dan-tema-hari-keadilan-sosial-sedunia-pada-20-februari-2022-baca-selengkapnya-di-artikel-sejarah-dan-tema-hari-keadilan-sosial-sedunia-pada-20-februari-2022-httpstirtoidgo2g',
                'foto' => '/assets/artikel/sejarah-da16508901690.png',
            'detail' => '<p style="text-align: center; "><img style="width: 355.392px; height: 426.8px;" data-bs-filename="274312330_3375202526044616_3965931927643614004_n.webp" src="/assets/artikel/sejarah-da16508901690.png"><p>Tanggal 20 Februari diperingati sebagai World Day of Social Justice atau Hari Keadilan Sosial Sedunia.Hari peringatan yang dirayakan secara global tersebut akan jatuh pada Minggu (20/2/2022).</p><p>Sejarah mencatat, Hari Keadilan Sosial Sedunia telah diperingati sejak 2009.&nbsp; Setiap tahunnya, peringatan Hari Keadilan Sosial Sedunia mengangkat satu tema dan pesan tertentu. Hari Keadilan Sosial Sedunia merupakan peringatan untuk menjamin keadilan bagi seluruh komunitas global melalui pekerjaan, perlindungan sosial, dialog sosial, serta prinsip-prinsip dan hak dasar di tempat kerja.</p><p> Peringatan ini dideklarasikan oleh Majelis Umum Perserikatan Bangsa-Bangsa (PBB) sebagai upaya mempromosikan pembangunan sosial dan martabat manusia. Misi global yang diusung pada peringatan Hari Keadilan Sosial Sedunia adalah mengatasi sejumlah isu seperti diskriminasi, kemiskinan, dan kesetaraan gender. </p><p><b>Sejarah Hari Keadilan Sosial Sedunia </b></p><p>Melansir laman resmi PBB, tanggal 20 Februari ditetapkan sebagai Hari Keadilan Sosial Sedunia pada 26 November 2007 oleh Majelis Umum PBB. Penetapannya dipicu oleh banyaknya masalah ketidakadilan sosial di dunia khususnya dari sektor ekonomi. </p><p>Masalah-masalah tersebut bahkan diakui masih ada hingga saat ini, termasuk ketidaksetaraan gender, rasisme sistemik, hingga pengangguran. Hari Keadilan Sosial Sedunia kemudian dideklarasikan pertama kalinya tanggal 8 Juni 2008, sebagai langkah dari PBB menuju komitmen untuk keadilan sosial yang berkelanjutan dan globalisasi yang adil. Menyusul deklarasi tersebut, Hari Keadilan Sosial Sedunia dirayakan untuk pertama kalinya pada 2009. </p><p>Setiap tahunnya peringatan Hari Kedilan Sosial Sedunia menjadi momen untuk komunitas dunia membantu mewujudkan keadilan sosial di masa sekarang dan masa depan. Guru-guru dan orang tua berperan penting dalam mengajarkan pentingnya ideologi keadilan sosial bagi anak-anak muda agar generasi berikutnya tidak melakukan kesalahan yang sama seperti generasi sebelumnya. Tema Hari Keadilan Sosial Sedunia 2022 Tahun ini Hari Keadilan Sosial Sedunia mengangkat tema "Achieving Social Justice through Formal Employment" yang artinya mencapai keadilan sosial melalui pekerjaan formal. </p><p>PBB mengungkapkan bahwa tema ini membawa misi dalam mempromosikan transisi masyarakat dari pekerjaan informal ke pekerjaan formal untuk mengurangi kemiskinan dan ketidaksetaraan. Hal ini mengacu pada kondisi ekonomi dunia yang rentan selama pandemi COVID-19, dimana lebih dari 60 persen masyarakat dunia masih bekerja di sektor informal. Pekerjaan informal cenderung tidak memiliki perlindungan sosial, tunjangan, dan dua kali berisiko memiliki penghasilan lebih kecil dibanding pekerjaan formal. Banyaknya jumlah masyarakat yang bekerja di sektor informal bukan karena pilihan, melainkan karena kurangnya kesempatan dalam perekonomian formal. Oleh karena itu, tema tahun ini mendorong seluruh komunitas dunia untuk melakukan formalisasi, yaitu meningkatkan kemampuan ekonomi formal agar dapat menyediakan kesempatan kerja yang layak serta mampu menyerap masyarakat dari sektor informal. Beberapa strategi diantaranya adalah dengan memanfaatkan partisipasi penuh perempuan dalam angkatan kerja, pemanfaatan teknologi informasi, hingga pencegahan informalisasi pekerjaan<br style=""><br style="">Baca selengkapnya di artikel "Sejarah dan Tema Hari Keadilan Sosial Sedunia pada 20 Februari 2022",&nbsp;<a href="https://tirto.id/go2G" style="touch-action: manipulation;">https://tirto.id/go2G</a><br></p></p>
',
                'excerpt' => 'Sejarah mencatat, Hari Keadilan Sosial Sedunia telah diperingati sejak 2009. Setiap tahunnya, peringatan Hari Keadilan Sosial Sedunia mengangkat satu tema dan pesan tertentu.',
                'counter' => 12,
                'date' => '2022-02-20',
                'status' => 1,
                'created_at' => '2022-04-25 12:36:09',
                'updated_at' => '2023-05-06 23:34:51',
                'user_id' => 1,
            ),
            6 => 
            array (
                'id' => 33,
                'nama' => 'CATATAN KITA #01',
                'slug' => 'catatan-kita-01',
                'foto' => '/assets/artikel/catatan-ki16746164050.png',
            'detail' => '<p style="text-align: center; line-height: 1.5;"><br><p style="line-height: 1.5;"><br></p><p style="line-height: 1.5;"><img style="width: 913px;" data-bs-filename="WhatsApp Image 2022-01-27 at 19.31.43 (5).jpeg" src="/assets/artikel/catatan-ki16746164050.png"></p><p style="line-height: 1.5;"><br></p><p class="MsoNormal" align="center" style="text-align:center;"><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;">CATATAN KITA #01</span><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;"><p></p></span></p><p class="MsoNormal"><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;">Kita semua ini adalah biasa dalam pandangan orang tidak mengenal kita..</span><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;"><p></p></span></p><p class="MsoNormal"><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;">Kita adalah orang yang menarik di mata orang yang mahami kita..</span><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;"><p></p></span></p><p class="MsoNormal"><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;">Kita istimewa di mata orang yang mencintai kita..</span><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;"><p></p></span></p><p class="MsoNormal"><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;">Kita adalah pribadi yang menjengkelkan di mata orang yang hasad terhadap kita..</span><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;"><p></p></span></p><p class="MsoNormal"><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;">Kita adalah orang yang jahat di mata orang yang iri padap kita..</span><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;"><p></p></span></p><p class="MsoNormal"><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;">Dan pada akhirnya setiap orang memiliki persepsi masing-masing terhadap kita, maka tak usah berlelah-lelah agar tampak baik dan sempurna di depan orang lain... </span><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;"><p></p></span></p><p class="MsoNormal"><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;">Sesungguhnya mencari keridhoan manusia itu tujuan yang tidak akan pernah tercapai.</span><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;"><p></p></span></p><p class="MsoNormal"><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;">Sedangkan mencari keridhoan Tuhan mu adalah hal utama.</span><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;"><p></p></span></p><p class="MsoNormal"><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;">Maka tinggalkanlah apa yang tak bisa kau capai,dan fokuslah pada sesuatu yang tak boleh kau tinggalkan ...</span><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;"><p></p></span></p><p class="MsoNormal"><span style="mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:SimSun;
mso-bidi-font-family:\'Times New Roman\';font-size:12,0000pt;">&nbsp;</span></p><p></p></p>
',
                'excerpt' => 'Catatan Kita adalah catatan kecil tentang perjalanan hidup yang sayang kalau terlewatkan sehingga dirasa sangat tepat apabila berbagai pengalaman maupun perasaan yang ada itu didokumentasikan agar tidak menguap begitu saja hilang ditelan waktu.',
                'counter' => 11,
                'date' => '2022-03-17',
                'status' => 1,
                'created_at' => '2022-04-25 12:41:10',
                'updated_at' => '2023-05-07 09:24:21',
                'user_id' => 1,
            ),
            7 => 
            array (
                'id' => 34,
                'nama' => 'Akses Jalan Cianjur Selatan Rusak Parah, Warga Tuntut Perbaikan',
                'slug' => 'akses-jalan-cianjur-selatan-rusak-parah-warga-tuntut-perbaikan',
                'foto' => '/assets/artikel/akses-jala16508908150.png',
            'detail' => '<p style="text-align: center; margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;"><img style="width: 50%;" data-bs-filename="IMG-20220219-WA0020.jpg" src="/assets/artikel/akses-jala16508908150.png"><span style="list-style: none; border: 0px; outline: none;"><br></span><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;"><span style="list-style: none; border: 0px; outline: none;">Cianjur</span>&nbsp;&acirc;&#128;&#147; Kesal karena akses jalan provinsi di wilayah Cianjur selatan rusak parah, warga pun protes dengan menanami pohon pisang di sepanjang jalan dan menuntut adanya perbaikan.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Pasalnya,&nbsp;<a href="https://cianjurtoday.com/tag/jalan-provinsi" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">jalan provinsi</a>&nbsp;di Cianjur selatan mulai dari Kecamatan&nbsp;<a href="https://cianjurtoday.com/tag/cilaku" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">Cilaku</a>&nbsp;hingga&nbsp;<a href="https://cianjurtoday.com/tag/sindangbarang" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">Sindangbarang</a>&nbsp;tersebut merupakan akses vital kegiatan masyarakat.</p><div class="stream-item stream-item-in-post stream-item-inline-post aligncenter" style="margin: 6px auto; list-style: none; border: 0px; outline: none; text-align: center; position: relative; z-index: 2; clear: both;"></div><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Kondisi&nbsp;<a href="https://cianjurtoday.com/tag/jalan-rusak" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">jalan rusak</a>&nbsp;semakin parah saat hujan tiba, bahkan beberapa lokasi banyak badan jalan yang amblas dan sangat membahayakan. Mulai dari Kecamatan Cilaku, Cibeber, Campaka, Sukanagara, Pagelaran, Tanggeung, Cibinong, dan Sindangbarang.&nbsp;</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Salah seorang mahasiswa Cianjur, Agus Rama Tunggaraga mengatakan, aksi tanam pohon pisang di jalan provinsi ini sebagai bentuk protes masyarakat, akibat jalan rusak di wilayah Cianjur menuju selatan yang belum kunjung diperbaiki.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Saya asli orang Cianjur selatan, cape setiap pulang jalannya rusak begini. Makanya, saya bersama teman mahasiswa lainnya sengaja membuat aksi tanam pohon pisang di sepanjang jalan 8 kecamatan ini,&acirc;&#128;&#157; ujarnya kepada wartawan, Jumat (18/2/2022).&nbsp;</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Tak hanya itu, warga pun turut memasang foto Gubernur Jawa Barat, Ridwan Kamil dan membentangkan spanduk berisikan sejumlah ungkapan protes.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Mulai desakan agar Gubernur segera melakukan perbaikan jalan hingga imbauan hati-hati pada masyarakat saat melintasi jalan, karena kondisinya yang rusak parah.&nbsp;</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Sebagai gubernur, Ridwan Kamil harus bertanggungjawab terhadap pembangunan. Jangan hanya pencitraan di media sosial, tapi bangun yang benar infrastrukturnya. Kami sudah jenuh, jalan ke Cianjur selatan rusak parah, kami menuntut agar ada perbaikan dan pembangunan,&acirc;&#128;&#157; ungkapnya.&nbsp;</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Ia menegaskan, mahasiswa dan masyarakat Cianjur akan turun ke jalan menggelar aksi, jika Pemprov Jawa Barat tidak merespon tuntutan perbaikan jalan tersebut.&nbsp;</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Jalan ini akses utama untuk banyak kegiatan masyarakat. Kalau tidak direspon, berarti Pemprov tidak memperhatikan pembangunan daerah. Kami akan turun ke jalan menggelar aksi,&acirc;&#128;&#157; tegasnya.&nbsp;</p><h2 id="h-jalan-cianjur-selatan-dibiarkan-rusak-bertahun-tahun" style="margin-bottom: 0.5em; list-style: none; border: 0px; outline: none; overflow-wrap: break-word; line-height: 1.4;">Jalan Cianjur Selatan Dibiarkan Rusak Bertahun-tahun</h2><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Terpisah, warga Sindangbarang, H Abdul Rasyid menerangkan, akses jalan menuju Cianjur selatan memang sudah bertahun-tahun tidak ada perbaikan. Kalaupun ada, hanya sebatas penambalan dan biasanya tidak bertahan lama.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Sudah lama tidak ada perbaikan. Lupa saya, kapan terakhir jalan bagus. Karena sekarang kondisinya rusak parah,&acirc;&#128;&#157; imbuhnya.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Ia menuturkan, kondisi jalan rusak tersebut sering menjadi penyebab kecelakaan bagi pengendara yang melintas.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Sering yang kecelakaan, apalagi saat hujan. Lubang jalan tidak terlihat karena tertutup genangan air,&acirc;&#128;&#157; tambahnya.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Ia berharap, perbaikan akses jalan provinsi di Cianjur selatan tersebut segera mendapat perhatian pemerintah, agar bisa memberi rasa aman dan nyaman bagi pengguna jalan.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Saya berharap segera ada perbaikan, agar masyarakat bisa nyaman beraktivitas,&acirc;&#128;&#157; tutupnya.(ren/sis)</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Sumber:&nbsp;<a href="https://cianjurtoday.com/" style="background-color: rgb(255, 255, 255); list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">CIANJURTODAY.COM</a></p></p>
',
                'excerpt' => 'Kesal karena akses jalan provinsi di wilayah Cianjur selatan rusak parah, warga pun protes dengan menanami pohon pisang di sepanjang jalan dan menuntut adanya perbaikan.',
                'counter' => 10,
                'date' => '2022-02-19',
                'status' => 1,
                'created_at' => '2022-04-25 12:46:55',
                'updated_at' => '2023-05-10 04:01:25',
                'user_id' => 1,
            ),
            8 => 
            array (
                'id' => 35,
                'nama' => 'Kabupaten Cianjur Selatan akan Punya 14 Kecamatan dan 161 Desa',
                'slug' => 'kabupaten-cianjur-selatan-akan-punya-14-kecamatan-dan-161-desa',
                'foto' => '/assets/artikel/kabupaten-16508911620.png',
            'detail' => '<p style="text-align: center; margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;"><img style="width: 50%;" data-bs-filename="Kabupaten-Cianjur-Selatan-akan-Punya-14-Kecamatan-dan-161-Desa.jpg" src="/assets/artikel/kabupaten-16508911620.png"><br><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;"><a href="https://cianjurtoday.com/tag/pemekaran" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">Pemekaran</a>&nbsp;Cianjur Selatan mulai masuk ke babak baru. Dewan Perwakilan Rakyat Daerah (DPRD) Provinsi Jawa Barat membentuk panitia khusus (pansus) berkaitan tiga calon daerah persiapan otonom baru (CDPOB).</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Pansus ini akan membahas terkait CDPOB, yaitu Kabupaten Garut Utara, Tasikmalaya Selatan, dan Cianjur Selatan.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Sadar Muslihat terpilih sebagai Ketua Pansus dalam rapat paripurna di Gedung DPRD Jabar, Kota Bandung, Jumat (11/2/2022).</p><div class="stream-item stream-item-in-post stream-item-inline-post aligncenter" style="margin: 6px auto; list-style: none; border: 0px; outline: none; text-align: center; position: relative; z-index: 2; clear: both;"></div><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Dalam rapat paripurna tersebut,&nbsp;<a href="https://jabarprov.go.id/" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">Pemprov Jabar</a>&nbsp;mengusulkan Kabupaten Cianjur Selatan sebagai CDPOB setelah melalui serangkaian proses persetujuan. Mulai dari tingkat desa hingga DPRD dan Pemkab Cianjur.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Gubernur Jawa Barat, Ridwan Kamil mengatakan Luas wilayah Kabupaten Cisel rencananya akan memiliki luas 2.311 Kilometer persegi.</p><div class="crp_related  " style="padding-top: 20px; padding-right: 10px; padding-left: 10px; margin-bottom: 20px; list-style: none; border: 1px solid rgb(248, 248, 248); outline: none; border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 2px 0px;"><h3 style="margin-bottom: 0.5em; list-style: none; border: 0px; outline: none; line-height: 1.4; overflow-wrap: break-word;">Baca Juga:</h3><ul style="padding-left: 15px; margin-bottom: 20px; margin-left: 20px; border: 0px; outline: none; overflow-wrap: break-word;"><li style="margin-bottom: 5px; list-style: none disc; border: 0px; outline: none;"><a href="https://cianjurtoday.com/inilah-daftar-373-pejabat-cianjur-yang-telah-dilantik/" target="_blank" class="crp_link post-10430" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;"><span class="crp_title" style="list-style: none; border: 0px; outline: none;">Inilah Daftar 373 Pejabat Cianjur yang Telah Dilantik</span></a></li><li style="margin-bottom: 5px; list-style: none disc; border: 0px; outline: none;"><a href="https://cianjurtoday.com/tiga-dob-jabar-disahkan-bagaimana-dengan-cianjur-selatan/" target="_blank" class="crp_link post-25597" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;"><span class="crp_title" style="list-style: none; border: 0px; outline: none;">Tiga DOB Jabar Disahkan, Bagaimana dengan Cianjur Selatan?</span></a></li><li style="margin-bottom: 5px; list-style: none disc; border: 0px; outline: none;"><a href="https://cianjurtoday.com/pemekaran-cisel-mulai-dibahas-dprd-jabar-dan-forkopimda/" target="_blank" class="crp_link post-58409" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;"><span class="crp_title" style="list-style: none; border: 0px; outline: none;">Pemekaran Cisel Mulai Dibahas DPRD Jabar dan Forkopimda&acirc;&#128;&brvbar;</span></a></li><li style="margin-bottom: 5px; list-style: none disc; border: 0px; outline: none;"><a href="https://cianjurtoday.com/soal-pemekaran-cipanas-dprd-harus-melibatkan-dewan-baru/" target="_blank" class="crp_link post-7543" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;"><span class="crp_title" style="list-style: none; border: 0px; outline: none;">Soal Pemekaran Cipanas, DPRD: Harus Melibatkan Dewan Baru</span></a></li><li style="margin-bottom: 5px; list-style: none disc; border: 0px; outline: none;"><a href="https://cianjurtoday.com/pemkab-cianjur-alokasikan-anggaran-rp177-miliar-untuk-pemekaran/" target="_blank" class="crp_link post-58487" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;"><span class="crp_title" style="list-style: none; border: 0px; outline: none;">Pemkab Cianjur Alokasikan Anggaran Rp177 miliar untuk&acirc;&#128;&brvbar;</span></a></li><li style="margin-bottom: 5px; list-style: none disc; border: 0px; outline: none;"><a href="https://cianjurtoday.com/fraksi-pkb-siap-kawal-persetujuan-bersama-pemekaran-cianjur-selatan/" target="_blank" class="crp_link post-19155" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;"><span class="crp_title" style="list-style: none; border: 0px; outline: none;">Fraksi PKB Siap Kawal Persetujuan Bersama Pemekaran Cianjur&acirc;&#128;&brvbar;</span></a></li></ul><div class="crp_clear" style="list-style: none; border: 0px; outline: none;"></div></div><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Di dalamnya nanti ada 14 kecamatan dan 161 desa,&acirc;&#128;&#157; Ucap Emil sapaan akrab Ridwan Kamil.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Emil menambahkan, Luas&nbsp;<a href="https://cianjurtoday.com/tag/kabupaten-cianjur" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">Kabupaten Cianjur</a>&nbsp;sebagai daerah induk otomatis akan menyusut menjadi 1.303 kilometer yang sebelumnya memiliki luas wilayah sekitar 3,614 kilometer persegi.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Selain itu dana sebesar Rp177,4 miliar juga akan dikucurkan Kabupaten Cianjur kepada Kabupaten Cisel setelah diresmikan menjadi daerah persiapan selama tiga tahun berturut-turut.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Kabupaten Cianjur Selatan akan berbatasan dengan Cianjur di sebelah Utara, lalu berbatasan dengan Samudera Hindia di bagian selatan. Sementara itu, di bagian barat berbatasan dengan Kabupaten Sukabumi, dan Kabupaten Bandung serta Bandung Barat di bagian timur,&acirc;&#128;&#157; ucap Emil.</p><h2 id="h-pmck-sambut-baik-rencana-pemekaran-cianjur-selatan" style="margin-bottom: 0.5em; list-style: none; border: 0px; outline: none; overflow-wrap: break-word; line-height: 1.4;">PMCK Sambut Baik Rencana Pemekaran Cianjur Selatan</h2><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Sebelumnya, Paguyuban Masyarakat&nbsp;<a href="https://cianjurtoday.com/tag/cianjur-kidul" style="list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;">Cianjur Kidul</a>&nbsp;(PMCK) menyambut baik pengkajian calon Daerah Otonomi Baru (DOB). Pasalnya, selama bertahun-tahun, upaya pemekaran tersebut akhirnya dapat terwujud.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Namun demikian, PMCK tetap harus bersabar terlebih dahulu. Sebab, saat ini moratorium masih berlaku dan pengajuan masih membutuhkan proses yang pelaksanaanya pada tahun 2022.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">Ketua PMCK, Ceng Badri mengatakan, hal tersebut sebagai representasi aspirasi dari masyarakat Cisel dan pihaknya bersyukur bahwa keseriusan DOB kembali terdengar.</p><p style="margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;">&acirc;&#128;&#156;Kami tentunya berterima kasih kepada Pemerintah Kabupaten (Pemkab) Cianjur dan tim teknis bentukan Bupati Cianjur terkait adanya percepatan proses aspirasi masyarakat Cisel,&acirc;&#128;&#157; ujarnya kepada Cianjur Today, Jumat (3/9/2021). (arm)</p></p>
',
            'excerpt' => 'Pemekaran Cianjur Selatan mulai masuk ke babak baru. Dewan Perwakilan Rakyat Daerah (DPRD) Provinsi Jawa Barat membentuk panitia khusus (pansus) berkaitan tiga calon daerah persiapan otonom baru (CDPOB).',
                'counter' => 14,
                'date' => '2022-03-09',
                'status' => 1,
                'created_at' => '2022-04-25 12:52:42',
                'updated_at' => '2023-05-09 14:45:49',
                'user_id' => 1,
            ),
            9 => 
            array (
                'id' => 36,
                'nama' => 'IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD',
                'slug' => 'ideal-cocktails-from-our-barmen-for-pefect-mood',
                'foto' => '/assets/artikel/ideal-cock16784303220.png',
                'detail' => '<h2 class="title mb-10" style="text-align: center; "><img data-bs-filename="blog-post-1.jpg" style="width: 748px;" src="/assets/artikel/ideal-cock16784303220.png"><br>

<h2 class="title mb-10">ideal cocktails from our barmen for pefect mood</h2><div class="mt-10">
<p>For those of us who want to say thank you to our moms, it\'s not always easy
to put those big feelings in words. Which is where Dribbble comes in.</p>
</div><div class="mt-20">
<p>These eight shots crystallize the hard work moms put into keeping their kids
alive, happy, and healthy. They might give you the inspiration you need for
filling out that card&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;or stand alone for your mom\'s interpretation.</p>
</div><div class="mt-20">
<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to
take care of us as we get older&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;often sacrificing their own needs so they
can help with ours. Cruising on a bike </p>
</div><div class="mt-20">
<h3>Here come the moms in space</h3>
<p>A supermarket worker was spat at by a customer attempting to stockpile Pot
Noodles while another was told: &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;I hope you get the virus and die&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157;, as
panic-buying blighted the nations response to coronavirus pandemic.<img data-filename="wkg-roastery.png" style="width: 885.578px;" src="/assets/artikel/ideal-cock16817970281.png"></p>
</div><div class="mt-20">
<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,
Merseyside, on Saturday, as a man in his 30s attempted to buy more than the
three Pot Noodles allowed by the </p>
</div><div class="mt-20">
<h3>Here come the moms in space</h3>
<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was
just one of the horrendous cases of abuse revealed by supermarket workers in
recent days as some customers grow angry over restrictions and empty
shelves.</p>
</div><div class="mt-20">
<p>The doctor was exposed to the virus when the 38-year-old woman visited the
clinic on March 12, the minister said. Five days later, she tested positive.
That day, the doctor was also admitted in hospital.Lorem ipsum dolor sit
amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div><div class="mt-20">
<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
sunt in culpa qui officia deserunt mollit </p>
</div></h2>
',
                'excerpt' => 'Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.',
                'counter' => 115,
                'date' => '2023-03-10',
                'status' => 1,
                'created_at' => '2022-04-28 07:19:02',
                'updated_at' => '2023-05-09 00:39:25',
                'user_id' => 1,
            ),
            10 => 
            array (
                'id' => 38,
                'nama' => 'BUILD A COOL MORNIG WITH CAFENA COFFEE',
                'slug' => 'build-a-cool-mornig-with-cafena-coffee',
                'foto' => '/assets/artikel/build-a-co16784310770.png',
            'detail' => '<p><img data-bs-filename="blog-post-3.jpg" style="width: 640.4px;" src="/assets/artikel/build-a-co16784310770.png"><h2 class="title mb-10" style=\'margin-top: 0px; margin-bottom: 10px; line-height: 1.4; font-size: 35px; color: rgb(0, 0, 0); font-family: "Bebas Neue", cursive; text-transform: uppercase;\'>IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD</h2><div class="mt-10" style="margin-top: 10px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">For those of us who want to say thank you to our moms, it\'s not always easy to put those big feelings in words. Which is where Dribbble comes in.</p></div><div class="mt-20" style="margin-top: 20px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">These eight shots crystallize the hard work moms put into keeping their kids alive, happy, and healthy. They might give you the inspiration you need for filling out that card&acirc;&#128;&#148;or stand alone for your mom\'s interpretation.</p></div><div class="mt-20" style="margin-top: 20px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">Moms are the ones who bandage our boo-boos when we\'re little and continue to take care of us as we get older&acirc;&#128;&#148;often sacrificing their own needs so they can help with ours. Cruising on a bike</p></div><div class="mt-20" style="margin-top: 20px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><h3 style=\'margin-bottom: 10px; line-height: 1.4; font-size: 30px; color: rgb(0, 0, 0); font-family: "Bebas Neue", cursive;\'>Here come the moms in space</h3><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">A supermarket worker was spat at by a customer attempting to stockpile Pot Noodles while another was told: "I hope you get the virus and die", as panic-buying blighted the nations response to coronavirus pandemic.</p></div><div class="mt-20" style="margin-top: 20px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">An eyewitness described the scene at a packed branch of Asda in the Wirral, Merseyside, on Saturday, as a man in his 30s attempted to buy more than the three Pot Noodles allowed by the</p></div><div class="mt-20" style="margin-top: 20px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><h3 style=\'margin-bottom: 10px; line-height: 1.4; font-size: 30px; color: rgb(0, 0, 0); font-family: "Bebas Neue", cursive;\'>Here come the moms in space</h3><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">The incident, which was raised in parliament by Labour MP Bill Esterson, was just one of the horrendous cases of abuse revealed by supermarket workers in recent days as some customers grow angry over restrictions and empty shelves.</p></div><div class="mt-20" style="margin-top: 20px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">The doctor was exposed to the virus when the 38-year-old woman visited the clinic on March 12, the minister said. Five days later, she tested positive. That day, the doctor was also admitted in hospital.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div><div class="mt-20" style="margin-top: 20px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p></div><p></p></p>
',
                'excerpt' => 'Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.',
                'counter' => 22,
                'date' => '2023-01-23',
                'status' => 1,
                'created_at' => '2023-01-23 11:25:30',
                'updated_at' => '2023-05-09 14:35:16',
                'user_id' => 3,
            ),
            11 => 
            array (
                'id' => 39,
                'nama' => 'WHISPER TO US ABOUT YOUR FEELINGS, AND WE WILL PREPARE WHAT YOU NEED NOW.',
                'slug' => 'whisper-to-us-about-your-feelings-and-we-will-prepare-what-you-need-now',
                'foto' => '/assets/artikel/whisper-to16784309510.png',
            'detail' => '<p><img data-bs-filename="blog-post-2.jpg" style="width: 640.4px;" src="/assets/artikel/whisper-to16784309510.png"><p><br></p><h2 class="title mb-10" style=\'margin-top: 0px; margin-bottom: 10px; line-height: 1.4; font-size: 35px; color: rgb(0, 0, 0); font-family: "Bebas Neue", cursive; text-transform: uppercase;\'>IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD</h2><div class="mt-10" style="margin-top: 10px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">For those of us who want to say thank you to our moms, it\'s not always easy to put those big feelings in words. Which is where Dribbble comes in.</p></div><div class="mt-20" style="margin-top: 20px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">These eight shots crystallize the hard work moms put into keeping their kids alive, happy, and healthy. They might give you the inspiration you need for filling out that card&acirc;&#128;&#148;or stand alone for your mom\'s interpretation.</p></div><div class="mt-20" style="margin-top: 20px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">Moms are the ones who bandage our boo-boos when we\'re little and continue to take care of us as we get older&acirc;&#128;&#148;often sacrificing their own needs so they can help with ours. Cruising on a bike</p></div><div class="mt-20" style="margin-top: 20px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><h3 style=\'margin-bottom: 10px; line-height: 1.4; font-size: 30px; color: rgb(0, 0, 0); font-family: "Bebas Neue", cursive;\'>Here come the moms in space</h3><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">A supermarket worker was spat at by a customer attempting to stockpile Pot Noodles while another was told: &acirc;&#128;&#156;I hope you get the virus and die&acirc;&#128;&#157;, as panic-buying blighted the nations response to coronavirus pandemic.</p></div><div class="mt-20" style="margin-top: 20px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">An eyewitness described the scene at a packed branch of Asda in the Wirral, Merseyside, on Saturday, as a man in his 30s attempted to buy more than the three Pot Noodles allowed by the</p></div><div class="mt-20" style="margin-top: 20px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><h3 style=\'margin-bottom: 10px; line-height: 1.4; font-size: 30px; color: rgb(0, 0, 0); font-family: "Bebas Neue", cursive;\'>Here come the moms in space</h3><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">The incident, which was raised in parliament by Labour MP Bill Esterson, was just one of the horrendous cases of abuse revealed by supermarket workers in recent days as some customers grow angry over restrictions and empty shelves.</p></div><div class="mt-20" style="margin-top: 20px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">The doctor was exposed to the virus when the 38-year-old woman visited the clinic on March 12, the minister said. Five days later, she tested positive. That day, the doctor was also admitted in hospital.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div><div class="mt-20" style="margin-top: 20px; color: rgb(33, 37, 41); font-family: Jost, sans-serif; font-size: 16px;"><p style="margin-bottom: 0px; color: rgb(108, 108, 108); font-size: 18px;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p></div><p></p></p>
',
                'excerpt' => 'Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.',
                'counter' => 14,
                'date' => '2023-01-27',
                'status' => 1,
                'created_at' => '2023-01-27 00:27:50',
                'updated_at' => '2023-05-09 00:42:06',
                'user_id' => 3,
            ),
            12 => 
            array (
                'id' => 56,
                'nama' => 'Lagu Pilihan Noah x Peterpan lagu populer indonesia',
                'slug' => 'lagu-pilihan-noah-x-peterpan-lagu-populer-indonesia',
                'foto' => '',
                'detail' => '<p><br><div class="embed-container"><iframe src="https://www.youtube.com/embed/yW3WEwj79b0?autoplay=1&amp;fs=1&amp;iv_load_policy=&amp;showinfo=1&amp;rel=0&amp;cc_load_policy=1&amp;start=0&amp;modestbranding&amp;end=0&amp;controls=1" frameborder="0" width="100%" height="500px" type="text/html" allowfullscreen="true"></iframe></div></p>
',
                'excerpt' => 'Lagu Pilihan Noah x Peterpan | Album Terbaik Noah | Album Populer Noah

Mau request lagu apa?
Jangan lupa like, comment dan subscribe ya

noah, peterpan, ariel noah, lagu populer, mimpi yang sempurna, bintang di surga, andaikan kau datang, tak lagi sama, separuh aku, noah karaoke, spotify indonesia, lagu populer indonesia',
                'counter' => 23,
                'date' => '2023-03-10',
                'status' => 1,
                'created_at' => '2023-03-10 18:10:51',
                'updated_at' => '2023-05-09 00:40:24',
                'user_id' => 1,
            ),
        ));
        
        
    }
}
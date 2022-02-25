<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengisian Soal RSP</title>
    <link rel="icon" type="image/x-icon" href="../asset/img/sic.png">
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: #5D8BF4;
        }
    </style>
    <?php 
        $nama = $_POST['nama'];
        $asal = $_POST['asal'];
    ?>
</head>
<body>
    <div class="container" style="background-color:#f5f5f5">
        <div class="row">
            <div class="col-md-8 mt-3">
                <h4>Pengisian Soal RSP Keagamaan</h4>
                <p>
                    <strong>Nama Lengkap :</strong> <?=$nama;?> <br>
                    <strong>Asal Sekolah :</strong> <?=$asal;?>  
                </p>
            </div>
            <div class="col-md-4 mt-3">
                <p class="mt-4">
                    <strong>Kategori RSP :</strong> Keagamaan <br>
                    <strong>Waktu Pengerjaan:</strong> <span class="badge bg-primary" id="time">60:00 </span> Menit
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <p>
                    Jawablah soal Pilihan Ganda di bawah ini dengan baik dan benar! Waktu 60 menit.
                </p>
                <form action="hasil.php" method="post" id="quiz">
                    <input type="hidden" name="nama" value="<?=$nama?>">
                    <input type="hidden" name="asal" value="<?=$asal?>">
                    <ol>
                        <li>
                            <div id="n1">
                                <p>
                                    <strong>Bukit Tursina adalah tempat Nabi Musa AS menerima kitab dari ALLAH SWT untuk kaum:</strong>
                                </p>
                                <div>
                                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                                    <label for="question-1-answers-A">Nasrani </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                                    <label for="question-1-answers-B">Mayusi</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                                    <label for="question-1-answers-C">Yahudi</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                                    <label for="question-1-answers-D">Qurais</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n2">
                                <strong>Potongan ayat atau kalimat yang berarti “kami telah menciptakan” adalah..</strong>
                                <div>
                                    <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                                    <label for="question-2-answers-A"> Al Amin </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                                    <label for="question-2-answers-B"> Kholakna</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                                    <label for="question-2-answers-C"> Laqod</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                                    <label for="question-2-answers-D"> Al Insyana</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n3">
                                <strong>Perintah yang terdapat dalam QS Al Insyirah ayat 7 (tujuh) berarti didikan untuk bersikap:</strong>
                                <div>
                                    <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                                    <label for="question-3-answers-A"> Tegas dan berani </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                                    <label for="question-3-answers-B"> Percaya diri</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                                    <label for="question-3-answers-C"> Disiplin</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                                    <label for="question-3-answers-D"> Optimis</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n4">
                                <strong>Suroh At Tin merupakan suroh:...</strong>
                                <div>
                                    <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                                    <label for="question-4-answers-A"> Madaniyah </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                                    <label for="question-4-answers-B"> Makkiyah</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                                    <label for="question-4-answers-C"> Suroh yang terakhir</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                                    <label for="question-4-answers-D"> Hasanah</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n5">
                                <strong>Batas antara alam dunia dengan alam akhirat disebut:</strong>
                                <div>
                                    <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                                    <label for="question-5-answers-A"> Alam barzah </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                                    <label for="question-5-answers-B"> Yaumul hisab</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                                    <label for="question-5-answers-C"> Yaumul ba’as</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                                    <label for="question-5-answers-D"> Yaumul mahsyar</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n6">
                                <strong>Arti dari kata “Tollabu”  dalam hadist tentang ilmu adalah:</strong>
                                <div>
                                    <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                                    <label for="question-6-answers-A"> Kewajiban </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                                    <label for="question-6-answers-B"> Menuntut</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                                    <label for="question-6-answers-C"> Setiap</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                                    <label for="question-6-answers-D"> Kembali</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n7">
                                <strong>Perhitungan amal baik dan perbuatan jahat disebut juga:</strong>
                                <div>
                                    <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                                    <label for="question-7-answers-A"> Yumul mizan</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                                    <label for="question-7-answers-B"> Yaumul hisab</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                                    <label for="question-7-answers-C"> Yaumul ba’as</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                                    <label for="question-7-answers-D"> Yaumul kiamat</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n8">
                                <strong>Kiamat kecil di kenal dengan istilah…</strong>
                                <div>
                                    <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                                    <label for="question-8-answers-A"> Kiamat Sugro </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                                    <label for="question-8-answers-B"> Kiamat Kubro</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                                    <label for="question-8-answers-C"> Kiamat Zalzalah</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                                    <label for="question-8-answers-D"> Hari Akhir</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n9">
                                <strong>Diantara tanda-tanda Kiamat Kubro antara lain ialah:</strong>
                                <div>
                                    <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                                    <label for="question-9-answers-A"> Gempa bumi </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                                    <label for="question-9-answers-B"> Gelombang Tsunami</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                                    <label for="question-9-answers-C"> Gunung meletus</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                                    <label for="question-9-answers-D"> Berakhirnya seluruh kehidupan makhluk yang ada di dunia</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n10">
                                <strong>Menuntut ilmu bagi kaum Muslimin hukumnya:</strong>
                                <div>
                                    <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                                    <label for="question-10-answers-A"> Sunnah </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                                    <label for="question-10-answers-B"> Mubah</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                                    <label for="question-10-answers-C"> Makruh</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                                    <label for="question-10-answers-D"> Wajib</label>
                                </div>
                            </div>
                        </li>
                         <li>
                            <div id="n11">
                                <strong>Kiamat dibagi menjadi….</strong>
                                <div>
                                    <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" />
                                    <label for="question-11-answers-A"> Tiga jenis </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                                    <label for="question-11-answers-B"> Dua jenis</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
                                    <label for="question-11-answers-C"> Satu jenis</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" />
                                    <label for="question-11-answers-D"> Empat jenis</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n12">
                                <strong>Menyembelih hewan ternak pada hari Tasrik 11, 12, 13 Dzulhijjah dengan tujuan mendekatkan diri kepda ALLAH dinamakan..</strong>
                                <div>
                                    <input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" />
                                    <label for="question-12-answers-A"> Aqiqah </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                                    <label for="question-12-answers-B"> Kifarat</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />
                                    <label for="question-12-answers-C"> Qurban</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" />
                                    <label for="question-12-answers-D"> Ukiyah</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n13">
                                <strong>Iman terhadap hari Kiamat merupakan Rukun Iman ke…. </strong>
                                <div>
                                    <input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" />
                                    <label for="question-13-answers-A"> 5 (lima) </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                                    <label for="question-13-answers-B"> 4 (empat)</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" />
                                    <label for="question-13-answers-C"> 3 (tiga)</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-13-answers" id="question-13-answers-D" value="D" />
                                    <label for="question-13-answers-D"> 2 (dua)</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n14" >
                                <strong>Syarat hewan Aqiqah dan Qurban yang disembelih adalah..</strong>                    
                                <div>
                                    <input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" />
                                    <label for="question-14-answers-A"> Cukup umur </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                                    <label for="question-14-answers-B"> Tidak buta matanya</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" />
                                    <label for="question-14-answers-C"> Tidak pincang kakinya pertanian</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" />
                                    <label for="question-14-answers-D"> Semua Benar</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n15">  
                                <strong>Wukuf di Padang Arafah adalah salah satu…</strong>                    
                                <div>
                                    <input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" />
                                    <label for="question-15-answers-A"> Syarat wajib Haji </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                                    <label for="question-15-answers-B"> Sunnah Haji</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" />
                                    <label for="question-15-answers-C"> Jenis ibadah Haji</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-15-answers" id="question-15-answers-D" value="D" />
                                    <label for="question-15-answers-D"> Rukun Haji</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n16">
                                <strong>
                                    Hukum pelaksanaan Aqiqah adalah..
                                </strong>                    
                                <div>
                                    <input type="radio" name="question-16-answers" id="question-16-answers-A" value="A" />
                                    <label for="question-16-answers-A"> Wajib </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-16-answers" id="question-16-answers-B" value="B" />
                                    <label for="question-16-answers-B"> Mubah</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-16-answers" id="question-16-answers-C" value="C" />
                                    <label for="question-16-answers-C"> Makruh</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-16-answers" id="question-16-answers-D" value="D" />
                                    <label for="question-16-answers-D"> Sunnah Muakad</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n17">
                                <strong>
                                    Rukun Haji ada berjumlah…
                                </strong>
                                <div>
                                    <input type="radio" name="question-17-answers" id="question-17-answers-A" value="A" />
                                    <label for="question-17-answers-A"> 6 macam </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />
                                    <label for="question-17-answers-B"> 5 macam</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-17-answers" id="question-17-answers-C" value="C" />
                                    <label for="question-17-answers-C"> 4 macam</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-17-answers" id="question-17-answers-D" value="D" />
                                    <label for="question-17-answers-D"> 3 macam</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n18">  
                                <strong>Sikap rela menerima dan merasa cukup atas hasil yang diusahakan serta menjauhkan diri dari rasa tidak puas disebut sikap…</strong>                    
                                <div>
                                    <input type="radio" name="question-18-answers" id="question-18-answers-A" value="A" />
                                    <label for="question-18-answers-A"> Tawakal  </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />
                                    <label for="question-18-answers-B"> Tasamuh</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-18-answers" id="question-18-answers-C" value="C" />
                                    <label for="question-18-answers-C"> Tawaduk</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-18-answers" id="question-18-answers-D" value="D" />
                                    <label for="question-18-answers-D"> Qanaah</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n19">
                                <strong>
                                    Tawaf yang dilakukan ketika akan meninggalkan kota Makkah disebut Tawaf ……
                                </strong>                    
                                <div>
                                    <input type="radio" name="question-19-answers" id="question-19-answers-A" value="A" />
                                    <label for="question-19-answers-A"> Tawaf Ifadah </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />
                                    <label for="question-19-answers-B"> Tawaf Qudum</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-19-answers" id="question-19-answers-C" value="C" />
                                    <label for="question-19-answers-C"> Tawaf Wada’</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-19-answers" id="question-19-answers-D" value="D" />
                                    <label for="question-19-answers-D"> Tawaf Sunnah</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n20">
                                <strong>Rukun Umroh ada….</strong>                    
                                <div>
                                    <input type="radio" name="question-20-answers" id="question-20-answers-A" value="A" />
                                    <label for="question-20-answers-A"> 6 macam </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />
                                    <label for="question-20-answers-B"> 5 macam</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-20-answers" id="question-20-answers-C" value="C" />
                                    <label for="question-20-answers-C"> 4 macam</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-20-answers" id="question-20-answers-D" value="D" />
                                    <label for="question-20-answers-D"> 3 macam</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n21">  
                                <strong>Perbedaan antara Haji dan Umroh terletak pada rukunnya yaitu….</strong>                    
                                <div>
                                    <input type="radio" name="question-21-answers" id="question-21-answers-A" value="A" />
                                    <label for="question-21-answers-A"> Wukuf </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-21-answers" id="question-21-answers-B" value="B" />
                                    <label for="question-21-answers-B"> Tawaf</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-21-answers" id="question-21-answers-C" value="C" />
                                    <label for="question-21-answers-C"> Sa’i</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-21-answers" id="question-21-answers-D" value="D" />
                                    <label for="question-21-answers-D"> Ihrom</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n22">
                                <strong>
                                    Berkunjung ke Baitullah (Ka’bah) untuk melaksanakan ibadah dan syarat-syarat tertentu dan waktu tidak terbatas disebut..
                                </strong>
                                <div>
                                    <input type="radio" name="question-22-answers" id="question-22-answers-A" value="A" />
                                    <label for="question-22-answers-A"> Haji </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-22-answers" id="question-22-answers-B" value="B" />
                                    <label for="question-22-answers-B"> Ziarah</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-22-answers" id="question-22-answers-C" value="C" />
                                    <label for="question-22-answers-C"> Umroh</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-22-answers" id="question-22-answers-D" value="D" />
                                    <label for="question-22-answers-D"> Wukuf</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n23">  
                                <strong>Menunaikan ibadah Umroh terlebih dahulu kemudian ibadah Haji disebut Haji….</strong>                    
                                <div>
                                    <input type="radio" name="question-23-answers" id="question-23-answers-A" value="A" />
                                    <label for="question-23-answers-A"> Haji Ifrad </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-23-answers" id="question-23-answers-B" value="B" />
                                    <label for="question-23-answers-B"> Haji Tamattu</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-23-answers" id="question-23-answers-C" value="C" />
                                    <label for="question-23-answers-C"> Haji Qiran</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-23-answers" id="question-23-answers-D" value="D" />
                                    <label for="question-23-answers-D"> Haji Mabrur</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n24">  
                                <strong>Jumlah ayat yang terdapat pada suroh At Tin ada….</strong>                    
                                <div>
                                    <input type="radio" name="question-24-answers" id="question-24-answers-A" value="A" />
                                    <label for="question-24-answers-A"> 10 ayat</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-24-answers" id="question-24-answers-B" value="B" />
                                    <label for="question-24-answers-B"> 9 Ayat</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-24-answers" id="question-24-answers-C" value="C" />
                                    <label for="question-24-answers-C"> 8 Ayat</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-24-answers" id="question-24-answers-D" value="D" />
                                    <label for="question-24-answers-D"> 7 Ayat</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n25">  
                                <strong>Suroh At Tin termasuk golongan suroh makkiyah kerena turunnya di Makkah yaitu:</strong>                    
                                <div>
                                    <input type="radio" name="question-25-answers" id="question-25-answers-A" value="A" />
                                    <label for="question-25-answers-A"> Sesudah Nabi Muhammad SAW Hijrah </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-25-answers" id="question-25-answers-B" value="B" />
                                    <label for="question-25-answers-B"> Sebelum Nabi Muhammad SAW Hijrah</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-25-answers" id="question-25-answers-C" value="C" />
                                    <label for="question-26-answers-C"> Sewaktu Nabi Muhammad SAW dalam suasana perang badar</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-25-answers" id="question-25-answers-D" value="D" />
                                    <label for="question-25-answers-D"> Pada malam Lailatul Qadar</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n26">
                                <strong>
                                    Jika dilihat dari mengsucikannya najis di bagi menjadi………………macam
                                </strong>                    
                                <div>
                                    <input type="radio" name="question-26-answers" id="question-26-answers-A" value="A" />
                                    <label for="question-26-answers-A"> 2 (dua) </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-26-answers" id="question-26-answers-B" value="B" />
                                    <label for="question-26-answers-B"> 3 (tiga)</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-26-answers" id="question-26-answers-C" value="C" />
                                    <label for="question-26-answers-C"> 4 (empat)</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-26-answers" id="question-26-answers-D" value="D" />
                                    <label for="question-26-answers-D"> 5 (lima)</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n27">
                                <strong>
                                    Dalam kehidupan sehari-hari, Rasulullah SAW memberikan ketauladanan kepada umatnya dalam…
                                </strong>                    
                                <div>
                                    <input type="radio" name="question-27-answers" id="question-27-answers-A" value="A" />
                                    <label for="question-27-answers-A"> Berbagai hal penting </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-27-answers" id="question-27-answers-B" value="B" />
                                    <label for="question-27-answers-B"> Peribadatan dan aqidah</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-27-answers" id="question-27-answers-C" value="C" />
                                    <label for="question-27-answers-C"> Beberapa bidang kehidupan manusia</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-27-answers" id="question-27-answers-D" value="D" />
                                    <label for="question-27-answers-D"> Semua segi kehidupan manusia</label>
                                </div>
                            </div>
                        </li>
                        <li>                    
                            <div id="n28">
                                <strong>
                                   Tinggi dan rendahnya derajat manusia dalam pandangan ALLAH SWT ditentukan..
                                </strong>                    
                                <div>
                                    <input type="radio" name="question-28-answers" id="question28-answers-A" value="A" />
                                    <label for="question-28-answers-A"> Sedikit atau banyaknya amal </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-28-answers" id="question-28-answers-B" value="B" />
                                    <label for="question-28-answers-B"> Berarti atau tidaknya seseorang</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-28-answers" id="question-28-answers-C" value="C" />
                                    <label for="question-28-answers-C"> Kadar ketakwaan kepda ALLAH SWT</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-28-answers" id="question-28-answers-D" value="D" />
                                    <label for="question-28-answers-D"> Status sosial selama hidup di dunia</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n29">  
                                <strong>Ilmu Tajwid adalah ilmu yang membahas tentang…....</strong>                    
                                <div>
                                    <input type="radio" name="question-29-answers" id="question-29-answers-A" value="A" />
                                    <label for="question-29-answers-A"> Seni dan etika membaca Al Qur’an dengan irama dan etika yang baik </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-29-answers" id="question-29-answers-B" value="B" />
                                    <label for="question-29-answers-B"> Beberapa keistimewaan bacaan Al Qur’an</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-29-answers" id="question-29-answers-C" value="C" />
                                    <label for="question-29-answers-C"> Tata cara membaca Al Qur’an dengan bacaan yang benar dan fasih</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-29-answers" id="question-29-answers-D" value="D" />
                                    <label for="question-29-answers-D"> Irama dan teknik membaca Al Qur’an</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n30">
                                <strong>
                                   Ajaran Islam Yang Membicarakan Tentang Tata Cara Bersuci Disebut..
                                </strong>                    
                                <div>
                                    <input type="radio" name="question-30-answers" id="question-30-answers-A" value="A" />
                                    <label for="question-30-answers-A"> Hadast Dan Najis </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-30-answers" id="question-30-answers-B" value="B" />
                                    <label for="question-30-answers-B"> Hadast Besar Dan Kecil</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-30-answers" id="question-30-answers-C" value="C" />
                                    <label for="question-30-answers-C"> Thaharah</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-30-answers" id="question-30-answers-D" value="D" />
                                    <label for="question-30-answers-D"> Kotor Dan Najis</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n31">
                                <strong>
                                    Menurut sunnah Rasulullah SAW, ketentuan-ketentuan shalat jama’ berlaku pada….
                                </strong>                    
                                <div>
                                    <input type="radio" name="question-31-answers" id="question-31-answers-A" value="A" />
                                    <label for="question-31-answers-A"> Sebagian shalat fardu siang hari saja </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-31-answers" id="question-31-answers-B" value="B" />
                                    <label for="question-31-answers-B"> Shalat zuhur, asar, magrib dan isya</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-31-answers" id="question-31-answers-C" value="C" />
                                    <label for="question-31-answers-C"> Jenis shalat tertentu saja</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-31-answers" id="question-31-answers-D" value="D" />
                                    <label for="question-31-answers-D"> Semua shalat fardu</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n32">
                                <strong>Menurut kaidah ilmu tajwid hukum bacaan mim mati ada…………</strong>                    
                                <div>
                                    <input type="radio" name="question-32-answers" id="question-32-answers-A" value="A" />
                                    <label for="question-32-answers-A"> Satu macam </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-32-answers" id="question-32-answers-B" value="B" />
                                    <label for="question-32-answers-B"> Dua macam</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-32-answers" id="question-32-answers-C" value="C" />
                                    <label for="question-32-answers-C"> Tiga macam</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-32-answers" id="question-32-answers-D" value="D" />
                                    <label for="question-32-answers-D"> Empat macam</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n33">
                                <strong>Hukum shalat jum’at adalah fardu ‘ain bagi setiap muslim laki-laki yang memenuhi persyaratannya, yang di maksud fardu ‘ain adalah:</strong>                    
                                <div>
                                    <input type="radio" name="question-33-answers" id="question-33-answers-A" value="A" />
                                    <label for="question-33-answers-A"> Kewajiban yang harus dilaksanakan karena sudah di depan mata </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-33-answers" id="question-33-answers-B" value="B" />
                                    <label for="question-33-answers-B"> Kewajiban yang sekelompok kaum muslimin yang sadar akan jum’atan</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-33-answers" id="question-33-answers-C" value="C" />
                                    <label for="question-33-answers-C">  Kewajiban individual yang harus dilaksanakan setiap orang</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-33-answers" id="question-33-answers-D" value="D" />
                                    <label for="question-33-answers-D"> Kewajiban yang tidak boleh diabaikan dengan alasan bagaimanapun</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n34">
                                <strong>ALLAH SWT Dzat yang Maha Kuasa.dalam membagi rezeki untuk hamba-Nya, Ia mempercayakan kepada salah satu Malaikat-Nya, yaitu Malaikat..</strong>                    
                                <div>
                                    <input type="radio" name="question-34-answers" id="question-34-answers-A" value="A" />
                                    <label for="question-34-answers-A"> Mikail </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-34-answers" id="question-34-answers-B" value="B" />
                                    <label for="question-34-answers-B"> Munkar dan Nakir</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-34-answers" id="question-34-answers-C" value="C" />
                                    <label for="question-34-answers-C"> Zabaniyah</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-34-answers" id="question-34-answers-D" value="D" />
                                    <label for="question-34-answers-D"> Malik</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n35">  
                                <strong>Islam memberi keringanan kepada umat-Nya dalam melaksanakan shalat, misalnya dengan cara men-jama’ dan meng-qashar. Keringanan demikian ini disebut:</strong>                    
                                <div>
                                    <input type="radio" name="question-35-answers" id="question-35-answers-A" value="A" />
                                    <label for="question-35-answers-A"> Kesempurnaan </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-35-answers" id="question-35-answers-B" value="B" />
                                    <label for="question-35-answers-B"> Kekhususan</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-35-answers" id="question-35-answers-C" value="C" />
                                    <label for="question-35-answers-C"> Rukhsah</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-35-answers" id="question-35-answers-D" value="D" />
                                    <label for="question-35-answers-D"> Kesederhanaan</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n36">  
                                <strong>Ada beberapa jenis perbuatan halal yang tercela dalam Islam, misalnya…</strong>                   
                                <div>
                                    <input type="radio" name="question-36-answers" id="question-36-answers-A" value="A" />
                                    <label for="question-36-answers-A"> Meminta-minta sesuatu kepada orang lain </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-36-answers" id="question-36-answers-B" value="B" />
                                    <label for="question-36-answers-B"> Berkali-kali menerima bantuan pihak lain</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-25-answers" id="question-36-answers-C" value="C" />
                                    <label for="question-36-answers-C"> Menipu orang kafir karena suatu urusan penting</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-36-answers" id="question-36-answers-D" value="D" />
                                    <label for="question-36-answers-D"> Memberi bantuan orang yang mampu walaupun tidak diminta</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n37">  
                                <strong>Semua orang yang mengalami sakhratul maut bertemu dengan Malaikat….</strong>          
                                <div>
                                    <input type="radio" name="question-37-answers" id="question-37-answers-A" value="A" />
                                    <label for="question-37-answers-A"> Mikail </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-37-answers" id="question-37-answers-B" value="B" />
                                    <label for="question-37-answers-B"> Jibril</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-37-answers" id="question-37-answers-C" value="C" />
                                    <label for="question-37-answers-C"> Malik</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-37-answers" id="question-37-answers-D" value="D" />
                                    <label for="question-37-answers-D"> Izrail</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n38">  
                                <strong>Shalat Sunnah Rawatib Ada Yang Disebut Rawatib Bahdiyah Karena Dilakukan:</strong>            
                                <div>
                                    <input type="radio" name="question-38-answers" id="question-38-answers-A" value="A" />
                                    <label for="question-38-answers-A"> Menjelang Akhir Kegiatan Ibadah </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-38-answers" id="question-38-answers-B" value="B" />
                                    <label for="question-38-answers-B"> Sebagai Penutup Shalat Fardhu</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-38-answers" id="question-38-answers-C" value="C" />
                                    <label for="question-38-answers-C"> Sesudah Shalat Fardhu</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-38-answers" id="question-38-answers-D" value="D" />
                                    <label for="question-38-answers-D"> Mengawali Shalat Fardhu</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n39">
                                <strong>Lafal yang dibaca Qolqolah berarti di baca dengan:</strong>          
                                <div>
                                    <input type="radio" name="question-39-answers" id="question-39-answers-A" value="A" />
                                    <label for="question-39-answers-A"> Suara memantul </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-39-answers" id="question-39-answers-B" value="B" />
                                    <label for="question-39-answers-B"> Guncangan bibir</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-39-answers" id="question-39-answers-C" value="C" />
                                    <label for="question-39-answers-C"> Pantulan suara</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-39-answers" id="question-39-answers-D" value="D" />
                                    <label for="question-39-answers-D"> Hentakan suara</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n40">  
                                <strong>Dalam pergaulan sehari-hari seorang dikatakan egois apabila:</strong>               
                                <div>
                                    <input type="radio" name="question-40-answers" id="question-40-answers-A" value="A" />
                                    <label for="question-40-answers-A"> Mendapatkan perhatian terlampau besar dari pihak lain </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-40-answers" id="question-40-answers-B" value="B" />
                                    <label for="question-40-answers-B"> Kurang memperhatikan diri sendiri dan orang lain</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-40-answers" id="question-40-answers-C" value="C" />
                                    <label for="question-40-answers-C">Berusaha memperoleh penghargaan secara wajar dari pihak lain</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-40-answers" id="question-40-answers-D" value="D" />
                                    <label for="question-40-answers-D"> Kurang memperhatikan kepentingan orang lain</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n41">  
                                <strong>Beriman kepada Kitab-kitab ALLAH adalah salah satu dari :</strong>               
                                <div>
                                    <input type="radio" name="question-41-answers" id="question-40-answers-A" value="A" />
                                    <label for="question-41-answers-A"> Bukti kesempatan iman seseorang </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-41-answers" id="question-40-answers-B" value="B" />
                                    <label for="question-41-answers-B"> Rukun Islam yang ke lima</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-41-answers" id="question-40-answers-C" value="C" />
                                    <label for="question-41-answers-C"> Pokok-pokok kepercayaan dalam Islam</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-41-answers" id="question-40-answers-D" value="D" />
                                    <label for="question-41-answers-D"> Bukti pengakuan seseorang</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n42">  
                                <strong> Seseorang selamat dari serangan hewan buas yang menakutkan. Menurut sunnah Rasulullah SAW sujud yang dilakukan orang tersebut adalah:</strong>               
                                <div>
                                    <input type="radio" name="question-42-answers" id="question-42-answers-A" value="A" />
                                    <label for="question-42-answers-A"> Sujud tilawah </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-42-answers" id="question-42-answers-B" value="B" />
                                    <label for="question-42-answers-B"> Sujud syukur</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-42-answers" id="question-42-answers-C" value="C" />
                                    <label for="question-42-answers-C"> Sujud khusuk</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-42-answers" id="question-42-answers-D" value="D" />
                                    <label for="question-42-answers-D"> Sujud sahwi</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n43">  
                                <strong>Zuhud terhadap keduniawian adalah bagian dari ajaran agama Islam. Yang dimaksud dengan A. Zuhud terhadap keduniawian adalah:</strong>               
                                <div>
                                    <input type="radio" name="question-43-answers" id="question-43-answers-A" value="A" />
                                    <label for="question-43-answers-A"> Tidak terhadap keduniawian </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-43-answers" id="question-43-answers-B" value="B" />
                                    <label for="question-43-answers-B"> Tidak mengiginkan keduniawian</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-43-answers" id="question-43-answers-C" value="C" />
                                    <label for="question-43-answers-C"> Tidak perduli terhadap keduniawian</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-43-answers" id="question-43-answers-D" value="D" />
                                    <label for="question-43-answers-D"> Tidak tamak terhadap keduniawian</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n44">  
                                <strong>Menurut Islam kehalalan makanan atau minuman di lihat dari 2 (dua) segi yaitu halal:</strong>               
                                <div>
                                    <input type="radio" name="question-44-answers" id="question-44-answers-A" value="A" />
                                    <label for="question-44-answers-A"> Zat dan barangnya </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-44-answers" id="question-44-answers-B" value="B" />
                                    <label for="question-44-answers-B"> Zat dan cara mendapatkannya</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-44-answers" id="question-44-answers-C" value="C" />
                                    <label for="question-44-answers-C"> Wujud dan dagingnya</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-44-answers" id="question-44-answers-D" value="D" />
                                    <label for="question-44-answers-D"> Wujud dan cara memakannya</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n45">  
                                <strong>Secara bahasa kata Mad berarti:</strong>               
                                <div>
                                    <input type="radio" name="question-45-answers" id="question-45-answers-A" value="A" />
                                    <label for="question-45-answers-A"> Penjangannya bacaan </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-45-answers" id="question-45-answers-B" value="B" />
                                    <label for="question-45-answers-B"> Melapangkan bacaan</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-45-answers" id="question-45-answers-C" value="C" />
                                    <label for="question-45-answers-C"> Melonggarkan bacaan</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-45-answers" id="question-45-answers-D" value="D" />
                                    <label for="question-45-answers-D"> Memanjangkan bacaan</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n46">  
                                <strong>Akhlak yang diajarkan Islam meliputi:</strong>               
                                <div>
                                    <input type="radio" name="question-46-answers" id="question-46-answers-A" value="A" />
                                    <label for="question-46-answers-A"> Seluruh aktifitas hidup manusia </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-46-answers" id="question-46-answers-B" value="B" />
                                    <label for="question-46-answers-B"> Seluruh tingkah laku dan perbuatan</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-46-answers" id="question-46-answers-C" value="C" />
                                    <label for="question-46-answers-C"> Akhlakulkarimah</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-46-answers" id="question-46-answers-D" value="D" />
                                    <label for="question-46-answers-D"> Ucapan dan perbuatan</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n47">  
                                <strong>Segala yang disampaikan Rasul kepada umatnya pasti benar karena Rasul bersifat:</strong>               
                                <div>
                                    <input type="radio" name="question-47-answers" id="question-47-answers-A" value="A" />
                                    <label for="question-47-answers-A"> Amanah </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-47-answers" id="question-47-answers-B" value="B" />
                                    <label for="question-47-answers-B"> Fatonah/cerdas</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-47-answers" id="question-47-answers-C" value="C" />
                                    <label for="question-47-answers-C"> Tabligh</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-47-answers" id="question-47-answers-D" value="D" />
                                    <label for="question-47-answers-D"> Siddiq</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n48">  
                                <strong>Sebahagian ulama mengatakan bahwa hewan yang hidup di dua alam (darat dan air) tergolong :</strong>               
                                <div>
                                    <input type="radio" name="question-48-answers" id="question-48-answers-A" value="A" />
                                    <label for="question-48-answers-A"> Tak pantas di makan manusia </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-48-answers" id="question-48-answers-B" value="B" />
                                    <label for="question-48-answers-B"> Disangsikan kelayakannya</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-48-answers" id="question-48-answers-C" value="C" />
                                    <label for="question-48-answers-C"> Meragukan status hukumnya</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-48-answers" id="question-48-answers-D" value="D" />
                                    <label for="question-48-answers-D"> Membahayakan manusia jika dikonsumsi</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n49">  
                                <strong>Tersebut Di Bawah Ini Adalah Tokoh Ilmuwan Pada Masa Itu, Kecuali:</strong>               
                                <div>
                                    <input type="radio" name="question-49-answers" id="question-49-answers-A" value="A" />
                                    <label for="question-49-answers-A"> Aristoteles </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-49-answers" id="question-49-answers-B" value="B" />
                                    <label for="question-49-answers-B"> Ibnu Sina</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-49-answers" id="question-49-answers-C" value="C" />
                                    <label for="question-49-answers-C">  Ibnu Khaldum</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-49-answers" id="question-49-answers-D" value="D" />
                                    <label for="question-49-answers-D"> Al Kindi</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n50">  
                                <strong>Berbicara tentang halal atau haramnya suatu makanan atau minuman berarti berbicara tentang:</strong>               
                                <div>
                                    <input type="radio" name="question-50-answers" id="question-50-answers-A" value="A" />
                                    <label for="question-50-answers-A"> Syariah </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-50-answers" id="question-50-answers-B" value="B" />
                                    <label for="question-50-answers-B"> Akhlakul karimah</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-50-answers" id="question-50-answers-C" value="C" />
                                    <label for="question-50-answers-C"> Tarikh</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-50-answers" id="question-50-answers-D" value="D" />
                                    <label for="question-50-answers-D"> Muamalah</label>
                                </div>
                            </div>
                        </li>
                    </ol>
                    <p class="text-center">
                        Klik Tombol dibawah jika selesai Mengerjakan                   
                    </p>
                    <div class="text-center mb-5">
                        <button type="submit" class="btn btn-primary">Selesai</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        window.onload = function () {
            var fiveMinutes = 60 * 60,
                display = document.querySelector('#time');
            startTimer(fiveMinutes, display);
        };
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengisian Soal RSP</title>
    <link rel="icon" type="image/x-icon" href="asset/img/sic.png">
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
                <h4>Pengisian Soal RSP Pengetahuan Umum</h4>
                <p>
                    <strong>Nama Lengkap :</strong> <?=$nama;?> <br>
                    <strong>Asal Sekolah :</strong> <?=$asal;?>  
                </p>
            </div>
            <div class="col-md-4 mt-3">
                <p class="mt-4">
                    <strong>Kategori RSP :</strong> Pengetahuan UMUM <br>
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
                                    <strong>Observe the dialogue below and answer the question 1 to 3 </strong><br/>
                                    Jihan : Good morning, Ms. Yuli.<br/>
                                    Ms. Yuli : Good morning, Jihan.<br/>
                                    Jihan : I'm sorry, I'm late.<br/>
                                    Ms. Yuli : That's OK. Come in, please.<br/>
                                    Jihan : Thank you.<br/>
                                    Ms. Yuli : Right. Now, Look at the picture. What's this in English, Jesica?<br/>
                                    Jesica : It's a ruler.<br/>
                                    Ms. Yuli : Good. Now open your book on page ten and study the dialogue.<br/>
                                    <strong>Who is late?</strong>
                                </p>
                                <div>
                                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                                    <label for="question-1-answers-A">Ms. Yuli </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                                    <label for="question-1-answers-B">Jihan</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                                    <label for="question-1-answers-C">Jesica</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                                    <label for="question-1-answers-D">Mr. Yuli</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n2" >
                                <strong>What does Jihan say to Ms. Yuli?</strong>
                                <div>
                                    <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                                    <label for="question-2-answers-A"> I'm sorry, to hear that. </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                                    <label for="question-2-answers-B"> I'm sorry, I'm late.</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                                    <label for="question-2-answers-C"> I'm sorry, I don't understand.</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                                    <label for="question-2-answers-D"> I'm sorry, come in.</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n3">
                                <strong>The sentences below are the instruction, except...</strong>
                                <div>
                                    <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                                    <label for="question-3-answers-A"> Come in, please! </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                                    <label for="question-3-answers-B"> Look at the picture!</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                                    <label for="question-3-answers-C"> Open your book!</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                                    <label for="question-3-answers-D"> What is your name?</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n4">
                                <strong>Fungsi yang diketahui y = x2 + 5. Koordinat titik-titik persimpangan pada sumbu y dari grafik fungsi adalah...</strong>
                                <div>
                                    <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                                    <label for="question-4-answers-A"> (0, 0) </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                                    <label for="question-4-answers-B"> (0, 5)</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                                    <label for="question-4-answers-C"> (0, -5)</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                                    <label for="question-4-answers-D"> (5, 0)</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n5">
                                <strong>Sumbu simetri grafik fungsi y = x2 - 6x + 8 adalah...</strong>
                                <div>
                                    <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                                    <label for="question-5-answers-A"> x = 4 </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                                    <label for="question-5-answers-B"> x = 3</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                                    <label for="question-5-answers-C"> x = 2</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                                    <label for="question-5-answers-D"> x = 1</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n6">
                                <strong>Pembuat fungsi nol dari y = x2 + 2x - 3 adalah...</strong>
                                <div>
                                    <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                                    <label for="question-6-answers-A"> -3 dan 1 </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                                    <label for="question-6-answers-B"> -3 dan 1</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                                    <label for="question-6-answers-C"> 3 dan -1</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                                    <label for="question-6-answers-D"> -3 dan -1</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n7">
                                <strong>Pernyataan yang benar untuk grafik fungsi y = x2 - 6x - 16 adalah...</strong>
                                <div>
                                    <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                                    <label for="question-7-answers-A"> Memiliki sumbu simetri x = 6</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                                    <label for="question-7-answers-B"> Koordinat persimpangan dengan sumbu y adalah (0, 16)</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                                    <label for="question-7-answers-C"> Memiliki nilai minimum y = -25</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                                    <label for="question-7-answers-D"> Potong sumbu x pada satu titik</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n8">
                                <strong>Dari asal-usul katanya, "asuransi" berasal dari bahasa Latin assecurare yang berarti...</strong>
                                <div>
                                    <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                                    <label for="question-8-answers-A"> meyakinkan orang </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                                    <label for="question-8-answers-B"> memberikan kepastian</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                                    <label for="question-8-answers-C"> memberikan keamanan</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                                    <label for="question-8-answers-D"> memberikan pinjaman</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n9">
                                <strong>Suatu penemuan unsur kebudayaan baru baik yang berupa alat, ide, atau gagasan yang diciptakan oleh individu atau kelompok individu disebut juga....</strong>
                                <div>
                                    <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                                    <label for="question-9-answers-A"> Discovery </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                                    <label for="question-9-answers-B"> Invention</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                                    <label for="question-9-answers-C"> Asimilasi</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                                    <label for="question-9-answers-D"> Teknik menemukan</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n10">
                                <strong>Uang Kartal adalah...</strong>
                                <div>
                                    <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                                    <label for="question-10-answers-A"> uang yang diterbitkan oleh Bank Sentral, bisa berupa uang logam atau uang kertas. </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                                    <label for="question-10-answers-B"> Uang yang berbentuk simpanan (deposito), yang diterbitkan oleh bank umum seperti cek.</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                                    <label for="question-10-answers-C"> uang pada kartu kredit</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                                    <label for="question-10-answers-D"> uang seperti traveller checque</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n11">
                                <strong>Mata Uang negara Arab Saudi</strong>
                                <div>
                                    <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" />
                                    <label for="question-11-answers-A"> Dirham </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                                    <label for="question-11-answers-B"> Dinar</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
                                    <label for="question-11-answers-C"> Riyal</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" />
                                    <label for="question-11-answers-D"> Dollar</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n12">
                                <strong>Daratan ataupun bawah lautan merupakan kulit pembungkus bumi yang disebut kerak bumi. Bahan penyusun kerak bumi adalah batuan sehingga kerak bumi disebut juga...</strong>
                                <div>
                                    <input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" />
                                    <label for="question-12-answers-A"> Litosfer </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                                    <label for="question-12-answers-B"> Hidrosfer</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />
                                    <label for="question-12-answers-C"> Atmosfer</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" />
                                    <label for="question-12-answers-D"> Astenosfer</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n13">
                                <strong>hasil pembekuan magma di bagian dalam litosfer dekat dapur magma yang mengalami pendinginan yang berlangsung secara lambat... </strong>
                                <div>
                                    <input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" />
                                    <label for="question-13-answers-A"> Batuan Beku </label>
                                </div>
                                <div>
                                    <input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                                    <label for="question-13-answers-B"> Batuan Beku dalam</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" />
                                    <label for="question-13-answers-C"> Batuan Beku korok</label>
                                </div>
                                <div>
                                    <input type="radio" name="question-13-answers" id="question-13-answers-D" value="D" />
                                    <label for="question-13-answers-D"> Batuan Beku luar</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n14" >
                                <strong>Karakteristik Negara Berkembang...</strong>                    
                                <div>
                                    <input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" />
                                    <label for="question-14-answers-A"> Angka Pengangguran rendah </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                                    <label for="question-14-answers-B"> Penguasaan Teknologi tinggi</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" />
                                    <label for="question-14-answers-C"> Sebagian besar masyarakat di bidang pertanian</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" />
                                    <label for="question-14-answers-D"> Tergolong negara maju</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n15">  
                                <strong>Ibukota negara Australia.</strong>                    
                                <div>
                                    <input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" />
                                    <label for="question-15-answers-A"> Perth </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                                    <label for="question-15-answers-B"> Sidney</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" />
                                    <label for="question-15-answers-C"> Canberra</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-15-answers" id="question-15-answers-D" value="D" />
                                    <label for="question-15-answers-D"> Wales</label>
                                </div>
                            </div>
                        </li>
                        <br/>
                        <li>
                            <div id="n16">
                                <p>
                                    Dialog yang melibatkan pemirsa/pendengar untuk ikut serta memberikan usul,pertanyaan, atau tanggapan terhadap masalah yang dibahas. Biasanya dialog dilaksanakan dengan mendatangkan narasumber atau pakar di bidangnya. Dialog bisa dilakukan antara dua orang atau lebih pakar yang membahas suatu masalah. Kegiatan dialog berjalan dengan panduan moderator. Moderator menjembatani jalannya dialog antara narasumber yang satu dengan narasumber yang lain. Dialog lebih bersifat fleksibel, tidak kaku, dan agak rileks, bisa forum resmi maupun tidak resmi.
                                </p>                    
                                <div>
                                    <input type="radio" name="question-16-answers" id="question-16-answers-A" value="A" />
                                    <label for="question-16-answers-A"> Dialog Atraktif </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-16-answers" id="question-16-answers-B" value="B" />
                                    <label for="question-16-answers-B"> Dialog Akrobatik</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-16-answers" id="question-16-answers-C" value="C" />
                                    <label for="question-16-answers-C"> Monolog</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-16-answers" id="question-16-answers-D" value="D" />
                                    <label for="question-16-answers-D"> Dialog Interaktif</label>
                                </div>
                            </div>
                        </li>
                        <br/>
                        <li>
                            <div id="n17">
                                <p>
                                    Merupakan pendapat yang disampaikan kepada orang lain yang bertujuan untuk memperbaiki atau menyanggah pernyataan yang dikemukakan, biasanya berisi tentang ketidaksetujuan, pernyataan setuju, menentang, memperbaiki, atau yang lain.
                                </p>
                                <div>
                                    <input type="radio" name="question-17-answers" id="question-17-answers-A" value="A" />
                                    <label for="question-17-answers-A"> Update Status </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />
                                    <label for="question-17-answers-B"> Haters</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-17-answers" id="question-17-answers-C" value="C" />
                                    <label for="question-17-answers-C"> Komentar</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-17-answers" id="question-17-answers-D" value="D" />
                                    <label for="question-17-answers-D"> Oposisi</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n18">  
                                <strong>Ide, pokok masalah yang mendasari sebuah cerita.</strong>                    
                                <div>
                                    <input type="radio" name="question-18-answers" id="question-18-answers-A" value="A" />
                                    <label for="question-18-answers-A"> Latar  </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />
                                    <label for="question-18-answers-B"> Isi Cerita</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-18-answers" id="question-18-answers-C" value="C" />
                                    <label for="question-18-answers-C"> Tema</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-18-answers" id="question-18-answers-D" value="D" />
                                    <label for="question-18-answers-D"> Penokohan</label>
                                </div>
                            </div>
                        </li>
                        <br/>
                        <li>
                            <div id="n19">
                                <p>
                                    Secara garis besar terdapat empat unsur yang membentuk dalam cerita, yaitu:
                                    <ol>
                                        <li>Lokasi geografis (di dalamnya termasuk pemandangan, dekorasi kamar/ruangan)</li>
                                        <li>Pekerjaan, cara-cara hidup tokoh</li>
                                        <li>Waktu terjadinya peristiwa, termasuk di dalamnya zaman, musim, tahun, bulan, hari, waktu</li>
                                        <li>Lingkungan relegius,moral, intelektual, sosial, emosional.</li>
                                    </ol>
                                    Dari poin-poin diatas merupakan unsur dari..
                                </p>                    
                                <div>
                                    <input type="radio" name="question-19-answers" id="question-19-answers-A" value="A" />
                                    <label for="question-19-answers-A"> Latar </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />
                                    <label for="question-19-answers-B"> Isi Cerita</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-19-answers" id="question-19-answers-C" value="C" />
                                    <label for="question-19-answers-C"> Tema</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-19-answers" id="question-19-answers-D" value="D" />
                                    <label for="question-19-answers-D"> Penokohan</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n20">
                                <strong>Ibukota Negara Amerika Serikat</strong>                    
                                <div>
                                    <input type="radio" name="question-20-answers" id="question-20-answers-A" value="A" />
                                    <label for="question-20-answers-A"> Washington DC </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />
                                    <label for="question-20-answers-B"> Washington</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-20-answers" id="question-20-answers-C" value="C" />
                                    <label for="question-20-answers-C"> New York</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-20-answers" id="question-20-answers-D" value="D" />
                                    <label for="question-20-answers-D"> Los Angeles</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n21">  
                                <strong>Inggris dilewati garis bujur nol derajat yang melewati Kota...</strong>                    
                                <div>
                                    <input type="radio" name="question-21-answers" id="question-21-answers-A" value="A" />
                                    <label for="question-21-answers-A"> Manchester </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-21-answers" id="question-21-answers-B" value="B" />
                                    <label for="question-21-answers-B"> Greenwich</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-21-answers" id="question-21-answers-C" value="C" />
                                    <label for="question-21-answers-C"> Leeds</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-21-answers" id="question-21-answers-D" value="D" />
                                    <label for="question-21-answers-D"> Liverpool</label>
                                </div>
                            </div>
                        </li>
                        <br/>
                        <li>
                            <div id="n22">
                                <p>
                                    Di Mesir terdapat Terusan.... yang menghubungkan antara Laut Merah dengan Laut Tengah. Terusan ini dibangun oleh Ferdinan de Lesseps (dari Prancis pada tahun 1859-1869) yang penggaliannya melewati beberapa danau yaitu Danau Timzeh, Danau Bellah, dan Danau Pahit.
                                </p>
                                <div>
                                    <input type="radio" name="question-22-answers" id="question-22-answers-A" value="A" />
                                    <label for="question-22-answers-A"> Panama </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-22-answers" id="question-22-answers-B" value="B" />
                                    <label for="question-22-answers-B"> Suez</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-22-answers" id="question-22-answers-C" value="C" />
                                    <label for="question-22-answers-C"> Giblatar</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-22-answers" id="question-22-answers-D" value="D" />
                                    <label for="question-22-answers-D"> Malaka</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n23">  
                                <strong>Ibukota negara Mesir...</strong>                    
                                <div>
                                    <input type="radio" name="question-23-answers" id="question-23-answers-A" value="A" />
                                    <label for="question-23-answers-A"> Abu Dhabi </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-23-answers" id="question-23-answers-B" value="B" />
                                    <label for="question-23-answers-B"> Teheran</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-23-answers" id="question-23-answers-C" value="C" />
                                    <label for="question-23-answers-C"> Kairo</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-23-answers" id="question-23-answers-D" value="D" />
                                    <label for="question-23-answers-D"> Jeddah</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n24">  
                                <strong>Jerman, Inggris, Amerika Serikat, Jepang, Prancis, Italia, dan Singapura adalah termasuk negara...</strong>                    
                                <div>
                                    <input type="radio" name="question-24-answers" id="question-24-answers-A" value="A" />
                                    <label for="question-24-answers-A"> Berkembang</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-24-answers" id="question-24-answers-B" value="B" />
                                    <label for="question-24-answers-B"> Miskin</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-24-answers" id="question-24-answers-C" value="C" />
                                    <label for="question-24-answers-C"> Maju</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-24-answers" id="question-24-answers-D" value="D" />
                                    <label for="question-24-answers-D"> Persemakmuran</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n25">  
                                <strong>Proses bertemunya dua budaya atau lebih yang bercampur menjadi satu dalam bentuk budaya baru, sementara budaya aslinya tidak tampak...</strong>                    
                                <div>
                                    <input type="radio" name="question-25-answers" id="question-25-answers-A" value="A" />
                                    <label for="question-25-answers-A"> Akulturasi </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-25-answers" id="question-25-answers-B" value="B" />
                                    <label for="question-25-answers-B"> Asimilasi</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-25-answers" id="question-25-answers-C" value="C" />
                                    <label for="question-26-answers-C"> Discovery</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-25-answers" id="question-25-answers-D" value="D" />
                                    <label for="question-25-answers-D"> Invention</label>
                                </div>
                            </div>
                        </li>
                        <br/>
                        <li>
                            <div id="n26">
                                <p>
                                    Suatu sikap menghargai, membiarkan, dan memberikan hak berkembang suatu pendirian (pendapat, pandangan, kepercayaan, kebiasaan, pola tingkah laku) yang berbeda atau bertentangan dengan pendirian diri sendiri.
                                </p>                    
                                <div>
                                    <input type="radio" name="question-26-answers" id="question-26-answers-A" value="A" />
                                    <label for="question-26-answers-A"> Individualistis </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-26-answers" id="question-26-answers-B" value="B" />
                                    <label for="question-26-answers-B"> Difusi</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-26-answers" id="question-26-answers-C" value="C" />
                                    <label for="question-26-answers-C"> Toleransi</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-26-answers" id="question-26-answers-D" value="D" />
                                    <label for="question-26-answers-D"> Simpati</label>
                                </div>
                            </div>
                        </li>
                        <br/>
                        <li>
                            <div id="n27">
                                <p>
                                    Keterlibatan perasaan dari satu kelompok sosial budaya kepada kelompok sosial budaya lainnya. Di dalamnya terkandung aspek kepedulian atau keikutsertaan merasakan perasaan kelompok masyarakat lain, yaitu perasaan senang, sedih, bangga, bahagia atau haru.
                                </p>                    
                                <div>
                                    <input type="radio" name="question-27-answers" id="question-27-answers-A" value="A" />
                                    <label for="question-27-answers-A"> Individualistis </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-27-answers" id="question-27-answers-B" value="B" />
                                    <label for="question-27-answers-B"> Difusi</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-27-answers" id="question-27-answers-C" value="C" />
                                    <label for="question-27-answers-C"> Toleransi</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-27-answers" id="question-27-answers-D" value="D" />
                                    <label for="question-27-answers-D"> Simpati</label>
                                </div>
                            </div>
                        </li>
                        <br/>
                        <li>                    
                            <div id="n28">
                                <p>
                                    Proses penyebaran atau perembesan suatu unsur budaya dari seseorang kepada orang lain, atau dari suatu kelompok masyarakat ke kelompok masyarakat lainnya. Prinsip yang pertama adalah unsur-unsur kebudayaan itu pertama-tama akan diambil alih masyarakat yang paling dekat hubungannya atau letaknya paling dekat dari sumbernya. Baru kemudian, kebudayaan baru tersebut diambil oleh masyarakat yang jauh hubungan atau letaknya jauh dari sumber unsur budaya baru.
                                </p>                    
                                <div>
                                    <input type="radio" name="question-28-answers" id="question28-answers-A" value="A" />
                                    <label for="question-28-answers-A"> Individualistis </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-28-answers" id="question-28-answers-B" value="B" />
                                    <label for="question-28-answers-B"> Difusi</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-28-answers" id="question-28-answers-C" value="C" />
                                    <label for="question-28-answers-C"> Toleransi</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-28-answers" id="question-28-answers-D" value="D" />
                                    <label for="question-28-answers-D"> Simpati</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n29">  
                                <strong>Cairan elektrolit pada Akumulator (aki motor/mobil) adalah...</strong>                    
                                <div>
                                    <input type="radio" name="question-29-answers" id="question-29-answers-A" value="A" />
                                    <label for="question-29-answers-A"> NaCL </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-29-answers" id="question-29-answers-B" value="B" />
                                    <label for="question-29-answers-B"> H<sub>2</sub>SO<sub>4</sub></label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-29-answers" id="question-29-answers-C" value="C" />
                                    <label for="question-29-answers-C"> CACO<sub>3</sub></label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-29-answers" id="question-29-answers-D" value="D" />
                                    <label for="question-29-answers-D"> CaOH</label>
                                </div>
                            </div>
                        </li>
                        <br/>
                        <li>
                            <div id="n30">
                                <p>
                                    Baterai merupakan elemen kering. Jika kamu amati,baterai memiliki dua kutub yaitu kutub positif dan kutub negatif. Kutub positif baterai berupa batang karbon yang dibenamkan ke dalam campuran mangan dioksida (MnO2) dan amonium klorida (NH4Cl).Kutub negatif baterai adalah lapisan paling luar yang terbuat dari....
                                </p>                    
                                <div>
                                    <input type="radio" name="question-30-answers" id="question-30-answers-A" value="A" />
                                    <label for="question-30-answers-A"> Seng </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-30-answers" id="question-30-answers-B" value="B" />
                                    <label for="question-30-answers-B"> Tembaga</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-30-answers" id="question-30-answers-C" value="C" />
                                    <label for="question-30-answers-C"> Mangan</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-30-answers" id="question-30-answers-D" value="D" />
                                    <label for="question-30-answers-D"> Alumunium</label>
                                </div>
                            </div>
                        </li>
                        <br/>
                        <li>
                            <div id="n31">
                                <p>
                                    Proses pertumbuhan jaringan pada medium bernutrisi yang dilakukan secara bebas hama (aseptik) berdasarkan prinsip totipotensi. Totipotensi adalah kemampuan setiap sel untuk berkembang menjadi suatu jasad hidup yang lengkap melalui proses regenerasi...
                                </p>                    
                                <div>
                                    <input type="radio" name="question-31-answers" id="question-31-answers-A" value="A" />
                                    <label for="question-31-answers-A"> Sistem Tanam Palawija </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-31-answers" id="question-31-answers-B" value="B" />
                                    <label for="question-31-answers-B"> Kultur Jaringan</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-31-answers" id="question-31-answers-C" value="C" />
                                    <label for="question-31-answers-C"> Pencangkokan</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-31-answers" id="question-31-answers-D" value="D" />
                                    <label for="question-31-answers-D"> Sistem Benih</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n32">
                                <strong>Banyak muatan listrik pada suatu benda dinyatakan dalam satuan...</strong>                    
                                <div>
                                    <input type="radio" name="question-32-answers" id="question-32-answers-A" value="A" />
                                    <label for="question-32-answers-A"> Ampere </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-32-answers" id="question-32-answers-B" value="B" />
                                    <label for="question-32-answers-B"> Coulomb</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-32-answers" id="question-32-answers-C" value="C" />
                                    <label for="question-32-answers-C"> Voltase</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-32-answers" id="question-32-answers-D" value="D" />
                                    <label for="question-32-answers-D"> Watt</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n33">
                                <strong>Alat listrik yang digunakan untuk memutuskan arus listrik secara otomatis...</strong>                    
                                <div>
                                    <input type="radio" name="question-33-answers" id="question-33-answers-A" value="A" />
                                    <label for="question-33-answers-A"> Dinamo </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-33-answers" id="question-33-answers-B" value="B" />
                                    <label for="question-33-answers-B"> Generator</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-33-answers" id="question-33-answers-C" value="C" />
                                    <label for="question-33-answers-C"> Voltmeter</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-33-answers" id="question-33-answers-D" value="D" />
                                    <label for="question-33-answers-D"> Sekering</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n34">
                                <strong>Alat yang digunakan untuk mengukur tegangan listrik adalah ...</strong>                    
                                <div>
                                    <input type="radio" name="question-34-answers" id="question-34-answers-A" value="A" />
                                    <label for="question-34-answers-A"> Dinamo </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-34-answers" id="question-34-answers-B" value="B" />
                                    <label for="question-34-answers-B"> Generator</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-34-answers" id="question-34-answers-C" value="C" />
                                    <label for="question-34-answers-C"> Voltmeter</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-34-answers" id="question-34-answers-D" value="D" />
                                    <label for="question-34-answers-D"> Sekering</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n35">  
                                <strong>Sebuah bola lampu senter kecil mengalir 300 mA dari baterai 1,5 V. Berapa hambatan bola lampu tersebut...</strong>                    
                                <div>
                                    <input type="radio" name="question-35-answers" id="question-35-answers-A" value="A" />
                                    <label for="question-35-answers-A"> 2 Ohm </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-35-answers" id="question-35-answers-B" value="B" />
                                    <label for="question-35-answers-B"> 3 Ohm</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-35-answers" id="question-35-answers-C" value="C" />
                                    <label for="question-35-answers-C"> 4 Ohm</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-35-answers" id="question-35-answers-D" value="D" />
                                    <label for="question-35-answers-D"> 5 Ohm</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n36">  
                                <strong>Dalam suatu rangkaian listrik, mengalir muatan listrik sebesar 12 C dalam waktu 2 s. Hitunglah kuat arus yang mengalir pada rangkaian tersebut...</strong>                   
                                <div>
                                    <input type="radio" name="question-36-answers" id="question-36-answers-A" value="A" />
                                    <label for="question-36-answers-A"> 6 A </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-36-answers" id="question-36-answers-B" value="B" />
                                    <label for="question-36-answers-B"> 7 A</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-25-answers" id="question-36-answers-C" value="C" />
                                    <label for="question-36-answers-C"> 8 A</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-36-answers" id="question-36-answers-D" value="D" />
                                    <label for="question-36-answers-D"> 9 A</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n37">  
                                <strong>Perkembangbiakan generatif pada tumbuhan hanya bisa terjadi pada tumbuhan yang memiliki....</strong>          
                                <div>
                                    <input type="radio" name="question-37-answers" id="question-37-answers-A" value="A" />
                                    <label for="question-37-answers-A"> akar </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-37-answers" id="question-37-answers-B" value="B" />
                                    <label for="question-37-answers-B"> daun</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-37-answers" id="question-37-answers-C" value="C" />
                                    <label for="question-37-answers-C"> batang</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-37-answers" id="question-37-answers-D" value="D" />
                                    <label for="question-37-answers-D"> bunga</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n38">  
                                <strong>Peristiwa ovulasi dipengaruhi oleh hormon...</strong>            
                                <div>
                                    <input type="radio" name="question-38-answers" id="question-38-answers-A" value="A" />
                                    <label for="question-38-answers-A"> FSH </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-38-answers" id="question-38-answers-B" value="B" />
                                    <label for="question-38-answers-B"> ICSH</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-38-answers" id="question-38-answers-C" value="C" />
                                    <label for="question-38-answers-C"> LH</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-38-answers" id="question-38-answers-D" value="D" />
                                    <label for="question-38-answers-D"> GnRH</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n39">
                                <strong>Peristiwa pelepasan sel telur dari ovarium disebut...</strong>          
                                <div>
                                    <input type="radio" name="question-39-answers" id="question-39-answers-A" value="A" />
                                    <label for="question-39-answers-A"> fertilisasi </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-39-answers" id="question-39-answers-B" value="B" />
                                    <label for="question-39-answers-B"> ovulasi</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-39-answers" id="question-39-answers-C" value="C" />
                                    <label for="question-39-answers-C"> kontraksi</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-39-answers" id="question-39-answers-D" value="D" />
                                    <label for="question-39-answers-D"> relaksasi</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n40">  
                                <strong>Sisa metabolisme berupa urea dan garam mineral dibuang melalui ....</strong>               
                                <div>
                                    <input type="radio" name="question-40-answers" id="question-40-answers-A" value="A" />
                                    <label for="question-40-answers-A"> paru-paru dan kulit </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-40-answers" id="question-40-answers-B" value="B" />
                                    <label for="question-40-answers-B"> ginjal dan hati</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-40-answers" id="question-40-answers-C" value="C" />
                                    <label for="question-40-answers-C"> kulit dan ginjal</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-40-answers" id="question-40-answers-D" value="D" />
                                    <label for="question-40-answers-D"> kulit dan hati</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n41">  
                                <strong>Komputer pada saat terhubung ke jaringan disebut ....</strong>               
                                <div>
                                    <input type="radio" name="question-41-answers" id="question-40-answers-A" value="A" />
                                    <label for="question-41-answers-A"> Jaringan </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-41-answers" id="question-40-answers-B" value="B" />
                                    <label for="question-41-answers-B"> Tempat kerja</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-41-answers" id="question-40-answers-C" value="C" />
                                    <label for="question-41-answers-C"> Kabel</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-41-answers" id="question-40-answers-D" value="D" />
                                    <label for="question-41-answers-D"> Nirkabel</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n42">  
                                <strong>Kumpulan halaman pada saat menampilkan informasi dengan rangkaian dalam tautan adalah ....</strong>               
                                <div>
                                    <input type="radio" name="question-42-answers" id="question-42-answers-A" value="A" />
                                    <label for="question-42-answers-A"> Daftar alamat </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-42-answers" id="question-42-answers-B" value="B" />
                                    <label for="question-42-answers-B"> Newsgroup</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-42-answers" id="question-42-answers-C" value="C" />
                                    <label for="question-42-answers-C"> Blog web</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-42-answers" id="question-42-answers-D" value="D" />
                                    <label for="question-42-answers-D"> situs web</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n43">  
                                <strong>Nama domain yang sering digunakan untuk pendidikan adalah ....</strong>               
                                <div>
                                    <input type="radio" name="question-43-answers" id="question-43-answers-A" value="A" />
                                    <label for="question-43-answers-A"> .com </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-43-answers" id="question-43-answers-B" value="B" />
                                    <label for="question-43-answers-B"> .edu</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-43-answers" id="question-43-answers-C" value="C" />
                                    <label for="question-43-answers-C"> .gov</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-43-answers" id="question-43-answers-D" value="D" />
                                    <label for="question-43-answers-D"> .id</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n44">  
                                <strong>Nama domain yang sering digunakan untuk sekolah-sekolah adalah ....</strong>               
                                <div>
                                    <input type="radio" name="question-44-answers" id="question-44-answers-A" value="A" />
                                    <label for="question-44-answers-A"> .co.id </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-44-answers" id="question-44-answers-B" value="B" />
                                    <label for="question-44-answers-B"> .edu</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-44-answers" id="question-44-answers-C" value="C" />
                                    <label for="question-44-answers-C"> .sch.id</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-44-answers" id="question-44-answers-D" value="D" />
                                    <label for="question-44-answers-D"> .id</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n45">  
                                <strong>Keuntungan dalam menggunakan jaringan komputer disebut ....</strong>               
                                <div>
                                    <input type="radio" name="question-45-answers" id="question-45-answers-A" value="A" />
                                    <label for="question-45-answers-A"> Bagikan sumber daya </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-45-answers" id="question-45-answers-B" value="B" />
                                    <label for="question-45-answers-B"> Hemat biaya</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-45-answers" id="question-45-answers-C" value="C" />
                                    <label for="question-45-answers-C"> keandalan yang tinggi</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-45-answers" id="question-45-answers-D" value="D" />
                                    <label for="question-45-answers-D"> Buang-buang uang</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n46">  
                                <strong>Kumpulan data yang bersifat elektronik yang secara fisik tidak terlihat tetapi dapat dioperasikan dan di simpan dan dikendalikan dengan perangkat komputer adalah ....</strong>               
                                <div>
                                    <input type="radio" name="question-46-answers" id="question-46-answers-A" value="A" />
                                    <label for="question-46-answers-A"> Software </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-46-answers" id="question-46-answers-B" value="B" />
                                    <label for="question-46-answers-B"> Hardware</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-46-answers" id="question-46-answers-C" value="C" />
                                    <label for="question-46-answers-C"> Brainware</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-46-answers" id="question-46-answers-D" value="D" />
                                    <label for="question-46-answers-D"> Hardisk</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n47">  
                                <strong>Komponen yang terdapat pada komputer yang secara fisik dapat disentuh dan dilihat secara kasat mata, yang mendukung cara kerja komputer disebut ....</strong>               
                                <div>
                                    <input type="radio" name="question-47-answers" id="question-47-answers-A" value="A" />
                                    <label for="question-47-answers-A"> Software </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-47-answers" id="question-47-answers-B" value="B" />
                                    <label for="question-47-answers-B"> Hardware</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-47-answers" id="question-47-answers-C" value="C" />
                                    <label for="question-47-answers-C"> Brainware</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-47-answers" id="question-47-answers-D" value="D" />
                                    <label for="question-47-answers-D"> Hardisk</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n48">  
                                <strong>Jalan pennghubung antara hardware dengan software adalah...</strong>               
                                <div>
                                    <input type="radio" name="question-48-answers" id="question-48-answers-A" value="A" />
                                    <label for="question-48-answers-A"> Sistem komputer </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-48-answers" id="question-48-answers-B" value="B" />
                                    <label for="question-48-answers-B"> Sistem operasi</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-48-answers" id="question-48-answers-C" value="C" />
                                    <label for="question-48-answers-C"> Perangkat</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-48-answers" id="question-48-answers-D" value="D" />
                                    <label for="question-48-answers-D"> USB</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n49">  
                                <strong>Suatu cara yang berfungsi untuk mematikan komputer lalu menghidupkannya kembali secara otomatis, disebut ....</strong>               
                                <div>
                                    <input type="radio" name="question-49-answers" id="question-49-answers-A" value="A" />
                                    <label for="question-49-answers-A"> Turn off </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-49-answers" id="question-49-answers-B" value="B" />
                                    <label for="question-49-answers-B"> Sleep</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-49-answers" id="question-49-answers-C" value="C" />
                                    <label for="question-49-answers-C"> Shut Down</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-49-answers" id="question-49-answers-D" value="D" />
                                    <label for="question-49-answers-D"> Restart</label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="n50">  
                                <strong>Ketika hendak mematikan komputer kita dilarang mencabut langsung arus listrik, karena dapat menyebabkan ....</strong>               
                                <div>
                                    <input type="radio" name="question-50-answers" id="question-50-answers-A" value="A" />
                                    <label for="question-50-answers-A"> Kerusakan hardware komputer </label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-50-answers" id="question-50-answers-B" value="B" />
                                    <label for="question-50-answers-B"> Kerusakan software komputer</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-50-answers" id="question-50-answers-C" value="C" />
                                    <label for="question-50-answers-C"> Komputer akan meledak</label>
                                </div>                    
                                <div>
                                    <input type="radio" name="question-50-answers" id="question-50-answers-D" value="D" />
                                    <label for="question-50-answers-D"> Komputer rusak</label>
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
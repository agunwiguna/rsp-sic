<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Ujian</title>
    <link rel="icon" type="image/x-icon" href="asset/img/sic.png">
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <?php 
        $nama = $_POST['nama'];
        $asal = $_POST['asal'];
    ?>
</head>
<body>
    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="../asset/img/sic.png" alt="Logo" style="height: 45px;"> &nbsp;
                    <span class="fs-4">SMA INFORMATIKA CIAMIS</span>
                </a>
            </header>

            <div class="p-3 mb-3 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h3>NILAI HASIL RSP ONLINE - PENGETAHUAN UMUM</h3>
                    <p>
                        Nama : <?=$nama;?> <br>
                        Asal Sekolah: <?=$asal;?>
                    </p>
                    <?php
            
                        $answer1 = filter_input(INPUT_POST, 'question-1-answers');
                        $answer2 = filter_input(INPUT_POST, 'question-2-answers');
                        $answer3 = filter_input(INPUT_POST, 'question-3-answers');
                        $answer4 = filter_input(INPUT_POST, 'question-4-answers');
                        $answer5 = filter_input(INPUT_POST, 'question-5-answers');
                        $answer6 = filter_input(INPUT_POST, 'question-6-answers');
                        $answer7 = filter_input(INPUT_POST, 'question-7-answers');
                        $answer8 = filter_input(INPUT_POST, 'question-8-answers');
                        $answer9 = filter_input(INPUT_POST, 'question-9-answers');
                        $answer10 = filter_input(INPUT_POST, 'question-10-answers');
                        $answer11 = filter_input(INPUT_POST, 'question-11-answers');
                        $answer12 = filter_input(INPUT_POST, 'question-12-answers');
                        $answer13 = filter_input(INPUT_POST, 'question-13-answers');
                        $answer14 = filter_input(INPUT_POST, 'question-14-answers');
                        $answer15 = filter_input(INPUT_POST, 'question-15-answers');
                        $answer16 = filter_input(INPUT_POST, 'question-16-answers');
                        $answer17 = filter_input(INPUT_POST, 'question-17-answers');
                        $answer18 = filter_input(INPUT_POST, 'question-18-answers');
                        $answer19 = filter_input(INPUT_POST, 'question-19-answers');
                        $answer20 = filter_input(INPUT_POST, 'question-20-answers');
                        $answer21 = filter_input(INPUT_POST, 'question-21-answers');
                        $answer22 = filter_input(INPUT_POST, 'question-22-answers');
                        $answer23 = filter_input(INPUT_POST, 'question-23-answers');
                        $answer24 = filter_input(INPUT_POST, 'question-24-answers');
                        $answer25 = filter_input(INPUT_POST, 'question-25-answers');
                        $answer26 = filter_input(INPUT_POST, 'question-26-answers');
                        $answer27 = filter_input(INPUT_POST, 'question-27-answers');
                        $answer28 = filter_input(INPUT_POST, 'question-28-answers');
                        $answer29 = filter_input(INPUT_POST, 'question-29-answers');
                        $answer30 = filter_input(INPUT_POST, 'question-30-answers');
                        $answer31 = filter_input(INPUT_POST, 'question-31-answers');
                        $answer32 = filter_input(INPUT_POST, 'question-32-answers');
                        $answer33 = filter_input(INPUT_POST, 'question-33-answers');
                        $answer34 = filter_input(INPUT_POST, 'question-34-answers');
                        $answer35 = filter_input(INPUT_POST, 'question-35-answers');
                        $answer36 = filter_input(INPUT_POST, 'question-36-answers');
                        $answer37 = filter_input(INPUT_POST, 'question-37-answers');
                        $answer38 = filter_input(INPUT_POST, 'question-38-answers');
                        $answer39 = filter_input(INPUT_POST, 'question-39-answers');
                        $answer40 = filter_input(INPUT_POST, 'question-40-answers');
                        $answer41 = filter_input(INPUT_POST, 'question-41-answers');
                        $answer42 = filter_input(INPUT_POST, 'question-42-answers');
                        $answer43 = filter_input(INPUT_POST, 'question-43-answers');
                        $answer44 = filter_input(INPUT_POST, 'question-44-answers');
                        $answer45 = filter_input(INPUT_POST, 'question-45-answers');
                        $answer46 = filter_input(INPUT_POST, 'question-46-answers');
                        $answer47 = filter_input(INPUT_POST, 'question-47-answers');
                        $answer48 = filter_input(INPUT_POST, 'question-48-answers');
                        $answer49 = filter_input(INPUT_POST, 'question-49-answers');
                        $answer50 = filter_input(INPUT_POST, 'question-50-answers');
            
                        $totalCorrect = 0;
            
                        if ($answer1 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer1=1;
                            echo "No. 1= Benar<br/>";
                        }
                            else {
                                echo "No. 1 = X<br/>";
                            }                                         
                        if ($answer2 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer2=1;
                            echo "No. 2= Benar<br/>";
                        }
                            else {
                                echo "No. 2 = X<br/>";
                            }
                        if ($answer3 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer3=1;
                            echo "No. 3= Benar<br/>";
                        }
                            else {
                                echo "No. 3 = X<br/>";
                            }
                        if ($answer4 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer4=1;
                            echo "No. 4= Benar<br/>";
                        }
                            else {
                                echo "No. 4 = X<br/>";
                            }
                        if ($answer5 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer5=1;
                            echo "No. 5= Benar<br/>";
                        }
                            else {
                                echo "No. 5 = X<br/>";
                            }   
                        if ($answer6 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer6=1;
                            //echo "No. 6= Benar<br/>";
                        }
                            else {
                                //echo "No. 6 = X<br/>";
                            }                                         
                        if ($answer7 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer7=1;
                            //echo "No. 7= Benar<br/>";
                        }
                            else {
                                //echo "No. 7 = X<br/>";
                            }
                        if ($answer8 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer8=1;
                            //echo "No. 8= Benar<br/>";
                        }
                            else {
                                //echo "No. 8 = X<br/>";
                            }
                        if ($answer9 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer9=1;
                            //echo "No. 9= Benar<br/>";
                        }
                            else {
                                //echo "No. 9 = X<br/>";
                            }
                        if ($answer10 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer10=1;
                            //echo "No. 10= Benar<br/>";
                        }
                            else {
                                //echo "No. 10 = X<br/>";
                            }
                        
                        if ($answer11 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer11=1;
                            //echo "No. 11= Benar<br/>";
                        }
                            else {
                                //echo "No. 11 = X<br/>";
                            }
                        if ($answer12 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer12=1;
                            //echo "No. 12= Benar<br/>";
                        }
                            else {
                                //echo "No. 12 = X<br/>";
                            }
                        if ($answer13 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer13=1;
                            //echo "No. 13= Benar<br/>";
                        }
                            else {
                                //echo "No. 13 = X<br/>";
                            }
                        if ($answer14 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer14=1;
                            //echo "No. 14= Benar<br/>";
                        }
                            else {
                                //echo "No. 14 = X<br/>";
                            }
                        if ($answer15 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer15=1;
                            //echo "No. 15= Benar<br/>";
                        }
                            else {
                                //echo "No. 15 = X<br/>";
                            }
                        if ($answer16 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer16=1;
                            //echo "No. 16= Benar<br/>";
                        }
                            else {
                                //echo "No. 16 = X<br/>";
                            }
                        if ($answer17 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer17=1;
                            //echo "No. 17= Benar<br/>";
                        }
                            else {
                                //echo "No. 17 = X<br/>";
                            }
                        if ($answer18 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer18=1;
                            //echo "No. 18= Benar<br/>";
                        }
                            else {
                                //echo "No. 18 = X<br/>";
                            }
                        if ($answer19 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer19=1;
                            //echo "No. 19= Benar<br/>";
                        }
                            else {
                                //echo "No. 19 = X<br/>";
                            }
                        if ($answer20 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer20=1;
                            //echo "No. 20= Benar<br/>";
                        }
                            else {
                                //echo "No. 20 = X<br/>";
                            }
                        if ($answer21 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer21=1;
                            //echo "No. 21= Benar<br/>";
                        }
                            else {
                                //echo "No. 21 = X<br/>";
                            }
                        if ($answer22 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer22=1;
                            //echo "No. 22= Benar<br/>";
                        }
                            else {
                                //echo "No. 22 = X<br/>";
                            }
                        if ($answer23 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer23=1;
                            //echo "No. 23= Benar<br/>";
                        }
                            else {
                                //echo "No. 23 = X<br/>";
                            }
                        if ($answer24 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer24=1;
                            //echo "No. 24= Benar<br/>";
                        }
                            else {
                                //echo "No. 24 = X<br/>";
                            }
                        if ($answer25 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer25=1;
                            //echo "No. 25= Benar<br/>";
                        }
                            else {
                            // echo "No. 25 = X<br/>";
                            }
                            if ($answer26 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer26=1;
                            //echo "No. 26= Benar<br/>";
                        }
                            else {
                                //echo "No. 26 = X<br/>";
                            }
                            if ($answer27 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer27=1;
                            //echo "No. 27= Benar<br/>";
                        }
                            else {
                                //echo "No. 27 = X<br/>";
                            }
                            if ($answer28 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer28=1;
                            //echo "No. 28= Benar<br/>";
                        }
                            else {
                                //echo "No. 28 = X<br/>";
                            }
                            if ($answer29 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer29=1;
                            //echo "No. 29= Benar<br/>";
                        }
                            else {
                                //echo "No. 29 = X<br/>";
                            }
                            if ($answer30 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer30=1;
                            //echo "No. 30= Benar<br/>";
                        }
                            else {
                                //echo "No. 30 = X<br/>";
                            }
                            if ($answer31 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer31=1;
                            //echo "No. 31= Benar<br/>";
                        }
                            else {
                                //echo "No. 31 = X<br/>";
                            }
                            if ($answer32 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer32=1;
                            //echo "No. 32= Benar<br/>";
                        }
                            else {
                                //echo "No. 32 = X<br/>";
                            }
                            if ($answer33 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer33=1;
                            //echo "No. 33= Benar<br/>";
                        }
                            else {
                                //echo "No. 33 = X<br/>";
                            }
                            if ($answer34 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer34=1;
                            //echo "No. 34= Benar<br/>";
                        }
                            else {
                                //echo "No. 34 = X<br/>";
                            }
                            if ($answer35 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer35=1;
                            //echo "No. 35= Benar<br/>";
                        }
                            else {
                                //echo "No. 35 = X<br/>";
                            }
                            if ($answer36 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer36=1;
                            //echo "No. 36= Benar<br/>";
                        }
                            else {
                                //echo "No. 36 = X<br/>";
                            }
                            if ($answer37 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer37=1;
                            //echo "No. 37= Benar<br/>";
                        }
                            else {
                                //echo "No. 37 = X<br/>";
                            }
                            if ($answer38 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer38=1;
                            //echo "No. 38= Benar<br/>";
                        }
                            else {
                                //echo "No. 38 = X<br/>";
                            }
                            if ($answer39 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer39=1;
                            //echo "No. 39= Benar<br/>";
                        }
                            else {
                                //echo "No. 39 = X<br/>";
                            }
                            if ($answer40 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer40=1;
                        }else {
                                //echo "No. XX = X<br/>";
                            }
                            if ($answer41 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer41=1;
                        }else {
                                //echo "No. XX = X<br/>";
                            }
                            if ($answer42 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer42=1;
                        }else {
                                //echo "No. XX = X<br/>";
                            }
                            if ($answer43 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer43=1;
                        }else {
                                //echo "No. XX = X<br/>";
                            }
                            if ($answer44 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer44=1;
                        }else {
                                //echo "No. XX = X<br/>";
                            }
                            if ($answer45 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer45=1;
                        }else {
                                //echo "No. XX = X<br/>";
                            }
                            if ($answer46 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer46=1;
                        }else {
                                //echo "No. XX = X<br/>";
                            }
                            if ($answer47 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer47=1;
                        }else {
                                //echo "No. XX = X<br/>";
                            }
                            if ($answer48 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer48=1;
                        }else {
                                //echo "No. XX = X<br/>";
                            }
                            if ($answer49 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer49=1;
                        }else {
                                //echo "No. XX = X<br/>";
                            }
                            if ($answer50 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer50=1;
                        }
                        else {
                            //echo "No. 40 = X<br/>";
                        }
                        
                        $nilai_akhir = $totalCorrect*2;
                        
                        echo "<div id='results'><h3>Jawaban yang benar = $totalCorrect</h3></div>";
                        echo "<div id='results'><h3>Nilai Akhir = $nilai_akhir</h3></div>";
                        echo "Terima Kasih sudah mengikuti RSP ONLINE di SMA Informatika Ciamis :)";
                        
                        
                        // echo "<br/>";
                        
                        // $file = "234hasil.txt";
                        // $person['nama'] = $nama;
                        // $person['sekolah'] = $asal;
                        // $person['total_nilai'] = $totalCorrect;
                        // file_put_contents($file, serialize($person), FILE_APPEND | LOCK_EX);  
                    ?>
                </div>
            </div>

            <footer class="pt-3 mt-4 text-muted border-top">
            &copy; B-Lab SMA Informatika Ciamis 2022
            </footer>
        </div>
    </main>
</body>
</html>
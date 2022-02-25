<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Ujian</title>
    <link rel="icon" type="image/x-icon" href="../asset/img/sic.png">
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
                    <h3>NILAI HASIL RSP ONLINE - KEAGAMAAN</h3>
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
            
                        if ($answer1 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer1=1;
                            echo "No. 1 = Benar<br/>";
                        }else {
                            echo "No. 1 = X<br/>";
                        }

                        if ($answer2 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer2=1;
                            echo "No. 2= Benar<br/>";
                        }else {
                            echo "No. 2 = X<br/>";
                        }

                        if ($answer3 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer3=1;
                            echo "No. 3= Benar<br/>";
                        }else {
                            echo "No. 3 = X<br/>";
                        }

                        if ($answer4 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer4=1;
                            echo "No. 4= Benar<br/>";
                        }else {
                            echo "No. 4 = X<br/>";
                        }

                        if ($answer5 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer5=1;
                            echo "No. 5= Benar<br/>";
                        }else {
                            echo "No. 5 = X<br/>";
                        }

                        if ($answer6 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer6=1;
                        }

                        if ($answer7 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer7=1;
                        }

                        if ($answer8 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer8=1;
                        }

                        if ($answer9 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer9=1;
                        }

                        if ($answer10 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer10=1;
                        }

                        if ($answer11 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer11=1;
                        }

                        if ($answer12 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer12=1;
                        }

                        if ($answer13 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer13=1;
                        }

                        if ($answer14 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer14=1;
                        }

                        if ($answer15 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer15=1;
                        }

                        if ($answer16 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer16=1;
                        }

                        if ($answer17 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer17=1;
                        }

                        if ($answer18 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer18=1;
                        }

                        if ($answer19 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer19=1;
                        }

                        if ($answer20 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer20=1;
                        }

                        if ($answer21 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer21=1;
                        }

                        if ($answer22 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer22=1;
                        }

                        if ($answer23 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer23=1;
                        }

                        if ($answer24 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer24=1;
                        }

                        if ($answer25 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer25=1;
                        }

                        if ($answer26 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer26=1;
                        }

                        if ($answer27 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer27=1;
                        }

                        if ($answer28 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer28=1;
                        }

                        if ($answer29 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer29=1;
                        }

                        if ($answer30 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer30=1;
                        }

                        if ($answer31 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer31=1;
                        }

                        if ($answer32 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer32=1;
                        }

                        if ($answer33 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer33=1;
                        }

                        if ($answer34 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer34=1;
                        }

                        if ($answer35 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer35=1;
                        }

                        if ($answer36 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer36=1;
                        }

                        if ($answer37 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer37=1;
                        }

                        if ($answer38 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer38=1;
                        }

                        if ($answer39 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer39=1;
                        }

                        if ($answer40 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer40=1;
                        }

                        if ($answer41 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer41=1;
                        }

                        if ($answer42 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer42=1;
                        }

                        if ($answer43 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer43=1;
                        }

                        if ($answer44 == "B") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer44=1;
                        }

                        if ($answer45 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer45=1;
                        }

                        if ($answer46 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer46=1;
                        }

                        if ($answer47 == "D") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer47=1;
                        }

                        if ($answer48 == "C") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer48=1;
                        }

                        if ($answer49 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer49=1;
                        }

                        if ($answer50 == "A") { 
                            $totalCorrect=$totalCorrect+1; 
                            $answer50=1;
                        }
                        
                        $nilai_akhir = $totalCorrect*2;
                        
                        echo "<div id='results'><h3>Jawaban yang benar = $totalCorrect</h3></div>";
                        echo "<div id='results'><h3>Nilai Akhir = $nilai_akhir</h3></div>";
                        echo "Terima Kasih sudah mengikuti RSP ONLINE di SMA Informatika Ciamis :)";
                        
                        
                        // echo "<br/>";
                        
                        // $file = "hasilujian.txt";
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
<!DOCTYPE html>
<html>
<head>
<title>Mengakses Variabel Array</title>

</head>
<body>
    <?php
    $programmer_php = array (
        "Andi", "Budi", "Wati", "Gunawan", "Baco", "Becce", "Fatma"
    ); 
    $programmer_python = array (
        "Andi", "Fatma", "Fadli", "Haris", "Baco"
    );
    sort($programmer_php);
    rsort($programmer_python);
    $result1 = array_diff($programmer_php, $programmer_python);
    $result2 = array_diff($programmer_python, $programmer_php);
    $result3 = array_intersect($programmer_php, $programmer_python);
    $result = array_merge($programmer_php, $programmer_python);

    echo "<b style = 'color:red'>A. DI Urutkan secara Ascending : </b>";
        foreach ($programmer_php as $key=> $value) 
        {
            echo $value. ", ";
        };
    
    echo "</br>";
    echo "<b style = 'color:red'>B. DI Urutkan secara Descending : </b>";
        foreach ($programmer_python as $key=> $value) 
        {
            echo $value. ", ";
        }

    echo "</br>";
    echo "<b style = 'color:red'>C. Daftar mahasiswa yang masuk kelompok Programmer PHP tapi tidak
    termasuk kelompok Programmer Python : </b>";
    foreach ($result1 as $key=> $value) 
    {
        echo $value. ", ";
    }

    echo "</br>";
    echo "<b style = 'color:red'>D. Daftar mahasiswa yang masuk kelompok Programmer Python tapi tidak
    termasuk kelompok Programmer PHP : </b>";
    foreach ($result2 as $key=> $value) 
    {
        echo $value. ", ";
    }

    echo "</br>";
    echo "<b style = 'color:red'>E. Daftar mahasiswa yang masuk kelompok Programmer PHP dan Programmer
    Python sekaligus : </b>";
    foreach ($result3 as $key=> $value) 
    {
        echo $value. ", ";
    }

    echo "</br>";
    echo "<b style = 'color:red'>F. Daftar seluruh mahasiswa yang masuk kelompok Programmer PHP atau
    Programmer Python : </b>";
        foreach ($result as $key=> $value) 
        {
            echo $value. ", ";
        }
    ?>
</body>
</html>

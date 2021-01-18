<?php
// -------- Array -----------

while ($a <= 4) {
    if ($a == 0) {
       echo 'gtAkademik';
    }
    if ($a == 1) {
        echo 'gtFinansi';
     }
     if ($a == 2) {
        echo 'gtPerizinan';
     }
     if ($a == 3) {
        echo 'eCampuz';
     }
     if ($a == 4) {
        echo 'eOviz';
     }
}

// -------- MYSQL QUERY -----------

$query = mysqli_query($connect, "SELECT NM_Mhs FROM Mahasiswa INNER JOIN Nilai ON Mahasiswa.NIM = Nilai.NIM WHERE Nilai.Kode_MataKuliah='MK330' ORDER BY Nilai.Value ASC LIMIT 1");

$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

echo $result;

// ----------- Operator Logic -----------

$a = 7;
$b = 2;
$result = $a % $b;

if ($result != 0) {
    echo floor($result);
} else {
    echo $result;
}

// ------------ Lopping Condition ------------

foreach(range(1, 100) as $number) {
    if ($number % 3 != 0 && $number % 5 != 0) {
      echo $number . '<br>';
      continue;
    }
    if ($number % 3 == 0) echo 'foo';
    if ($number % 5 == 0) echo 'Bar';
    if ($number % 3 == 0 && $number % 5 == 0) echo 'FooBar';
    echo '<br>';
}
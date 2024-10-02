<?php
// Ziyaretçi sayısını depolamak için bir dosya oluşturun veya var olanı kullanın.
$counter_file = 'counter.txt';

// Eğer dosya yoksa, sıfırdan başlatın.
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, '0');
}

// Dosyadaki mevcut ziyaret sayısını alın.
$counter = file_get_contents($counter_file);

// Sayacı bir arttırın.
$counter++;

// Yeni sayaç değerini dosyaya yazın.
file_put_contents($counter_file, $counter);

// Ziyaretçi sayısını geri döndürün.
echo $counter;
?>

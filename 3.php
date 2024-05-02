<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3'e Bölünebilirlik Kontrolü</title>
</head>
<body>
    <h2>3'e Bölünebilirlik Kontrolü</h2>
    <form action="" method="POST">
        <label for="number">Sayı Girin:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" name="submit">Kontrol Et</button>
    </form>

    <?php
    function checkDivisibility($number) {
        if ($number == '') {
            echo "Boş değer gönderdiniz. Lütfen bir sayı girin.";
            return;
        }

        $number = intval($number);

        if ($number % 3 == 0) {
            echo "Girdiğiniz sayı 3'e bölünebilir.";
        } else {
            $nextMultiple = $number + (3 - ($number % 3));
            echo "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı $nextMultiple'dır.";
        }
    }

    if (isset($_POST['submit'])) {
        $inputNumber = $_POST['number'];
        checkDivisibility($inputNumber);
    }
    ?>
</body>
</html>

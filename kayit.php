<?php
include("baglanti.php");
if(isset($_POST["kaydet"]))
{
    $name=$_POST["kullaniciadi"];
    $email=$_POST["email"];
    $yorum=$_POST["yorum"];

    $ekle="INSERT INTO kullanicilar (kullanici_adi, email, yorumlar) VALUES ('$name','$email','$yorum')";
    $calistirekle = mysqli_query($baglanti,$ekle);
    if ($calistirekle) {
        echo '<div class="alert alert-success" role="alert">Etkileşiminiz için TEŞEKKÜRLER!</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Form Başarısız!</div>';
    }
    mysqli_close($baglanti);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YemeginKodu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        .back-to-home {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      text-align: center;
      background-color: #FF6F61;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-size: 18px;
      font-weight: bold;
      width: 200px;
      transition: background-color 0.3s ease;
      }
      .back-to-home:hover {
      background-color: #e04b4b;
      }
        body {
            background-color: #f0f2f5;
            font-family: 'Roboto', sans-serif;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
            border: none;
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #ced4da;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 10px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .card-title {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            text-align: center;
            color: #343a40;
        }
        .form-label {
            font-weight: 500;
        }
        .container {
            max-width: 500px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container p-5">
        <div class="card p-5">
            <h2 class="card-title">Görüşlerinizi ve Tarif Önerilerinizi Bekliyoruz</h2>
            <form action="kayit.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ad-Soyad</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="kullaniciadi" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Adresi</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Görüşleriniz</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="yorum" required>
                </div>
                <button type="submit" name="kaydet" class="btn btn-primary w-100">Kaydet</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<a href="index.html" class="back-to-home">Anasayfaya Dön</a>
</html>

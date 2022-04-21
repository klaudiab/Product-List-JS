<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Diagnostyka</title>
  <link rel="icon" href="https://diag.pl/sklep/wp-content/themes/diag/favicon.ico">
  <link rel="stylesheet" href="style.css" />
  <script src="main.js"></script>
</head>

<body>
  <div class="product_container">
    <div class="procuct_information">
      <div class="product_img">
        <img src="https://diag.pl/_next/image/?url=https%3A%2F%2Fdiag1.fra1.digitaloceanspaces.com%2Fwp-content%2Fuploads%2Fsites%2F7%2F2022%2F04%2F05114603%2Fgrzybica.png&w=1920&q=75">
      </div>

      <div class="product_main_info">
        <h1 class="product_title">
          <?= $_GET['title'] ?>
        </h1>

        <div class="product_price">
          <?= $_GET['price'] ?> PLN
        </div>
      </div>

    </div>

    <div class="product_description">
      <h2>Opis pakietu</h2>
      <div class="product_description_inner">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
    </div>
  </div>

</body>

</html>
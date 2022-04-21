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
  <header>
    <button id="cart_button">
      <span class="cart_icon">
        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ShoppingCartOutlinedIcon">
          <path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"></path>
        </svg>
      </span>
      <div class="cart_text">Koszyk</div>
    </button>
  </header>

  <div id="cart_modal" class="modal">
    <div class="modal-content">
      <div class="modal-body cart_items">


      </div>
      <div class="modal-footer">
        <div class="cart_total">Podsumowanie: <span class="cart_total_price">0 PLN</span></div>

        <button class="order">Przejdź do zamówienia</button>
      </div>
    </div>
  </div>

  <main>
    <div class="container">
      <h1>Lista pakietów</h1>

      <?php
      $products_list = array(
        "0" => array(
          "title" => "e-PAKIET WYSYŁKOWY Genetyczna diagnostyka dermatomykoz - grzybica paznokci",
          "price" => "425.00",
          "description" => "Badanie umożliwia wykrywanie i identyfikację 23 gatunków dermatofitów, 3 gatunków drożdżaków i 3 gatunków grzybów pleśniowych na podstawie obecności ich materiału genetycznego (DNA) w próbce. Badanie jest realizowane w wygodnej formie wysyłkowej, umożliwiającej pobranie materiału w warunkach domowych.
 
          Patogeny wykrywane w badaniu są czynnikami odpowiadającymi za infekcje grzybicze paznokci.",
          "img" => "https://diag.pl/_next/image/?url=https%3A%2F%2Fdiag1.fra1.digitaloceanspaces.com%2Fwp-content%2Fuploads%2Fsites%2F7%2F2022%2F04%2F05114603%2Fgrzybica.png&w=1920&q=75"
        ),
        "1" => array(
          "title" => "E-PAKIET ZDROWY START NA WIOSNĘ – PAKIET ROZSZERZONY",
          "price" => "139.00",
          "description" => "Wiosna to idealny moment na zadbanie o zdrowie i dobrą kondycję. Przywitaj wiosnę w pełni sił - zadbaj o zdrowie dzięki badaniom w pakiecie rozszerzonym.
          Pakiet zawiera następujące badania: morfologia krwi, lipidogram (CHOL, HDL, nie-HDL, LDL, TG),  kreatynina, hemoglobina glikowana (HbA1c), lipoproteina Lp(a).
          M",
          "img" => "https://diag.pl/_next/image/?url=https%3A%2F%2Fdiag1.fra1.digitaloceanspaces.com%2Fwp-content%2Fuploads%2Fsites%2F7%2F2022%2F03%2F05132137%2Fm1.png&w=425&q=75"
        ),
        "2" => array(
          "title" => "E-PAKIET ZDROWY START NA WIOSNĘ – PAKIET PODSTAWOWY",
          "price" => "119.00",
          "description" => "Wiosna to idealny moment na zadbanie o zdrowie i dobrą kondycję. Po zimowym zastoju powoli zaczynamy się ruszać, zdrowiej odżywiać i aktywniej korzystać z życia. Warto więc wykorzystać ten czas także na wiosenne porządki w naszym organizmie i wziąć udział w akcji edukacyjno-profilaktycznej 'Zdrowy start na wiosnę'.
          Wykonując podstawowe badania laboratoryjne, ocenimy nasze zdrowie i otrzymamy wskazówki, na czym powinniśmy się skoncent",
          "img" => "https://diag.pl/_next/image/?url=https%3A%2F%2Fdiag1.fra1.digitaloceanspaces.com%2Fwp-content%2Fuploads%2Fsites%2F7%2F2022%2F03%2F11114626%2Fkampania.png&w=768&q=75"
        ),
        "3" => array(
          "title" => "E-PAKIET ZDROWY START NA WIOSNĘ – PAKIET SPECJALISTYCZNY",
          "price" => "359.00",
          "description" => "Badania zawarte w pakiecie dedykowane są osobom, które chcą ocenić funkcjonowanie niezwykle istotnego w naszym organizmie narządu jakim jest tkanka tłuszczowa oraz poznać ryzyko zachorowania na choroby sercowo – naczyniowe. Do całkiem niedawna sądzono, że jedyną funkcją tkanki tłuszczowej jest pasywne magazynowanie energii w postaci trójglicerydów. Okazuje się jednak, że tkanka tłuszczowa jest niezwykle aktywnym narządem, produkującym i wydzielającym do krwi mnóstwo ",
          "img" => "https://diag.pl/_next/image/?url=https%3A%2F%2Fdiag1.fra1.digitaloceanspaces.com%2Fwp-content%2Fuploads%2Fsites%2F7%2F2022%2F03%2F05131911%2Fm3.png&w=1920&q=75"
        ),
        "4" => array(
          "title" => "e-PAKIET WYSYŁKOWY - mutacja w genie otyłości FTO metodą PCR",
          "price" => "198.00",
          "description" => "Badanie umożliwia określenie zwiększonego ryzyka otyłości i innych, związanych z nią chorób, na podstawie oceny polimorfizmu genu FTO. Wynik badania pozwala na opracowanie spersonalizowanej diety oraz zmniejszenie ryzyka pojawienia się chorób skojarzonych z otyłością.
 
          Gen FTO, nazywany także genem podatności na otyłość (ang. Fat Mass- and Obesity- Associated Ge",
          "img" => "https://diag.pl/_next/image/?url=https%3A%2F%2Fdiag1.fra1.digitaloceanspaces.com%2Fwp-content%2Fuploads%2Fsites%2F7%2F2022%2F03%2F07141925%2Fminiaturka-fto.png&w=1920&q=75"
        )
      );
      ?>

      <div class="package_list">
        <?php foreach ($products_list as $product) { ?>

          <?php
          $title = $product['title'];
          $price = $product['price'];
          ?>

          <div class="item">
            <div class="item_inner">
              <div class="item_img">
                <img src="<?= $product['img']; ?>" alt="" />
              </div>
              <div class="item_content">
                <div class="item_title">
                  <?= $title; ?>
                </div>
                <div class="item_description">
                  <?= $product['description']; ?>
                </div>
              </div>
              <div class="item_price">
                <?= $product['price']; ?> PLN
              </div>
            </div>
            <div class="item_link">
              <div class="empty"></div>

              <?php echo '<a href="product.php?title=' . $title . '&price=' . $price . '">Zobacz więcej</a>'; ?>

              <button class="add_to_basket">do koszyka</button>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </main>
</body>

</html>
<?php include 'header.php'; ?>
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
          <div class="item">
            <div class="item_inner">
              <div class="item_img">
                <img src="<?= $product['img']; ?>" alt="" />
              </div>
              <div class="item_content">
                <div class="item_title">
                  <?= $product['title']; ?>
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

              <form action='product.php' method='post'>
                <input id='title' type='hidden' name='title' value="<?= $product['title']; ?>" />
                <input id='price' type='hidden' name='price' value="<?= $product['price']; ?>" />
                <input id='description' type='hidden' name='description' value="<?= $product['description']; ?>" />
                <input id='img' type='hidden' name='img' value="<?= $product['img']; ?>" />
                <input type='submit' value='Zobacz więcej' name="send" />
              </form>

              <button class="add_to_basket theme_button">do koszyka</button>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </main>
</body>

</html>
<?php include 'header.php'; ?>

<?php
if (isset($_POST['send'])) {
  $title = $_POST['title'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $img = $_POST['img'];
}
?>
<div class="button_wrapper">
  <a href="/" class="back theme_button">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="36.732" viewBox="0 0 35 36.732">
      <defs>
        <clipPath id="clip-path">
          <path id="Path_13829" data-name="Path 13829" d="M0,0H35V36.732H0Z" transform="translate(-159 1527)" fill="#fff" />
        </clipPath>
      </defs>
      <g id="Mask_Group_1759" data-name="Mask Group 1759" transform="translate(159 -1527)" clip-path="url(#clip-path)">
        <g id="Ic_arrow_back_36px" transform="translate(-159 1527.866)">
          <path id="Path_13852" data-name="Path 13852" d="M0,0H35V35H0Z" fill="none" />
          <path id="Path_13853" data-name="Path 13853" d="M343.333,330.208H325.581l8.147-8.147L331.667,320,320,331.667l11.667,11.667,2.061-2.061-8.147-8.147h17.753Z" transform="translate(-314.167 -314.167)" fill="#fff" />
        </g>
      </g>
    </svg>
    <span>wróć do listy pakietów</span></a>
</div>

<div class="product_container">
  <div class="procuct_information">
    <div class="product_img">
      <img src="<?= $img; ?>">
    </div>

    <div class="product_main_info">
      <h1 class="product_title item_title">
        <?= $title; ?>
      </h1>

      <div class="product_price item_price">
        <?= $price; ?> PLN
      </div>

      <button class="add_to_basket theme_button">do koszyka</button>
    </div>
  </div>

  <div class="product_description">
    <h2>Opis pakietu</h2>
    <div class="product_description_inner">
      <p><?= $description; ?></p>
    </div>
  </div>
</div>

</body>

</html>
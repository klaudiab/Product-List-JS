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

        <button class="order theme_button">Przejdź do zamówienia</button>
      </div>
    </div>
  </div>

  <main>
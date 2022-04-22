document.addEventListener("DOMContentLoaded", function () {
  var savedItems = localStorage.getItem("cartItems");
  document.getElementsByClassName("cart_items")[0].innerHTML = savedItems;

  var modal = document.getElementById("cart_modal");
  var btn = document.getElementById("cart_button");

  btn.onclick = function () {
    modal.style.display = "block";
  };

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };

  var addToBasketButtons = document.getElementsByClassName("add_to_basket");

  for (var i = 0; i < addToBasketButtons.length; i++) {
    var button = addToBasketButtons[i];
    button.addEventListener("click", addToCart);
  }

  var quantityInputs = document.getElementsByClassName("quantity");

  for (var i = 0; i < quantityInputs.length; i++) {
    var input = quantityInputs[i];
    input.addEventListener("change", quantityChanged);
  }

  var removeCartItemButtons = document.getElementsByClassName("remove");

  for (var i = 0; i < removeCartItemButtons.length; i++) {
    button = removeCartItemButtons[i];
    button.addEventListener("click", removeCartItem);
  }

  function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    updateCartTotal();
  }

  function quantityChanged(event) {
    var input = event.target;
    updateCartTotal();
  }

  function addToCart(event) {
    var button = event.target;
    var shopItem = button.parentElement.parentElement;
    var title = shopItem.getElementsByClassName("item_title")[0].innerText;
    var price = parseFloat(
      shopItem
        .getElementsByClassName("item_price")[0]
        .innerText.replace("PLN", "")
    );
    addItemToCart(title, price);
    updateCartTotal();
  }

  function addItemToCart(title, price) {
    var cartItem = document.createElement("div");
    cartItem.classList.add("cart_item");
    var cartItems = document.getElementsByClassName("cart_items")[0];
    var cartItemTitles = cartItems.getElementsByClassName("cart_item_title");

    for (var i = 0; i < cartItemTitles.length; i++) {
      if (cartItemTitles[i].innerText == title) {
        alert("Ten produkt już jest w koszyku");
        return;
      }
    }

    var cartItemsContent = `<div class="cart_item_title">${title}</div>
    <div class="cart_item_quantity">
    <input type="number" class="quantity" id="quantity" name="quantity" min="1" value="1" />
    </div>

    <div class="cart_item_price">
      <div class="price">${price} PLN</div>

      <button class="remove">usuń</button>
    </div>`;

    cartItem.innerHTML = cartItemsContent;
    cartItems.append(cartItem);

    cartItem
      .getElementsByClassName("remove")[0]
      .addEventListener("click", removeCartItem);
    cartItem
      .getElementsByClassName("quantity")[0]
      .addEventListener("change", quantityChanged);

    localStorage.setItem("cartItems", cartItems.innerHTML);
  }

  function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName("cart_items")[0];
    var cartItems = cartItemContainer.getElementsByClassName("cart_item");
    var totalPrice = 0;
    for (var i = 0; i < cartItems.length; i++) {
      var cartItem = cartItems[i];
      var priceItem = cartItem.getElementsByClassName("price")[0];
      var priceQuantity = cartItem.getElementsByClassName("quantity")[0].value;
      var price = parseFloat(priceItem.innerText.replace("PLN", ""));

      totalPrice = totalPrice + priceQuantity * price;
    }

    document.getElementsByClassName("cart_total_price")[0].innerText =
      totalPrice + " PLN";
  }

  updateCartTotal();
});

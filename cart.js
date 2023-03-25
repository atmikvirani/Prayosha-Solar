let label = document.getElementById("label");
let ShoppingCart = document.getElementById("shopping-cart");

let basket = JSON.parse(localStorage.getItem("data")) || [];


// code for displaying quantity
let calculation = () => {
  let cartAmount = basket.map((x) => x.item).reduce((x, y) => x + y, 0);
  document.getElementById("cartAmount").innerHTML = cartAmount;
  
};


// code for calculating total
const calculateTotals = (basket, shopItemsData) => {
  const GST_RATE = 0.18; // 18% GST rate

  const subtotal = basket.reduce((sum, item) => {
    const search = shopItemsData.find((x) => x.id === item.id);
    return sum + item.item * search.price;
  }, 0);

  const cgst = (subtotal * GST_RATE) / 2;
  const sgst = cgst;
  const discount = subtotal * 0.05;
  const grandTotal = subtotal + sgst + cgst - discount;

  document.getElementById("discount").innerHTML = "₹" + discount.toFixed(2);
  document.getElementById("cgst").innerHTML = "₹" + cgst.toFixed(2);
  document.getElementById("sgst").innerHTML = "₹" + sgst.toFixed(2);
  document.getElementById("Total").innerHTML = "₹" + grandTotal.toFixed(2);
};

calculation();


// code for generating items in cart
let generateCartItems = () => {
  if (basket.length !== 0) {
    ShoppingCart.innerHTML = basket
      .map((x) => {
        let { id, item } = x;
        let search = shopItemsData.find((y) => y.id === id) || {};
        return `
          <tr>
            <td>
              ${id}
            </td>
            <td>
              <div class="table_cart_img">
                <figure>
                  <img src=${search.img} alt="" />
                </figure>
              </div>
              <div class="table_cart_cntnt">
                <h1>${search.name}</h1>
                <p style="font-size:10px;">${search.desc} </p>
              </div>
            </td>
            <td></td>
            <td class="cart_page_price">${search.price}</td>
            <td>
              <div class="counter">
                <span class="down" onClick="decrement(${id})">-</span>
                <div id=${id} class="quantity">${item}</div>
                <span class="up" onClick="increment(${id})">+</span>
              </div>
            </td>
            <td class="cart_page_totl">₹ ${item * search.price}</td>
            <td>
              <a href="javascript:;"> <i class="fa fa-trash" onclick="removeItem(${id})"></i></a>
            </td>
            <tr>
        `;
      })
      .join("");
  } else {
    ShoppingCart.innerHTML = "";
    label.innerHTML = `
    
    
        <td>
            <h5>Cart is currently empty, please <a href="shop.php"><u>add products</u></a> to Checkout.</h5>
        </td>
   
  
    `;
  }
};

generateCartItems();


// code for increment
let increment = (id) => {
  let selectedItem = id;
  let search = basket.find((x) => x.id === selectedItem.id);

  if (search === undefined) {
    basket.push({
      id: selectedItem.id,
      item: 1,
    });
  } else {
    search.item += 1;
  }
  
  generateCartItems();
  calculateTotals(basket, shopItemsData);
  update(selectedItem.id);
  localStorage.setItem("data", JSON.stringify(basket));
};


// code for decrement
let decrement = (id) => {
  let selectedItem = id;
  let search = basket.find((x) => x.id === selectedItem.id);

  if (search === undefined) return;
  else if (search.item === 0) return;
  else {
    search.item -= 1;
  }
  update(selectedItem.id);
  basket = basket.filter((x) => x.item !== 0);
  generateCartItems();
  calculateTotals(basket, shopItemsData);
  localStorage.setItem("data", JSON.stringify(basket));
  
};


// code for update cart
let update = (id) => {
  let search = basket.find((x) => x.id === id);
  document.getElementById(id).innerHTML = search.item;
  calculation();
  TotalAmount();
};


// code for removing item
let removeItem = (id) => {
  let selectedItem = id;
  // console.log(selectedItem.id);
  basket = basket.filter((x) => x.id !== selectedItem.id);
  generateCartItems();
  calculation();
  TotalAmount();
  calculateTotals(basket, shopItemsData);
  localStorage.setItem("data", JSON.stringify(basket));
};

// code for displaying total amount of cart
let TotalAmount = () => {
  let totalAmount = basket.reduce((sum, item) => {
    let search = shopItemsData.find((x) => x.id === item.id);
    return sum + (item.item * search.price);
  }, 0);
  calculateTotals(basket, shopItemsData);
  document.getElementById("cartTotal").innerHTML = "₹" + totalAmount.toFixed(2);
  document.getElementById("cartTotal1").innerHTML = "₹" + totalAmount.toFixed(2);
};

TotalAmount();

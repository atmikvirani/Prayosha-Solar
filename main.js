let shop = document.getElementById("shop");

let basket = JSON.parse(localStorage.getItem("data")) || [];

let generateShop = () => {
  return (shop.innerHTML = shopItemsData
    .map((x) => {
      let { id, name, price, desc, img } = x;
      let search = basket.find((x) => x.id === id) || [];
      return `
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 cardP">
        <div class="sw_product_box_wrapper sw_shop_sider_pder">
            <div class="sw_product_indx_img_wrapper">
    
                <!--<img src=${img} alt="" class="img-responsive">-->
                <img width="220" src=${img} alt="" class="img-responsive">
            </div>
    
            <div class="sw_product_indx_img_cont_wrapper sw_product_indx_img_cont_wrapper_2">
                <div class="sw_pdct_img">
                    <img src="images/line.png" alt="img" />
                </div>
                <h5>₹${price}</h5>
                <h1>${name}</h1>
                <p>${desc}
                <p>
                <div class="cc_li_img_overlay">
                    <div class="cc_li_img_text">
                        <ul>
                            <div class="counter">
                                <li><span class="down" onClick="decrement(${id})" class="countermin">&minus;</span></li>
                                <li>
                                    <p class="" style="font-size:60%;">
                                    <div id=${id} class="quantity">${search.item === undefined ? 0 : search.item}</div>
                                    </p>
                                </li>
                                <li><span class="up" onClick="increment(${id})">&plus;</span></li>
                            </div>
                            <!-- <li><a href="javascript:;"><i class="fa fa-heart"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-expand"></i></a></li> -->
                        </ul>
                    </div>
                </div>
                <div>
                </div>
            </div>
        </div>
      </div>
    `;
    })
    .join(""));
};

generateShop();

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

  // console.log(basket);
  update(selectedItem.id);
  localStorage.setItem("data", JSON.stringify(basket));
};
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
  // console.log(basket);
  localStorage.setItem("data", JSON.stringify(basket));
};
let update = (id) => {
  let search = basket.find((x) => x.id === id);
  // console.log(search.item);
  document.getElementById(id).innerHTML = search.item;
  calculation();
};

let calculation = () => {
  let cartIcon = document.getElementById("cartAmount");
  cartIcon.innerHTML = basket.map((x) => x.item).reduce((x, y) => x + y, 0);
};

calculation();

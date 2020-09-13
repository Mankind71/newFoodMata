// for main orders
let locations = document.getElementById('location-name');
let names = document.getElementById('client-name');
let food = document.getElementById('food-name');
let phone = document.getElementById('phone-num');

// client order
let locationsC = document.getElementById('location-nameC');
let namesC = document.getElementById('client-nameC');
let foodC = document.getElementById('food-nameC');
let phoneC = document.getElementById('phone-numC');

// no restaurant
let newRes1 = document.getElementById('restaurant-name1');
let locations1 = document.getElementById('location-name1');
let names1 = document.getElementById('client-name1');
let food1 = document.getElementById('food-name1');
let phone1 = document.getElementById('phone-num1');
let radios = document.getElementsByName('optradio');
let timebtn = document.querySelector('.timebtn');

// client deliver to another
let restaurantName = document.querySelector('#restaurantName');
let clientName = document.querySelector('#clientName');
let restaurantAddy = document.querySelector('#restaurantAddy');
let deliveryLocation = document.querySelector('#deliveryLocation');
let restaurantPhone = document.querySelector('#restaurantPhone');
let clientPhone = document.querySelector('#clientPhone');
let deliveryItem = document.querySelector('#deliveryItem');

// register kitchen
let kitchenName = document.querySelector('#kitchenName');
let kitchenAddy = document.querySelector('#kitchenAddy');
let ownerName = document.querySelector('#ownerName');
let kitchenPhone = document.querySelector('#kitchenPhone');


let devTime;
let restaurant="";

// order buttons
let button1 = document.getElementById('whatsapp1');
let button2 = document.getElementById('whatsapp2');
let deliveryButton = document.getElementById('deliveryButton');
let restaurantButton = document.getElementById('kitchenB');
let customfoods = document.getElementById('customfoods');

// small screen background image
let firstbanner = document.getElementById('firstbanner');
if (screen.width < 1000){
  firstbanner.src = "../images/foodmata_mobile.jpg"
}

timebtn.addEventListener('click', function(){
  for (let i = 0, length = radios.length; i < length; i++){
    if (radios[i].selected){
      devTime = radios[i].innerText;
      devTime = devTime.split(' ').join('%20');
      return devTime;
    }
  }
})


const msg1 = () => {
  names = names.value.split(' ').join('%20');
  locations = locations.value.split(' ').join('%20');
  restaurant = restaurant.split(' ').join('%20');
  food = food.value.split(' ').join('%20');
  phone = phone.value;
  if (devTime){
    message = `https://wa.me/2348168100310?text=Name:%20%20${names}%0A%0ADestination:%20%20${locations}%0A%0APhone%20No:%20%20${phone}%0A%0ARestaurant:%20%20${restaurant}%0A%0AFood:%20%20${food}%0A%0ADelivery%20Time:%20%20${devTime}%0A%0A%0AHello,%20I%20would%20like%20to%20make%20an%20order`
  }else{
    message = `https://wa.me/2348168100310?text=Name:%20%20${names}%0A%0ADestination:%20%20${locations}%0A%0APhone%20No:%20%20${phone}%0A%0ARestaurant:%20%20${restaurant}%0A%0A%0AFood:%20%20${food}%0A%0AHello,%20I%20would%20like%20to%20make%20an%20order`
  }
  location = message;  
}
const msg2 = () => {
  names = names1.value.split(' ').join('%20');
  locations = locations1.value.split(' ').join('%20');
  restaurant = newRes1.value.split(' ').join('%20');
  food = food1.value.split(' ').join('%20');
  phone = phone1.value;
  if (devTime){
    message = `https://wa.me/2348168100310?text=Name:%20%20${names}%0A%0ADestination:%20%20${locations}%0A%0APhone%20No:%20%20${phone}%0A%0ARestaurant:%20%20${restaurant}%0A%0AFood:%20%20${food}%0A%0ADelivery%20Time:%20%20${devTime}%0A%0A%0AHello,%20I%20would%20like%20to%20make%20an%20order`
  }else{
    message = `https://wa.me/2348168100310?text=Name:%20%20${names}%0A%0ADestination:%20%20${locations}%0A%0APhone%20No:%20%20${phone}%0A%0ARestaurant:%20%20${restaurant}%0A%0A%0AFood:%20%20${food}%0A%0AHello,%20I%20would%20like%20to%20make%20an%20order`
  }
  location = message;  
}
const msg3 = () => {
  names = namesC.value.split(' ').join('%20');
  locations = locationsC.value.split(' ').join('%20');
  food = foodC.value.split(' ').join('%20');
  phone = phoneC.value;
  message = `https://wa.me/2348168100310?text=*CUSTOM%20ORDER*%0A%0AName:%20%20${names}%0A%0ADestination:%20%20${locations}%0A%0APhone%20No:%20%20${phone}%0A%0A%0AFood:%20%20${food}%0A%0AHello,%20I%20would%20like%20to%20make%20a%20custom%20order`
  location = message;  
}
const deliver = () => {
  restaurantName = restaurantName.value.split(' ').join('%20');
  clientName = clientName.value.split(' ').join('%20');
  restaurantAddy = restaurantAddy.value.split(' ').join('%20');
  deliveryLocation = deliveryLocation.value.split(' ').join('%20');
  restaurantPhone = restaurantPhone.value;
  clientPhone = clientPhone.value;
  deliveryItem = deliveryItem.value.split(' ').join('%20');
  message = `https://wa.me/2348168100310?text=Name:%20%20${restaurantName}%0A%0ACustomer%20Name:%20%20${clientName}%0A%0AItem:%20%20${deliveryItem}%0A%0APickup%20Location:%20%20${restaurantAddy}%0A%0ADelivery%20Location:%20%20${deliveryLocation}%0A%0AMy%20Phone%20No:%20%20${restaurantPhone}%0A%0AReceiver's%20Phone%20No:%20%20${clientPhone}%0A%0A%0AHello,%20I%20would%20like%20to%20make%20a%20delivery`
  location = message;  
}
const registerkitchen = () => {
  kitchenName = kitchenName.value.split(' ').join('%20');
  kitchenAddy = kitchenAddy.value.split(' ').join('%20');
  ownerName = ownerName.value.split(' ').join('%20');
  kitchenPhone = kitchenPhone.value.split(' ').join('%20');
  message = `https://wa.me/2348168100310?text=Restaurant%20Name:%20%20${kitchenName}%0A%0ARestaurant%20Location:%20%20${kitchenAddy}%0A%0ARestaurant%20Manager%20Name:%20%20${ownerName}%0A%0ARestaurant%20Phone%20No:%20%20${kitchenPhone}%0A%0A%0AHello,%20I%20would%20like%20to%20register%20my%20restaurant`
  location = message;  
}

button1.addEventListener('click', msg1);
// button2.addEventListener('click', msg2);
// button3.addEventListener('click', msg3);
deliveryButton.addEventListener('click', deliver);
restaurantButton.addEventListener('click', registerkitchen);

// MDB Lightbox Init
(function () {
  $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});
var count = 0;
const targetCount = 30;
const interval = 100;
const countElement = document.getElementById("count");

const countInterval = setInterval(() => {
  count += 1;
  if (count > targetCount) {
    count = targetCount;
    clearInterval(countInterval);
  }
  countElement.innerHTML = count;
}, interval);

// mobile hamburger menu
function openmenu(){
  document.getElementById("navLinks").style.display = "block";
  document.getElementById("navLinks").style.backgroundColor = "black";
}
function closeMenu(){
  document.getElementById("navLinks").style.display = "none";
  document.getElementById("navLinks").style.backgroundColor = "none";
}


//for the order page to trigger the order card
function openPurchase(){
  document.getElementById("orderpurc").style.display = "flex";
}
function cancelOrder(){
  document.getElementById("orderpurc").style.display = "none";
}
//calculte the amount of cups on the order
function totalPrice(){
  let price = document.getElementById("price");
  let cups = document.getElementById("totalCups").value;

  price.innerHTML = 1500 * cups;
}
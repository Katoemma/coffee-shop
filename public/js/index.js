var count = 0;
const targetCount = 30;
const interval = 0.001;
const countElement = document.getElementById("count");

const countInterval = setInterval(() => {
  count ++;
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
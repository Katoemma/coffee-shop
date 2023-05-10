
function validateForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;

  if (name == "" || email == "") {
    alert("Please fill out all required fields.");
    return false;
  }
  return true;
}

//notifiers trigger
function resetNotifier() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Update the notifier count and hide it if there are no notifications left
            var count = parseInt(this.responseText);
            var notifierCount = document.getElementById("notifier-count");
            notifierCount.innerText = count;
            if (count === 0) {
                notifierCount.style.display = "none";
            }
        }
    };
    xmlhttp.open("GET", "reset_notifier.php", true);
    xmlhttp.send();
    document.getElementById("chec-div").style.display = "block";
}

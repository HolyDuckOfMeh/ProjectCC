<?php

  include "./Controller/ajax-calls.php";

?>

<button class="newsletter-open-button" onclick="openForm()">Newsletter</button>

<div class="newsletter-popup" id="newsletter">
  <div class="newsletter-container">
    <h2>Sign Up</h2>
    <p>Weekly Newsletters!</p>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" id='newsName'>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" id='newsEmail'>

    <p id='ajax-msg'></p>

    <button type="submit" class="btn" onclick="ajaxAddNewsletter(document.getElementById('newsName').value,
                                                                 document.getElementById('newsEmail').value)">Sign Up</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </div>
</div>

<script>
function openForm() {
  document.getElementById("newsletter").style.display = "block";
}

function closeForm() {
  document.getElementById("newsletter").style.display = "none";
}
</script>
<?php
session_start();
include 'inc/header-admin.php';
$pageTitle = "Admin Homepage";
;
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <section class="homepage" id="homepage">
        <div class="content text-center text-md-left">
          <h3>Your Health is our Priority</h3>
          <p>Welcome to Duo Pharm. A place where you can find all the drugs you need along with medical counselling with
            a click of a button. Duo Pharm is here to take care of all your needs.</p>
          <p>What are you interested in?</p>

          <div class="directions" style="margin-bottom: 10px;">
            <a href="user_registration_table.php"><button type="button">Users table</button></a>
            <a href="doctor_registration_table.php"><button type="button">Doctor's table</button></a>
            <a href="patient_registration_table.php"><button type="button">Patient's table</button></a>
            <a href="pharmacist_registration_table.php"><button type="button">Pharmacist table</button></a>
            <a href="user_registration_form.php"><button type="button">Add New User</button></a>
            <a href="admin_registration_table.php"><button type="button">Admin table</button></a>
            <a href="category_registration_table.php"><button type="button">Drug Category Table</button></a>
            <a href="drug_registration_table.php"><button type="button">Drugs table</button></a>
            <a href="prescriptions_view_table.php"><button type="button">Prescriptions table</button></a>
            <a href="category_registration_form.php"><button type="button">Add Drug Category</button></a>
            <a href="drug_registration_form.php"><button type="button">Add Drugs</button></a>
            <button type="button" id="generateTokenBtn">Generate API token</button>
          </div>
          <div id="tokenDisplay"></div>
        </div>
      </section>
    </div>
    <div class="col-md-6">
      <div class="background-image"></div>
    </div>
  </div>
</div>

<?php include 'inc/footer.php'; ?>
<script>
  document.getElementById('generateTokenBtn').addEventListener('click', function () {
    // Simulate an AJAX request to the server to generate a token
    fetch('http://localhost:3000/generateToken', { method: 'POST' })
      .then(response => response.json())
      .then(data => {
        document.getElementById('tokenDisplay').innerHTML = '<strong>Generated Token:</strong> ' + data.token;
        document.getElementById('tokenDisplay').style = 'border: none'
        document.getElementById('tokenDisplay').style = 'text-transform: none'
      })
      .catch(error => {
        console.error('Error generating token:', error);
      });
  });
</script>
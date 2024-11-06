<?php
include('includes/header.php');
?>
<h1>Contact Us</h1>
<form method="POST" action="submit_contact.php">
    <label>  user name:</label>
    <input type="text" name=" user name" required><br>
    
    <label>Email id:</label>
    <input type="email" name="email id" required><br>

    <label>phone:</label>
    <input type="text" name="phone" required><br>

    <label>password:</label>
    <input type="text" name="password" required><br>


    <button type="submit">Submit</button>
</form>
<?php
include('includes/footer.php');
?>

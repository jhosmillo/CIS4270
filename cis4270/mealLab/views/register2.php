<?php require('views/guitarShopHeader.php'); ?>
<main>
<section>
    <h1>Join Musicians Around the World</h1>
    <?php 
        if ($vm != null) {
            if ($vm->errorMsg != '') { ?>
            <p> <?php echo $vm->errorMsg; ?></p>
    <?php }
        }?>
    <form action="." method="post" id="add_edit_product_form">
        <input type="hidden" name="ctlr" value="admin" />
        <input type="hidden" name="action" value="register" />
		<?php echo csrf_token_tag(); ?>
        
        <label>Email:</label>
        <input type="text" name="email" required><br>

        <label>First Name:</label>
        <input type="text" name="firstName" required><br>

        <label>Last Name:</label>
        <input type="text" name="lastName" required><br>
		
		<label>Phone Number:</label>
        <input type="number" name="phoneNumber" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <label>Confirm Password:</label>
        <input type="password" name="confirmPassword" required><br>

        <label>&nbsp;</label>
        <input type="submit" value="Sign Up">
    </form>
    
</section>
</main>
<?php require('views/guitarShopFooter.php');
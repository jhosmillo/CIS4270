<?php require('views/guitarShopHeader.php'); ?>
<main>
    <section>
        <h1>Login to Guitar Shop</h1>
        <form action="." method="post">
        <input type="hidden" name="ctlr" value="admin">
        <input type="hidden" name="action" value="login">
        <label>Email:</label>
        <input type="text" name="username" size="25">
        <label>&nbsp;Password:</label>
        <input type="password" name="password" size="25">
        <br><br>
        <input type="submit" value="Login">
    </form>

	<p>Don't have an account yet?
		<a href="?ctlr=admin&amp;action=register">Sign up now.</a>
	</p>	
    </section>
</main>
<?php
require('views/guitarShopFooter.php');

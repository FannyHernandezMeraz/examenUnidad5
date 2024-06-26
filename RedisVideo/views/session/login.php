<div>
    <img src="src/img/logo.jpeg" height="200" alt="Logo">
    <h2>Redis Video</h2>
</div>
<div>
    <form role="form" method="post" action="index.php">
        <fieldset>
            <div class="form-group">
                <label for="type">User Type:</label>
                <select name="type" required>
                    <option value="2" default>GUEST</option>
                    <option value="1">ADMIN</option>
                </select>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="User" name="user" type="email" autofocus="" required>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
            </div>
            <div class="text-center">
                <button type="submit">Login</button>
            </div>
            <div class="text-center">
                <label><?= $data["msn"] ?></label>
            </div>
        </fieldset>
    </form>
</div>
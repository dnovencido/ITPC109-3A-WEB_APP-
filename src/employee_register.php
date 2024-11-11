<?php include "layouts/_header.php"; ?>
    <?php include "layouts/_navigation.php"; ?>
    <main class="content">
        <section id="signup" class="container">
            <div id="signup-form">
                <div class="form card">
                    <h1>Sign up to your account.</h1>
                    <form  method="post">
                        <div class="input-control">
                            <label for="name">Name: </label>
                            <input type="text" name="name" class="input-field input-md" value="<?= $_POST['name'] ?>" />
                        </div>
                        <div class="input-control">
                            <label for="name">Email: </label>
                            <input type="email" name="email" class="input-field input-md" value="<?= $_POST['email'] ?>" />
                        </div>
                        <div class="input-control">
                            <label for="name">Password: </label>
                            <input type="password" name="password" class="input-field input-md" value="<?= $_POST['password'] ?>" />
                        </div>
                        <div class="input-control">
                            <label for="name">Confirm Password: </label>
                            <input type="password" name="confirm_password" class="input-field input-md" value="" />
                        </div>
                        <div class="input-control">
                            <input type="submit" name="submit" class="btn btn-sm btn-rounded" value="Register" />
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
<?php include "layouts/_footer.php"; ?>
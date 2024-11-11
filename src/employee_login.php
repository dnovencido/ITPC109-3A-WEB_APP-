<?php include "layouts/_header.php"; ?>
    <?php include "layouts/_navigation.php"; ?>
    <main class="content">
        <section id="signin" class="container">
            <div id="signin-form">
                <?php if (!empty($errors)) { ?>
                    <?php include "layouts/_errors.php" ?>
                <?php } ?>
                <div class="form card">
                    <h1>Log in to your account.</h1>
                    <form method="post">
                        <div class="input-control">
                            <label for="name">Email: </label>
                            <input type="email" name="email" class="input-field input-md" value="<?= $_POST['email'] ?>" />
                        </div>
                        <div class="input-control">
                            <label for="name">Password: </label>
                            <input type="password" name="password" class="input-field input-md" value="<?= $_POST['password'] ?>" />
                        </div>
                        <div class="input-control">
                            <input type="submit" name="submit" class="btn btn-md btn-rounded" value="Login" />
                        </div>
                        <div id="signup-account">
                            <p>Don't have an account? <a href="/employee/register">Signup</a> </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
<?php include "layouts/_footer.php"; ?>
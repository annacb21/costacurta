<div id="login" class="pb-5">
    <header>
        <h1 class="subtitle text-center mb-5">Login</h1>
        <?php display_message(); ?>
        <div class="mx-auto my-auto w-50">
            <form action="" method="POST">
                <?php login(); ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required data-validation-required-message="Inserire username" required>
                </div>
                <div class="mb-3">
                    <label for="psw" class="form-label">Password</label>
                    <input type="password" name="psw" class="form-control" id="psw" placeholder="Password" required data-validation-required-message="Inserire password" required>
                </div>
                <button type="submit" name="login" class="btn btn-lg btn-primary">Accedi</button>
            </form>
        </div>
    </header>
</div>
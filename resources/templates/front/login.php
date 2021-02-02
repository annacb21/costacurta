<div class="page my-5">
    <h1 class="section-title text-uppercase text-center mb-5">Accesso amministratore</h1>
    <?php display_message(); ?>
    <div class="mx-auto my-auto w-50">
        <form action="" method="POST" class="needs-validation" novalidate>
            <?php login(); ?>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
                <div class="invalid-feedback">Inserire il proprio username da amministratore</div> 
            </div>
            <div class="mb-3">
                <label for="psw" class="form-label">Password</label>
                <input type="password" name="psw" class="form-control" id="psw" placeholder="Password" required>
                <div class="invalid-feedback">Inserire la propria password da amministratore</div>
            </div>
            <button type="submit" name="login" class="btn btn-lg dark-btn btn-block mt-5">Accedi</button>
        </form>
    </div>
</div>

<script src="../public/js/validate.js"></script>
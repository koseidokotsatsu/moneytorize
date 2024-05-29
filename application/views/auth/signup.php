<div class="card mb-3">

    <div class="card-body">

        <div class="pt-4 pb-2">
            <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
            <p class="text-center small">Enter your personal details to create account</p>
        </div>
        <form class="row g-3 needs-validation" novalidate method="post" action="<?= base_url('auth/register') ?>">
            <div class="col-12">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" value="<?= set_value('name') ?>">
                <?= form_error('name', '<small class="text-danger">', '</small>') ?>
            </div>

            <div class="col-12">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" name="email" class="form-control" id="email" value="<?= set_value('email') ?>">
                <?= form_error('email', '<small class="text-danger">', '</small>') ?>
            </div>

            <div class="col-12">
                <label for="username" class="form-label">Username</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="username" class="form-control" id="username" value="<?= set_value('username') ?>">
                </div>
                <?= form_error('username', '<small class="text-danger">', '</small>') ?>
            </div>

            <div class="col-12">
                <label for="password1" class="form-label">Password</label>
                <input type="password" name="password1" class="form-control" id="password1" value="<?= set_value('password1') ?>">
                <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="col-12">
                <label for="password2" class="form-label">Repeat Password</label>
                <input type="password" name="password2" class="form-control" id="password2" value="<?= set_value('password2') ?>">
                <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
            </div>

            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Create Account</button>
            </div>

            <div class="col-12">
                <p class="small mb-0">Already have an account? <a href="<?= base_url('auth') ?>">Log in</a></p>
            </div>

        </form>

    </div>
</div>
<div class="card mb-3">
    <div class="card-body">

        <div class="pt-4 pb-2">
            <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
            <p class="text-center small">Enter your username & password to login</p>
        </div>

        <?= $this->session->flashdata('message') ?>

        <form class="row g-3 needs-validation" novalidate method="post" action="<?= base_url('auth') ?>">

            <div class="col-12">
                <label for="username" class="form-label">Username</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="username" class="form-control" id="username" value="<?= set_value('username') ?>">
                </div>
                <?= form_error('username', '<small class="text-danger">', '</small>') ?>
            </div>

            <div class="col-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                <?= form_error('password', '<small class="text-danger">', '</small>') ?>
            </div>

            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Login</button>
            </div>

            <div class="col-12">
                <p class="small mb-0">Don't have account? <a href="<?= base_url('auth/register') ?>">Create an account</a></p>
            </div>

        </form>

    </div>
</div>
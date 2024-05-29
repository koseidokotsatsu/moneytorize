<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= htmlspecialchars($title) ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><?= htmlspecialchars($title) ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Money Monitorize</h5>
                        <p>This is the place to monitor your finances, where you shop, get your salary, and so on</p>

                        <!-- Add Button -->
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addFinanceModal">
                            + Add Finance Entry
                        </button>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Nominal</th>
                                    <th>Type</th>
                                    <th>Details</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($finances as $finance) : ?>
                                <tr>
                                    <td>
                                        <?php if ($finance['category'] == '+') : ?>
                                        <span class="badge bg-success"><?= htmlspecialchars($finance['category']) ?></span>
                                        <?php else : ?>
                                        <span class="badge bg-danger"><?= htmlspecialchars($finance['category']) ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td>Rp <?= number_format($finance['nominal'], 0, ',', '.') ?></td>
                                    <td><?= htmlspecialchars($finance['type']) ?></td>
                                    <td><?= htmlspecialchars($finance['detail']) ?></td>
                                    <td><?= htmlspecialchars($finance['date']) ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- Add Finance Modal -->
<div class="modal fade" id="addFinanceModal" tabindex="-1" aria-labelledby="addFinanceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('finance/add') ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFinanceModalLabel">Add Finance Entry</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-control" id="category" name="category" required>
                            <option value="+">+</option>
                            <option value="-">-</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nominal" class="form-label">Nominal (Rp)</label>
                        <input type="number" class="form-control" id="nominal" name="nominal" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-control" id="type" name="type" required>
                            <option value="GoPay">GoPay</option>
                            <option value="OVO">OVO</option>
                            <option value="BCA">BCA</option>
                            <option value="BRI">BRI</option>
                            <option value="Pluang">Pluang</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="form-label">Details</label>
                        <input type="text" class="form-control" id="detail" name="detail" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Entry</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include '../nav/admin_header.php'; ?>

<?php
require_once __DIR__ . '/../model/db.php';  // safer include
?>

<!-- Main Content -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <!-- Dashboard Header -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                This week
            </button>
        </div>
    </div>

    <!-- Inquiry Table Section -->
    <h2>List of Inquiry</h2>
    <div class="row justify-content-between mb-3">
        <div class="col-md-auto">
            <select class="custom-select custom-select-sm form-control form-control-sm d-inline-block" style="width: auto;">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <label>Entries per page</label>
        </div>
        <div class="col-md-auto">
            <label>
                Search:
                <input type="search" class="form-control form-control-sm d-inline-block" style="width: auto;" placeholder="">
            </label>
        </div>
    </div>

    <div class="card-body table-container">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM contact_messages ORDER BY date_sent DESC");
        if (mysqli_num_rows($result) > 0):
            $counter = 1;
        ?>
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr align="center">
                        <th>No.</th>
                        <th>Name</th>
                        <th>Date & time Sent</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <td><?= $counter++ ?></td>
                            <td><?= htmlspecialchars($row['name']) ?></td>
                            <td><?= htmlspecialchars($row['date_sent']) ?></td>
                            <td>
                                <a href="inquiry.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-info text-white">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="delete_message.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-muted">No message found.</p>
        <?php endif; ?>
    </div>
</main>
</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
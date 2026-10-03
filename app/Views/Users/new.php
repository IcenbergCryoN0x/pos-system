<!DOCTYPE html>
<html>
<head>
    <title>New User</title>
</head>
<body>

    <h1>Add New User</h1>

    <nav>
        <a href="<?= base_url('/customers') ?>">Customer Accounts</a> |
        <a href="<?= base_url('/users') ?>">User Accounts</a>
    </nav>

    <hr>

    <?php if (isset($validation)): ?>
        <?= $validation->listErrors() ?>
    <?php endif; ?>

    <form action="<?= base_url('users/create') ?>" method="post">
        <?= csrf_field() ?>

        <p>
            <label>Username:</label><br>
            <input
                type="text"
                name="username"
                value="<?= old('username') ?>"
            >
        </p>

        <p>
            <label>Full Name:</label><br>
            <input
                type="text"
                name="full_name"
                value="<?= old('full_name') ?>"
            >
        </p>

        <button type="submit">Save User</button>
    </form>

</body>
</html>
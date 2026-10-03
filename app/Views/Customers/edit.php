<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>

    <h1>Edit Customer</h1>

    <nav>
        <a href="<?= base_url('/customers') ?>">Customer Accounts</a> |
        <a href="<?= base_url('/users') ?>">User Accounts</a>
    </nav>

    <hr>

    <?php if (isset($validation)): ?>
        <?= $validation->listErrors() ?>
    <?php endif; ?>

    <form action="<?= base_url('customers/update/' . $customer['id']) ?>" method="post">
        <?= csrf_field() ?>

        <p>
            <label>Full Name:</label><br>
            <input
                type="text"
                name="full_name"
                value="<?= old('full_name', $customer['full_name']) ?>"
            >
        </p>

        <p>
            <label>Email:</label><br>
            <input
                type="email"
                name="email"
                value="<?= old('email', $customer['email']) ?>"
            >
        </p>

        <p>
            <label>Phone:</label><br>
            <input
                type="text"
                name="phone"
                value="<?= old('phone', $customer['phone']) ?>"
            >
        </p>

        <button type="submit">Update Customer</button>
    </form>

</body>
</html>
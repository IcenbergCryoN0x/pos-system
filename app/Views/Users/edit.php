<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

    <h1>Edit User</h1>

    <nav>
        <a href="<?= base_url('/customers') ?>">Customer Accounts</a> |
        <a href="<?= base_url('/users') ?>">User Accounts</a>
    </nav>

    <hr>

    <?php if (isset($validation)): ?>
        <?= $validation->listErrors() ?>
    <?php endif; ?>

    <?php if (isset($customError)): ?>
        <p style="color: red;">
            <?= esc($customError) ?>
        </p>
    <?php endif; ?>

    <form
        action="<?= base_url('users/update/' . $user['id']) ?>"
        method="post"
        enctype="multipart/form-data"
    >
        <?= csrf_field() ?>

        <p>
            <label>Username:</label><br>
            <input
                type="text"
                name="username"
                value="<?= old('username', $user['username']) ?>"
            >
        </p>

        <p>
            <label>Full Name:</label><br>
            <input
                type="text"
                name="full_name"
                value="<?= old('full_name', $user['full_name']) ?>"
            >
        </p>

        <p>
            <label>Profile Picture:</label><br>
            <input type="file" name="avatar" accept=".jpg,.jpeg,.png">
        </p>

        <?php if (! empty($user['avatar'])): ?>
            <p>Current Avatar:</p>
            <img
                src="<?= base_url('uploads/avatars/' . $user['avatar']) ?>"
                width="120"
                height="120"
                alt="User avatar"
            >
        <?php else: ?>
            <p>No avatar uploaded yet.</p>
        <?php endif; ?>

        <p>
            Accepted files: JPG or PNG, maximum 2 MB.
        </p>

        <button type="submit">Update User</button>
    </form>

</body>
</html>
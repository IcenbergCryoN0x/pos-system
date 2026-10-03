<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>

<p>
    <a href="<?= base_url('/customers/new') ?>">Add New Customer</a>
</p>

<body>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a> |
        <a href="<?= base_url('/about') ?>">About</a> |
        <a href="<?= base_url('/customers') ?>">Customer Accounts</a> |
        <a href="<?= base_url('/users') ?>">User Accounts</a>
    </nav>

    <hr>

    <h1>Customer Accounts</h1>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td> 
                    

                    <td>
                    <a href="<?= base_url('/customers/edit/' . $customer['id']) ?>">
                         Edit
                    </a>
                </td>
                </tr>
                
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
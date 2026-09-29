<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <form action="/admin/register" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Your name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Your email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Your password">
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Your password again">
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
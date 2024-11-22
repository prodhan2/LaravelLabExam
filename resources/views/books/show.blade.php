<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <!-- Page Header -->
    <div class="text-center mb-4">
        <h1 class="text-primary"><i class="fas fa-book"></i> Book Details</h1>
    </div>

    <!-- Table -->
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover table-bordered text-center">
                <thead class="table-primary">
                    <tr>
                        <th><i class="fas fa-hashtag"></i> ID</th>
                        <th><i class="fas fa-book"></i> Title</th>
                        <th><i class="fas fa-user"></i> Author</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$books->id}}</td>
                        <td>{{$books->title}}</td>
                        <td>{{$books->author}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <div class="text-center mt-4">
        <p class="text-muted">
            &copy; 2024 Book Management System | Designed with <i class="fas fa-heart text-danger"></i> by You
        </p>
    </div>
</div>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

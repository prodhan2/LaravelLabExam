<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- Header Section -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-10">
                <h4>Search Any Book</h4>
            </div>
            <div class="col-lg-2 text-end">
                <a href="{{route('book.create')}}" class="btn btn-primary">Add Book</a>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Book List</h1>
        <div class="table-responsive">
            <table class="table table-hover align-middle bg-white shadow rounded">
                <thead class="table-dark">
                    <tr>
                        <th scope="col"><i class="bi bi-hash"></i> ID</th>
                        <th scope="col"><i class="bi bi-book"></i> Title</th>
                        <th scope="col"><i class="bi bi-person"></i> Author</th>
                        <th scope="col"><i class="bi bi-gear"></i> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>
    <a href="{{ url('book/' . $book->id . '/show') }}" class="btn btn-info btn-sm text-white">
        <i class="bi bi-eye"></i> View
    </a>
    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm text-white">
        <i class="bi bi-pencil"></i> Edit
    </a>
 <form action="{{ route('delete', $book->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm"
                    onclick="return confirm('Are you sure you want to delete this book?')">
                Delete
            </button>
        </form>
</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

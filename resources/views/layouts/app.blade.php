<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Halaman Utama')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<!-- Navbar -->
@include('layouts.navbar')

<div class="d-flex" id="wrapper">
  <!-- Sidebar -->
  @include('layouts.sidebar')

  <!-- Konten Utama -->
  <div class="p-4" id="page-content-wrapper">
    @yield('content')
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.getElementById("toggleSidebar").addEventListener("click", function () {
    document.getElementById("sidebar-wrapper").classList.toggle("active");
  });
</script>
</body>
</html>
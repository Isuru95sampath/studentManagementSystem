<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
    }

    .navbar {
      background-color: #0d6efd;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .navbar-brand h1 {
      color: white;
      font-size: 24px;
      margin: 0;
    }

    .sidebar {
      background-color: #e3f7fc;
      padding-top: 20px;
      border-radius: 10px;
      height: 100vh;
      position: sticky;
      top: 20px;
    }

    .sidebar a {
      display: flex;
      align-items: center;
      color: #000;
      padding: 12px 20px;
      text-decoration: none;
      margin-top: 10px;
      border-radius: 8px;
      transition: all 0.5s ease;
    }

    .sidebar a i {
      margin-right: 10px;
    }

    .sidebar a:hover {
      background-color: #0d6efd;
      color: white;
    }

    .content {
      background-color: white;
      border-radius: 10px;
      padding: 20px;
      min-height: 100vh;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    @media screen and (max-width: 768px) {
      .sidebar {
        height: auto;
        position: relative;
        top: 0;
      }
    }
  </style>
</head>
<body>

  <div class="container-fluid px-4">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <h1>Student Management System</h1>
        </a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-2 mb-3">
        <div class="sidebar p-3">
          <a class="active" href="#"><i class="fas fa-home"></i> Home</a>
          <a href="{{ url('/student') }}"><i class="fas fa-user-graduate"></i> Students</a>
          <a href="{{ url('/teacher') }}"><i class="fas fa-chalkboard-teacher"></i> Teachers</a>
          <a href="#"><i class="fas fa-book"></i> Courses</a>
          <a href="#"><i class="fas fa-user-plus"></i> Enrollments</a>
          <a href="#"><i class="fas fa-credit-card"></i> Payments</a>
        </div>
      </div>

      <!-- Content -->
      <div class="col-md-10">
        <div class="content">
          @yield('content')
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>

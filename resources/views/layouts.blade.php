<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Student Management Project</title>
    <style>
        .sidebar {
  margin: 0;
  padding: 0;
  width: 250px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Student Management Project</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                </div>
              </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar">
                <a class="{{ request()->routeIs('home.index') ? 'active' : '' }}" href="{{ route('home.index') }}">Home</a>
                <a class="{{ request()->routeIs('student.index', 'student.create', 'student.edit', 'student.show') ? 'active' : '' }}" href="{{ route('student.index') }}">Student</a>

                <a class="{{ request()->routeIs('teacher.index', 'teacher.edit', 'teacher.create', 'teacher.show') ? 'active' : '' }}" href="{{ route('teacher.index') }}">Teacher</a>
                <a class="{{ request()->routeIs('course.index', 'course.edit', 'course.create', 'course.show') ? 'active' : '' }}" href="{{ route('course.index') }}">Courses</a>
                <a class="{{ request()->routeIs('batch.index', 'batch.edit', 'batch.create', 'batch.show') ? 'active' : '' }}" href="{{ route('batch.index') }}">Batches</a>
                <a class="{{ request()->routeIs('payouts.index', 'payouts.edit', 'payouts.create', 'payouts.show') ? 'active' : '' }}" href="{{ route('payouts.index') }}">Payouts</a>
            </div>
        </div>


        <div class="col-md-9">
              <!-- Page content -->

                @yield('content')

        </div>
    </div>
</div>
</body>
</html>

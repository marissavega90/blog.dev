<html>
<head>
	<title>My Blog</title>

	<link rel="stylesheet" href="/css/bootstrap.min.css">

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <style>
  #wrapper {
    padding-left: 280px;
    transition: all 0.4s ease 0s;
  }

  #sidebar-wrapper {
    margin-left: -250px;
    left: 250px;
    width: 250px;
    background: #000;
    position: fixed;
    height: 100%;
    overflow-y: auto;
    z-index: 1000;
    transition: all 0.4s ease 0s;
  }

  #page-content-wrapper {
    width: 100%;
  }

  .sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    list-style: none;
    margin: 0;
    padding: 0;
  }

  li {

    padding: 20px;
  }
@media (max-width:767px) {

    #wrapper {
      padding-left: 0;
    }

    #sidebar-wrapper {
      left: 0;
    }

    #wrapper.active {
      position: relative;
      left: 250px;
    }

    #wrapper.active #sidebar-wrapper {
      left: 250px;
      width: 250px;
      transition: all 0.4s ease 0s;
    }

    a {
      margin: 10px;
    }

}
</style>


</head>
<body>
	<div class="row">
      <div id="wrapper" class="toggle">

          <div id="sidebar-wrapper">
              <ul class="sidebar-nav">
                  <li class="sidebar-brand">
                      <a href="#">
                          Blog
                      </a>
                
              </ul>
          </div>
      </div> -->
  <div class="row"
      <div id="wrapper">
      <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
              <li><a href="/posts">Blog</a></li>
              <li><a href="/posts/create">Create Post</a></li>
              <li><a href="../portfolio">Portfolio</a></li>
              <li><a href="../resume">Resume</a></li>
          </ul>
      </div>
      <div id="page-content-wrapper">
          <div class="page-content">
              <div class="container">
                  <div class="row">
                      <div class="col-md-10">
                          <!-- content of page -->

	@yield('header')

	@if (Session::has('errorMessage'))
		<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif

	@if (Session::has('successMessage'))
		<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif

	@yield('content')
	
</body>
</html>
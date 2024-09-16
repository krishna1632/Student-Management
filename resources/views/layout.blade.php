<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://erp.ramanujancollege.ac.in/assets/images/logos/Logo_RCDU.png">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>student_management_</title>
    <!-- <style>

/* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
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



</style> -->
    <style>
    * {
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
    }


    .sidebar {
        position: fixed;
        left: 0;
        width: 250px;
        height: 100%;
        background: #2c394d;
        transition: all 0.5s ease;
    }

    .sidebar header {
        font-size: 22px;
        color: white;
        text-align: center;
        line-height: 70px;
        background: #063146;
        user-select: none;
    }

    .sidebar ul a {
        display: block;
        height: 100%;
        width: 100%;
        line-height: 65px;
        font-size: 20px;
        color: white;
        padding-left: 40px;
        font-sizing: border-box;
        border-top: 1px solid rgba(255, 255, 255, .1);
        border-bottom: 1px solid black;
        transition: .4s;
    }

    ul li:hover a {
        padding-left: 50px;
    }

    .sidebar ul a i {
        margin-right: 16px;
    }

    #check {
        display: none;
    }

    /* label #btn,label #cancel{
    position: absolute;
    cursor:pointer;
    background: #042331;
    border-radius: 3px;
  }
  label #btn{
    left: 40px;
    top: 25px;
    font-size:35px;
    color:white;
    padding:6px 12px;
    transition:all .5s;
  } */
    label #cancel {
        z-index: 1111;
        left: 195px;
        top: 17px;
        font-size: 30px;
        color: #0a5275;
        padding: 4px 9px;
        transition: all .5s ease;
    }

    #check:checked~.sidebar {
        left: 0;
    }

    #check:checked~label #btn {
        left: 250px;
        opacity: 0;
        pointer-events: none;
    }

    #check:checked~label #cancel {
        left: 195px;
    }

    .col-md-20 {
        padding-left: 30%;
        padding-top: 1px;
        padding-right: 5%;
    }

    section {
        background: url('https://allpngfree.com/apf-prod-storage-api/storage/thumbnails/srinivasa-ramanujan-png-images-thumbnail-1640103437.jpg') no-repeat;
        background-position: center;
        background-size: cover;
        height: 100vh;
    }
    </style>


</head>

<body>


    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-dark bg-primary">
                <h2 class="navbar-brand" href="#">
                    <h2 style="color:white">Ramanujan College</h2>
                </h2>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>



        <!-- <div class="row">
            <div class="col-md-3">


                <div class="sidebar">
                    <a class="active" href="#home">Home</a>
                    <a href="{{url('/students')}}">Student</a>
                    <a href="{{url('/teachers')}}">Teacher</a>
                    <a href="{{url('/courses')}}">Courses</a>
                    <a href="{{url('/batches')}}">Batches</a>
                    <a href="{{url('/enrollments')}}">Enrollment</a>
                    <a href="{{url('/payments')}}">Payment</a>
                </div>
            </div> -->

        <div class="sidebar">
            <header>
                More Option
            </header>

            <ul>
                <li><a href="#home"><i class="fa fa-gg"></i>HOME</a></li>
                <li><a href="{{url('/students')}}"><i class="fa fa-slideshare"></i>Student</a></li>
                <li><a href="{{url('/teachers')}}"><i class="fa fa-odnoklassniki"></i>Teacher</a></li>
                <li><a href="{{url('/courses')}}"><i class="fa fa-leanpub"></i>Courses</a></li>
                <li><a href="{{url('/batches')}}"><i class="fa fa-angellist"></i>Batches</a></li>
                <li><a href="{{url('/enrollments')}}"><i class="fa fa-black-tie"></i>Enrollment</a></li>
                <li><a href="{{url('/payments')}}"><i class="fa fa-bitcoin"></i>Payment</a></li>
            </ul>
        </div>
        <div class="col-md-20">
            @yield('content')
        </div>
    </div>
</body>

</html>
<body class="">
    <div class="wrapper ">
      <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset ('example') }}/assets/img/sidebar-1.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
  
          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
          </a></div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item active  ">
              <a class="nav-link" href="./dashboard.html">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ url ('book') }}">
                <i class="material-icons">content_paste</i>
                <p>Books Management </p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ url ('viewbook') }}">
                <i class="material-icons">library_books</i>
                <p>Books View</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ url ('user_man') }}">
                <i class="material-icons">person</i>
                <p> User Management</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ url ('b_book_o_h') }}">
                <i class="material-icons">bubble_chart</i>
                <p>Borrowed Books  History</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ url ('r_book') }}">
                <i class="material-icons">Returned books</i>
                <p>Returned books</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ url ('date_user') }}">
                <i class="material-icons">filter_frames</i>
                <p>Date User</p>
              </a>
            </li>
            <!-- <li class="nav-item ">
              <a class="nav-link" href="./rtl.html">
                <i class="material-icons">language</i>
                <p>RTL Support</p>
              </a>
            </li> -->
            
          </ul>
        </div>
      </div>
     
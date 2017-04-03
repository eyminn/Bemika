
<!-- header -->
<div id="header">

<!-- brand name -->
  <div id="name-brand">
    <h2 class="name-brand"><?php echo $_SESSION['user'] ?></h2>
  </div>

<!-- dropdown -->
<div class="dropdown">
  <a class="dropbtn"><i class="fa fa-user-circle-o" aria-hidden="true"></i><?php echo $_SESSION['user'] ?></a>
  <div class="dropdown-content">
    <a href="#">Lock screen</a>
    <a href="#">Log out</a>
    <a href="#">Settings</a>
  </div>
</div>
</div>

<!-- sidebar left -->
<div id="sidebar_left">

<!-- search bar -->
<form method="get" action="/search" id="search">
<input name="q" type="text" size="60" placeholder="Search..." />
</form>

<!-- admin name -->
<h2 class="name-admin">Milos Despotovic</h2>

<!-- navbar -->
<div id="navbar">
 
    <a href="?action=dashboard"><i class="fa fa-home" aria-hidden="true"></i>Dashboard</a>
    <a class="active" href="?action=activity&page=activitys"><i class="fa fa-clone" aria-hidden="true"></i>Activity log</a>
    <a href="?action=pages"><i class="fa fa-file-o" aria-hidden="true"></i>Pages</a>
    <a href="?action=charts"><i class="fa fa-bar-chart" aria-hidden="true"></i>Charts</a>
    <a href="?action=accounts"><i class="fa fa-users" aria-hidden="true"></i>Accounts</a>
  
</div>

</div>

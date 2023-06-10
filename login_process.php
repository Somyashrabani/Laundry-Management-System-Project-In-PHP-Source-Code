<?
@include 'login.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Laundry Management Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>Laundry Management Dashboard</h1>
      <h3>Welcome Admin Dashboard!!</h3>
      <main>
      <p>Here, you can track and manage your laundry orders, customers, and inventory.</p>
    </main>
    
    <footer>
      <p>Laundry Management System &copy; 2023</p>
    </footer>
    </header>
    <div class="sidebar">
    <nav>
      <ul>
        <li><a href="Inventory.php">Inventory</a></li>
        <li><a href="Laundry_list.php">Laundry_list</a></li>
        <li><a href="Laundry_items.php">Laundry_items</a></li>
        <li><a href="Laundry_catagories.php">Laundry_catagories</a></li>
        <li><a href="Logout.php">Logout</a></li>
      </ul>
    </nav>
    <div>

  </div>
  <style>
        /* Add CSS styles here */
    
          @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,900;1,200;1,300;1,400&display=swap');
:root{
  --orange: #ff7800;
--black: #130f40;
--light-color: #666;
--box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
--border:.2rem solid rgba(0,0,0,.1);
--outline:.1rem solid rgba(0,0,0,.1);
--outline-hover:.2rem solid var(--black);
}
*{
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
  box-sizing: border-box;
  scroll-behavior: smooth;
  outline: none;
  list-style: none;
  text-decoration: none;
  text-transform: capitalize;
  transition: all.2s linear;
}
html{
  font-size: 62.5%;
  overflow: hidden;
  scroll-behavior: smooth;
  scroll-padding-top: 7rem;
}
body{
  background:#eee;
}
.sidebar{
  position: sticky;
  top: 0;
  left: 0;
  bottom: 0;
  width: 240px;
  height: 100vh;
  padding: 0 1.7rem;
  color: #fff;
  overflow: hidden;
  transition: all 0.5s linear;
  background: rgba(113, 99,186, 255);
}
.logo{
  height: 80px;
  padding: 16px;
}
.menu{
  height: 88%;
  position: relative;
  list-style: none;
  padding: 0;
}
.menu li{
  padding: 1rem;
  margin: 8px 0;
  border-radius: 8px;
  transition: all 0.5s ease-in-out;
}
.menu li:hover{
  background: #eee;
}
.menu a{
  color: #fff;
  font-size: 14px;
  text-decoration: none;
  display: flex;
  align-items: center;
  gap: 1.5rem;
}
.menu a span{
  overflow: hidden;
}
.menu a i{
  font-size: 1.2rem;
}
.Logout{
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
}
    </style>
</body>
</html>

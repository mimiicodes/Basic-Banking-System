<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/transactions.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Basic Bank</title>
</head>
<body>

  <div class="loader_bg">
    <div class="loader"></div>
  </div>

    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bx-mail-send icon'></i>
          <div class="logo_name">Miracle</div>
          <i class='bx bx-menu' id="btn" ></i>
      </div>
      <ul class="nav-list">
        <li>
            <i class='bx bx-search' ></i>
           <input type="text" placeholder="Search...">
           <span class="tooltip">Search</span>
        </li>
        <li>
          <a href="../index.php">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
          </a>
           <span class="tooltip">Dashboard</span>
        </li>
        <li>
         <a href="./customers.php">
           <i class='bx bx-user' ></i>
           <span class="links_name">Customers</span>
         </a>
         <span class="tooltip">Customers</span>
       </li>
       <li>
         <a href="./transfer..php">
            <i class='bx bx-share bx-flip-horizontal' ></i>
           <span class="links_name">Transfer</span>
         </a>
         <span class="tooltip">Transfer</span>
       </li>
       <li>
         <a href="#">
            <i class='bx bx-list-ul'></i>
           <span class="links_name">Transactions</span>
         </a>
         <span class="tooltip">Transactions</span>
       </li>
       <li>
         <a href="#">
            <i class='bx bx-bell'></i>
           <span class="links_name">Notifications</span>
         </a>
         <span class="tooltip">Notifications</span>
       </li>
       <li>
         <a href="#">
           <i class='bx bx-cog' ></i>
           <span class="links_name">Settings</span>
         </a>
         <span class="tooltip">Settings</span>
       </li>
       <li class="profile">
           <div class="profile-details">
             <!--<img src="profile.jpg" alt="profileImg">-->
             <div class="name_job">
               <div class="name">Miracle O.</div>
               <div class="job">Banker</div>
             </div>
           </div>
           <i class='bx bx-log-out' id="log_out" ></i>
       </li>
      </ul>
    </div>
    <section class="home-section">
        <div class="main_content">
            <header>
                <div class="username">
                    <h3 class="username__h3">Mimiicodes</h3>
                </div>
                <div class="profile__nav">
                    <a href="#" class="header__a">Developer</a>
                    <a href="#" class="header__a">Help</a>
                    <div class="profile">
                        <button class="profile__name">Miracle Ogunleye</button>
                        <div class="dropdown-content">
                            <a href="#">Message Center</a>
                            <a href="#">Profile Settings</a>
                            <a href="#">Account Settings</a>
                            <a href="#">Log Out</a>
                          </div>
                    </div>
                </div>
            </header>
        </div>

        <caption>Transaction Details</caption>

        <div style="overflow-x: auto;">
  <table>
  

<tr>
      <th>Message</th>
      <th>Timestamp</th>
      <th>Amount</th>
    </tr>
    <?php
	include '../init.php';
	if ($resulter->num_rows > 0) {
    	// output data of each row
    	while($row = $resulter->fetch_assoc()) {
        
    		echo "
        <tr>
      <td>".$row["Message"]. "</td>
      <td> ".$row['Dater']."  </td>
      <td>".$row['soney']."</td>
    </tr>";
    	}
	} 
	
	else {
	    echo "<h4 class='nimc'> No Transactions </h4>";
	}
	$conn->close();
?>
  
  </table>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>        
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Basic Bank</title>
</head>
<body><?php 
include 'init.php';

if ($resulte->num_rows > 0) {
    // output data of each row
    while($row = $resulte->fetch_assoc()) {
        $GLOBALS['username'] = $row["name"];
        $GLOBALS['email'] = $row['Email'];
        $GLOBALS['amount'] = $row['Amount'];
    }
} 
else {
    echo "0 results";
}
$conn->close();


 
?>
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
          <a href="index.php">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
          </a>
           <span class="tooltip">Dashboard</span>
        </li>
        <li>
         <a href="./html/customers.php">
           <i class='bx bx-user' ></i>
           <span class="links_name">Customers</span>
         </a>
         <span class="tooltip">Customers</span>
       </li>
       <li>
         <a href="./html/transfer.php">
            <i class='bx bx-share bx-flip-horizontal' ></i>
           <span class="links_name">Transfer</span>
         </a>
         <span class="tooltip">Transfer</span>
       </li>
       <li>
         <a href="./html/transactions.php">
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
               <div class="name">Prem Shahi</div>
               <div class="job">Web designer</div>
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
            <section class="wallet">
                <div class="wallet_img">
                    <img class="user_img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAx9JREFUaEPtmY2NEzEQhd9VwHUAVMBRAVABUAFcBUAFQAXQAVABUAFQAVDBQQdQAeiT7JMvsT0/u0kU6UaKlGi99ryZN3/OiY5cTo5cf10DOLQH1/TAmaR7ku5LuiWJ3638kPRL0ldJ3yTxe7EsBXAq6Ymk50XpiEKAeSvpg6Q/kRfbtVkAKP6sKM73JYLyAHmd2SQDAIq8S1jc0g+PnBeKWWsvn0cBvJT0yr17biH7u70RAYDVn+Z0Cr/1vnjDfNELYJ/KV6VdIDwAcCnUOYRApSllLQAE7JdDaN6c+WAW2DMApMfvO8g2UXuQnW6PXpoByFLnb8nrn5pqS1V+VOrGjSiCkpW6VBoBwPoXkqJF6mdRFKv1hBYDYHeCICh2eGGrYo8A0Bq8CR6C5bH0SPm6HSDog6KeeFE8e0WtEQCsz0ERMTNGsxmtA61IRLqx0AOAFQneqNwNdJirndEDkKEPYK2UvGmQf1ELSdqiUe9QguxhYvN9APhcksSler1Doc/mMOLBsw8KMQhRXKcAMq5lw10HcVX6itF7HsgCIEfjBU8axcvRGrNzABxAfn88AUFq/pik6F4AcEgdEQm4OrgTU8zOzBNZy7sBcGi01HuCfI01riDOptE1FLT2cKXRbCGzDl/juauQZcv8b0mMgVBwdM8D/9mfWLiZQLRVa0bVk1ToPQDFUYgbt4hQkAAcOWerwVzaTnOrBuWyN2t4hM6UDGVJqJ1mY7ww69lRfq1rFjwxA8GsgfXdAw3WsEZKJiSr6lpWrc9RjhlkJMM2xRrqCcgRR3nGjUGWPlVZvM3Nx6iBJMaGw5XVAlvXKoCAm9EArsp77lmnXa4FwEMl1lD8AOKlFBZl5uamYibdwG1f8ABgvRVkdU88UmsBgdf2QiQELI7SnnnDlSS8ACIgvIE7W+dSng0iALx0WgrApE2GQu070QrqBUS2gV6h/86iHmhTHxWYT/SCahNQvYpM/XGSBdACoRoDxNvT1HexOG0EQZ+uJUsBtNYks0AvPhQn/nJthWEERakZfEJUGfFwTQBerq+67hrAquZMbHb0HvgPuvqWMe43CLgAAAAASUVORK5CYII="/>                </div>
                <div class="wallet__heading">
                    <h3 class="balance__text"><?php echo $username ?></h3>
                </div>
                <h1 class="balance"> <?php echo $amount ?></h1>
                <p class="available__text">Available</p>
            </section>

            
        </div>
    </section>

    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript">
  $(document).ready(function() {
    $(".mm").prepend("NGN&nbsp;");
    });
</script>
  </body>
</html>
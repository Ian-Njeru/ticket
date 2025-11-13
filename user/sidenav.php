
<div class="sidebar">
    
    <div class="header">
        <div class="logo"><img src="assets\logo.png" width="40px" height="40px" alt="" srcset=""></div>
        <div class="name">Ticket</div>
    </div>

    <div class="nav-section">
        <div class="nav-title">Menu</div>
            <a href="./home" class="navigation" id="home">
                <div class="icon"><i class="fa fa-home" ></i></div>
                <div class="dashboard-name">Home</div>
            </a>
            <a href="./open-ticket" class="navigation" id="open-ticket">
                <div class="icon"><i class="fa fa-ticket"></i></div>
                <div class="dashboard-name">Open Ticket</div>
            </a>
            <a href="./profile" class="navigation" id="profile">
                <div class="icon"><i class="fa fa-user"></i></div>
                <div class="dashboard-name">Profile</div>
            </a>
            
            <!--<a href="./activity" class="navigation" id="activity">
                <div class="icon"><i class="fa fa-clock-rotate-left"></i></div>
                <div class="dashboard-name">Activity</div>
            </a>!-->
    </div>

    <div class="footer">
        <div class="user">
            <?php
                $username = $_SESSION['username']??'';
                //unset($_SESSION['username']);
                if($username){
                    echo strtoupper($username);
                }
            
            ?>
        </div>
        <div class="btn-logout"><button><a href="logout" class="logout">Logout</a></button></div>
    </div>
</div>


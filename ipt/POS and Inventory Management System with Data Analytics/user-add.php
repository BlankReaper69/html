

<!DOCTYPE html>
<html>
    <head>
        <title>IMS Dashboard-Inventory Management System</title>
        <link rel="stylesheet" type="text/css" href="IMS CSS/login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div id="dashboardMainContainer">
            <?php include('partials/app-sidebar.php')?>
        <div class="dashboard_content_container" id="dashboard_content_container">
        <?php include('partials/app-topnv.php')?>
                <div class="dashboard_content">
                    <div class="dashboard_content_main">
                        <div class="container">
                        <form action="" class="appForm">  
                            <div>
                            <label for="first_name">First name</label>
                            <input type="text" id="first_name" name="first_name"/>
                            </div>

                            <div>
                            <label for="last_name">Last name</label>
                            <input type="text" id="last_name" name="last_name"/>
                            </div>

                            <div>
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email"/>
                            </div>

                            <div>
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password"/>
                            </div>
                            <button type="submit"><i class="fa-solid fa-plus"></i> Add User</button>     
                        </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="js/script.js"></script>
    </body>  
</html>
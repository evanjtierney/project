<?php
require("connect-db.php");
require("user-db.php");
?>

<?php
$list_of_users = getAllUsers();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Library</title>
        <meta charset="utf-8">    
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Library</span>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Browse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reading Lists</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <h3>List of books</h3>
        <div class="row justify-content-center">  
            <table class="w3-table w3-bordered w3-card-4 center" style="width:100%">
                <thead>
                    <tr style="background-color:#B0B0B0">
                        <th width="10%"><b>ISBN</b></th>
                        <th width="40%"><b>Title</b></th>        
                        <th width="30%"><b>Series Title</b></th> 
                        <th width="20%"><b>Publication Date (Y-M-D)</b></th>        
                    </tr>
                </thead>
                <?php foreach ($list_of_users as $user_info): ?>
                    <tr>
                        <td><?php echo $user_info['username']; ?></td>
                        <td><?php echo $user_info['password']; ?></td>        
                        <td><?php echo $user_info['email']; ?></td>          
                        <td><?php echo $user_info['creationDate']; ?></td>        
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga School|Staff page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<style>
    <style> 
*{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}

body{
  justify-content: center;
	align-items: center;
	flex-wrap: wrap;
}
nav{
  background: #0082e6;
  height: 78px;
  width: 99.6%;
   box-shadow:0 5px 9px 0 rgba(18, 16, 16, 0.2), 0 7px 22px 0 rgba(0, 0, 0, 0.19);
}
label.logo{
  color: white;
  font-size: 38px;
  line-height: 80px;
  padding: 0 100px;
 /* font-weight: bold;*/
  font-family: 'Berkshire Swash', cursive;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
a.active,a:hover{
  background: #1b9bff;
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 952px){
  label.logo{
    font-size: 30px;
    padding-left: 50px;

  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 858px){
  .checkbtn{
    display: block;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  a:hover,a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }
}
    </style>

<body>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Yoga School</label>
      <ul>
        <li><a class="active" href="../index.html">Home</a></li>
        <li><a href="../about.html">About</a></li>
        <li><a href="../events.html">Services</a></li>
        <li><a href="../contact.html">Contact</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </nav>
    <section>
        


    <div class="container my-5">
        <h2>List of Yoga Instructors</h2>
        <a class="btn btn-primary" href="create.php" role="button">New Instructor</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Qualification</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "yoga";

                // Create connection
                $connection = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }

                // read all row from database table
                $sql = "SELECT * FROM clients";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }

                // read data of each row
                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[phone]</td>
                        <td>$row[address]</td>
                        <td>$row[created_at]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='edit.php?id=$row[id]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
                        </td>
                    </tr>
                    ";
                }

                ?>

                
            </tbody>
		</table>
    </div>
</body>
</html>
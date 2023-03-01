<?php
////////////////////////////////////////////////////////////////////////////
//Get list of Categories
$output = '';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "self-help";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT catno, catname FROM category";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $output = $output . '
    <option value="' . $row["catno"] . '">' . $row["catname"] . '</option>
    ';
    }
} else {
    echo "Failed to get list of Categories";
}

//uploading file to database
if (isset($_POST['submit'])) {
    $desc = $_POST['description'];
    $category = $_POST['category'];
    $title = $_POST['title'];

    $file = rand(100, 100000) . "-  " . $_FILES['location']['name'];

    $tname = $_FILES['location']['tmp_name'];
    $dir = "../assets/images/faq/";
//move file to a specific locaton
    move_uploaded_file($tname, $dir . $file);
//insert statement
    $run = "INSERT INTO solution (soltitle, soldesc, sollocation,catno) VALUES ('$title','$desc','$file',$category)";
    mysqli_query($conn, $run);
    ?>
<script>
    window.alert("Successfully added");
window.hostory();
</script>
<?php
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<h3>Self-Help Portal Document Upload</h3>
<div class="container">
  <form action="#" method="post" enctype="multipart/form-data">
    <label for="title">Title</label>
    <input type="text" id="title" name="title" placeholder="Enter Title..">
    <label for="description">Description</label>
    <textarea id="description" name="description" placeholder="Add Description.."               style="height:200px"></textarea>
    <label for="country">Category</label>
        <select id="category" name="category">
            <?php echo $output; ?>
        </select>
    <label for="lname">Location</label>
    <input type="file" id="location" name="location" placeholder="Your last name..">
    <br><br><br>
    <input type="submit" name = "submit" value="Submit">
  </form>
</div>
</body>
</html>
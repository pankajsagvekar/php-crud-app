<?php
include('connect.php');
$id = $_GET['updateid'];
$sql = "SELECT * FROM `users` WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$number = $row['mobile'];
$password = $row['password'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <script src="css/tailwind.js"></script>
</head>
<body class="bg-slate-100">
    <div class="flex justify-center items-center min-h-screen mx-12">
        <form action="" method="post" class=" bg-slate-300 p-5 rounded-lg w-full shadow-lg">
            <div class="mb-3">
                <label class="font-semibold inline-block mb-1">Full Name</label>
                <input type="text" class="rounded-md w-full p-2 border-2 focus:outline-none focus:border-sky-400 focus:ring-sky-400 duration-300 transition-colors " placeholder="Enter Your Full Name" name="name" value="<?php echo $name?>">
            </div>
            <div class="mb-3">
                <label class="font-semibold inline-block mb-1">Email</label>
                <input type="email" class="rounded-md w-full p-2 border-2  focus:outline-none focus:border-sky-400 focus:ring-sky-400 duration-300 transition-colors" placeholder="Enter Your Email" name="email" value="<?php echo $email?>">
            </div>
            <div class="mb-3">
                <label class="font-semibold inline-block mb-1">Mobile Number</label>
                <input type="number" class="rounded-md w-full p-2 border-2 focus:outline-none focus:border-sky-400 focus:ring-sky-400 duration-300 transition-colors" placeholder="Enter Your Number" name="number" value="<?php echo $number?>">
            </div>
            <div class="mb-3">
                <label class="font-semibold inline-block mb-1 ">Password</label>
                <input type="text" class="rounded-md w-full p-2 border-2 focus:outline-none focus:border-sky-400 focus:ring-sky-400 duration-300 transition-colors" placeholder="Enter Your Password" name="password" value="<?php echo $password?>">
            </div>
            <div class="text-center">
                <button type="submit" class="bg-sky-500 p-2 px-3 rounded-lg m-0 transition-colors hover:bg-sky-600 text-white duration-300" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    $sql = "UPDATE `users` SET id=$id, name='$name', email='$email', mobile='$number', password='$password' WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if($result){
        echo"Updated";
        header("Location:display.php");
    }
    else{
        die(mysqli_error($con));
    }
}
?>
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
                <input type="text" class="rounded-md w-full p-2 border-2 focus:outline-none focus:border-sky-400 focus:ring-sky-400 duration-300 transition-colors " placeholder="Enter Your Full Name" name="name" required>
            </div>
            <div class="mb-3">
                <label class="font-semibold inline-block mb-1">Email</label>
                <input type="email" class="rounded-md w-full p-2 border-2  focus:outline-none focus:border-sky-400 focus:ring-sky-400 duration-300 transition-colors" placeholder="Enter Your Email" name="email" required>
            </div>
            <div class="mb-3">
                <label class="font-semibold inline-block mb-1">Mobile Number</label>
                <input type="number" class="rounded-md w-full p-2 border-2 focus:outline-none focus:border-sky-400 focus:ring-sky-400 duration-300 transition-colors" placeholder="Enter Your Number" name="number" required>
            </div>
            <div class="mb-3">
                <label class="font-semibold inline-block mb-1 ">Password</label>
                <input type="password" class="rounded-md w-full p-2 border-2 focus:outline-none focus:border-sky-400 focus:ring-sky-400 duration-300 transition-colors" placeholder="Enter Your Password" name="password" required>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-sky-500 p-2 px-3 rounded-lg m-0 transition-colors hover:bg-sky-600 text-white duration-300" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
include('connect.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `users` (name, email, mobile, password)
            VALUES('$name', '$email', '$number', '$password');
            ";
    $result = mysqli_query($con, $sql);

    if($result){
        echo"Data Inserted";
        header("Location:display.php");
    }
    else{
        die(mysqli_error($con));
    }
}
?>
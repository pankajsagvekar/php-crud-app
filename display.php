<?php include('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <script src="css/tailwind.js"></script>
</head>
<body class="bg-slate-100">
    <div class="flex items-center justify-center min-h-screen">
        <div>
                <button><a class="p-2 bg-sky-500 text-white rounded-md block mb-4 hover:shadow-lg duration-300 transition-shadow" href="user.php">Add User</a></button>
            <table class="table-auto shadow-lg rounded-md text-center">
                <thead>
                    <tr class="bg-gray-200 uppercase">
                        <th class="px-6 py-3">Id</th>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Email</th>
                        <th class="px-6 py-3">Mobile</th>
                        <th class="px-6 py-3">Password</th>
                        <th class="px-6 py-3">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = 'SELECT * FROM `users`;';
                        $result = mysqli_query($con, $sql);
                        if($result){
                            while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                                <tr class="border-b border-gray-100 bg-gray-300">
                                    <td class="px-6 py-3"><?php echo $row['id'];?></td>
                                    <td class="px-6 py-3"><?php echo $row['name'];?></td>
                                    <td class="px-6 py-3"><?php echo $row['email'];?></td>
                                    <td class="px-6 py-3"><?php echo $row['mobile'];?></td>
                                    <td class="px-6 py-3"><?php echo $row['password'];?></td>
                                    <td class="px-6 py-3">
                                        <a class="inline-block p-2 bg-sky-500 text-white rounded-md mx-4 hover:shadow-lg hover:bg-sky-600 duration-500 transition-all" href="update.php?updateid='<?php echo $row['id'];?>'">Update</a>
                                        <a class="inline-block p-2 bg-red-500 text-white rounded-md hover:shadow-lg hover:bg-red-600 duration-500 transition-all" href="delete.php?deleteid='<?php echo $row['id'];?>'">Delete</a>
                                    </td>
                                </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

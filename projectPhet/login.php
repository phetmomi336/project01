

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include'connect.php'; ?>


    <form action="insertproject.php" method="post" enctype="multipart/form-data">
        <div class="flex items-center justify-center min-h-screen bg-gray-100 shadow-lg">
            <div class="bg-white relative flex  rounded-lg shadow-lg  ">
                <div class="flex flex-col justify-center items-center p-10 space-y-2">
                    <img 
                    class="w-24 h-24"
                    src="https://img.freepik.com/premium-vector/art-illustration-colorful-cute-mushroom-no-background-4a-colorful-cute-mushroom_470458-187.jpg" alt="">
                    <span class="text-4xl font-semibold ">Login to Mushroom</span>
                    <span class="font-light text-gray-400 ">Please enter your Details</span>
                
                    <div class="flex flex-col items-start w-full py-4  space-y-2">
                        <span>USERNAME</span>
                        <input
                        class="w-full border p-3 rounded-md border-gray-300 placeholder:font-light "
                        placeholder="Enter your username"
                        type="text"
                        name="username">
                    </div>
                    
                    <div class="flex flex-col items-start w-full space-y-2">
                        <span>PASSWORD</span>
                        <input
                        class="w-full border p-3 rounded-md border-gray-300 placeholder:font-light "
                        placeholder="Enter your password"
                        type="password"
                        name="password">
                    </div>

                    <div class="flex justify-between w-full py-4">
                        <div>
                            <input
                            class="w-4 h-4 mr-2"
                            type="checkbox">
                            <span>Remember me</span>
                        </div>

                        <a href="">Forgot Password</a>

                    </div>

                    <div class="flex flex-col space-y-2 w-full">
                        <input class="bg-gray-700 text-white w-full rounded-lg  text-sm p-3" type="file" name="file1">
                        <input class="bg-black text-white w-full p-3 rounded-lg text-xl" type="submit" value="Login">
                    </div>

                    <div class="py-4 space-x-4">
                        <span class="text-gray-700">Don't have an account?</span>
                        <a class="hover:text-gray-600" href="">Sign up</a>
                    </div>


                </div>

                <div class="relative">
                    <img 
                    class="w-[400px] h-full hidden md:block rounded-r-xl object-cover"
                    src="https://cdn.pixabay.com/photo/2023/05/30/14/27/ai-generated-8028796_1280.png" alt="">
                    
                    <div class="absolute hidden md:block bottom-10 right-6 p-6 bg-white bg-opacity-0 backdrop-blur-sm">
                        <span class="text-white  text-xl">
                            Login to management your Project
                            <br>
                            <span class="text-cyan-400 text-md">Enjoy Coding whit Phetdemy</span>
                        </span>

                    </div>
                </div>
            </div>
        </div>
    </form>
    
</body>
</html>
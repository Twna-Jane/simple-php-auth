<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#f8f4f3]">
                <div>
                    <?php if (isset($_SESSION['success'])): ?>
                        <div id="success-message" class="text-green-500 text-sm">
                            <?php echo $_SESSION['success']; ?>
                        </div>
                        <?php unset($_SESSION['success']); ?>
                    <?php endif; ?>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const successMessage = document.getElementById('success-message');
                            if (successMessage) {
                                setTimeout(() => {
                                    successMessage.style.transition = 'opacity 0.5s ease';
                                    successMessage.style.opacity = '0';
                                    setTimeout(() => successMessage.remove(), 500);
                                }, 3000); // Adjust the time (3000ms = 3 seconds) as needed
                            }
                        });
                    </script>
                    <a href="/"></a>
                        <h2 class="font-bold text-3xl">WELCOME <span class="bg-[#f84525] text-white px-2 rounded-md">BACK</span></h2>
                    </a>
                </div>

                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    <form method="POST" action="login.process.php">

                        <div class="py-8">
                            <center>
                                <span class="text-2xl font-semibold">Log In</span>
                            </center>
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700" for="email">Email</label>
                            <input type='email' 
                                name='email'
                                placeholder='Email'
                                class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]" />
                            <?php if (isset($_SESSION['errors']['email'])): ?>
                                <span class="text-red-500 text-sm"><?php echo $_SESSION['errors']['email']; ?></span>
                            <?php endif; ?>                        
                        </div>

                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700" for="password">Password</label>
                            <div class="relative"></div>
                                <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password" class = 'w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]'>
                                <?php if (isset($_SESSION['errors']['password'])): ?>
                                    <span class="text-red-500 text-sm"><?php echo $_SESSION['errors']['password']; ?></span>
                                <?php endif; ?>

                        </div>  

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <input type="checkbox" id="remember_me" name="remember" class = 'rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500']) !!}>
                                <span class="ms-2 text-sm text-gray-600">Remember Me</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                                <a class="hover:underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="register.php">
                                    New user?
                                </a>

                            <button type="submit" class = 'ms-4 inline-flex items-center px-4 py-2 bg-[#f84525] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-800 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
                                Sign In
                            </button>

                        </div>
                        
                    </form>                
                </div>
            </div>
        </div>

    <script>
        const passwordInput = document.getElementById('password');
        const togglePasswordButton = document.getElementById('togglePassword');

        togglePasswordButton.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });
    </script>   

    </body>
</html>
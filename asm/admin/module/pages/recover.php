</html>
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot password - Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="icon" href="https://pngimg.com/uploads/adidas/adidas_PNG17.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/admin/css/tailwind.output.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="../../../assets/admin/js/init-alpine.js"></script>

</head>

<body>
    <?php
    if (isset($_POST['recover'])) :
        require('../../include/connect.php');
        $email = $_POST['email'];
        $min = 100000;
        $max = 999999;
        $code = rand($min, $max);
        $mail = "SELECT * FROM `admin` where email = '$email'";
        if ($conn->query($mail)->num_rows > 0):
            require('../../include/sendmail.php');
    ?>
            <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
                <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
                    <div class="flex flex-col overflow-y-auto md:flex-row">
                        <div class="h-32 md:h-auto md:w-1/2">
                            <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="../../../assets/admin/img/forgot-password-office.jpeg" alt="Office" />
                            <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="../../../assets/admin/img/forgot-password-office-dark.jpeg" alt="Office" />
                        </div>
                        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                            <div class="w-full">
                                <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                                    Recovery password
                                </h1>
                                <form action="../action/recover-action.php" method="post">
                                    <label class="block text-sm">
                                        <input type="hidden" value="<?= $code ?>" name="code">
                                        <input type="hidden" value="<?= $email ?>" name="email">
                                        <span class="text-gray-700 dark:text-gray-400">Code</span>
                                        <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Enter the code received via email" type="text" name="codeenter" />
                                    </label>

                                    <!-- You should use a button here, as the anchor is only used for the example  -->
                                    <button class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" name="entercode" type="submit" value="submit">
                                        Recover password
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
    else:
        header('Location: ../../pages/forgot-password.php');
        endif;
    endif;
    ?>

</body>

</html>
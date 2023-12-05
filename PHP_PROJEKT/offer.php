<?php include 'path.php';
include SITE_ROOT . "/app/database/db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>

    <?php include("app/include/head.php") ?>

</head>

<body class="font-sans bg-gray-100">

    <?php include("app/include/header.php"); ?>

    <section class="py-20 bg-gray-100 mt-32">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6 text-gray-800 mb-18">Our Offerings</h2>

            <div class="flex flex-wrap justify-center">
                <div class="w-full lg:w-2/3">
                    <p class="text-3xl text-gray-600">
                        Welcome to My Blog, where we curate and create content to inspire, inform, and
                        entertain our readers.
                        Explore our diverse offerings designed to cater to your interests and keep you engaged. Whether
                        you're
                        looking for insightful articles, in-depth guides, or entertaining stories, we have something for
                        everyone.
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap justify-around mt-10">
                <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                    <img src="https://static.wixstatic.com/media/a77aa0_fbf77ed41e3d4806b41d0ad9c9d0b849~mv2.png/v1/fill/w_1000,h_571,al_c,q_90,usm_0.66_1.00_0.01/a77aa0_fbf77ed41e3d4806b41d0ad9c9d0b849~mv2.png"
                        alt="Offering 1" class="w-full h-auto rounded-md shadow-lg">
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                    <img src="https://i0.wp.com/www.shoutmeloud.com/wp-content/uploads/2020/12/Your-First-Blog-Post.jpg?resize=1024%2C576&ssl=1"
                        alt="Offering 2" class="w-full h-auto rounded-md shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <?php include("app/include/footer.php"); ?>

</body>

</html>
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

    <section class="container mt-52">
        <div class="justify-center flex-1 w-full px-4 py-4 mx-auto lg:py-6 md:px-6">
            <div class="flex flex-wrap items-center ">
                <div class="max-w-7xl px-4 mb-10 xl:w-1/2 lg:mb-8">
                    <div class="flex flex-wrap">
                        <div class="w-full px-4 md:w-1/2">
                            <img src="https://pilbox.themuse.com/image.jpg?filter=antialias&h=385&opt=1&pos=top-left&prog=1&q=keep&url=https%3A%2F%2Fcms-assets.themuse.com%2Fmedia%2Flead%2F01212022-1047259374-coding-classes_scanrail.jpg&w=700"
                                alt="" class="object-cover w-full mb-6 rounded-lg h-80">
                            <img src="https://media.istockphoto.com/id/98001557/photo/code.jpg?s=612x612&w=0&k=20&c=xbtFNdFC1HWlEmcz5HGJwnIVLw68zjVD3YwpNSaTFeA="
                                alt="" class="object-cover w-full rounded-lg h-80">
                        </div>
                        <div class="w-full px-4 md:w-1/2 xl:mt-11">
                            <img src="https://previews.123rf.com/images/yurich84/yurich841803/yurich84180300138/98798800-lines-of-php-code-on-the-monitor-dark-blue-background-macro.jpg"
                                alt="" class="object-cover w-96 mb-6 rounded-lg h-80">
                            <img src="https://cdn.pixabay.com/photo/2015/12/04/14/05/code-1076536_640.jpg" alt=""
                                class="object-cover w-full rounded-lg h-80">
                        </div>
                    </div>
                </div>
                <div class="w-96 px-4 mb-10 xl:w-1/2 lg:mb-8">
                    <h2 class="mt-2 mb-4 text-4xl font-bold text-5xl text-gray-700 dark:text-gray-300">
                        We are providing a better facility
                    </h2>
                    <p class="mb-4 text-base leading-7 text-3xl text-gray-500 dark:text-gray-400">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam
                    </p>
                    <ul class="mb-10 ">
                        <li class="flex items-center mb-4 text-base text-3xl text-gray-600 dark:text-gray-400 mt-10">
                            <span class="mr-3 text-blue-500 dark:text-blue-400 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="w-8 h-8 bi bi-1-circle-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z" />
                                </svg>
                            </span>
                            Lorem ipsum, or lipsum known, is dummy text used
                        </li>
                        <li class="flex items-center mb-4 text-base text-3xl text-gray-600 dark:text-gray-400 mt-6">
                            <span class="mr-3 text-blue-500 dark:text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="w-8 h-8  bi bi-2-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z" />
                                </svg>
                            </span>
                            The purpose of lorem create a natural looking block of text
                        </li>
                        <li class="flex items-center mb-4 text-base text-3xl text-gray-600 dark:text-gray-400 mt-6">
                            <span class="mr-3 text-blue-500 dark:text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="w-8 h-8  bi bi-3-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z" />
                                </svg>
                            </span>
                            The passage experienced in popularity during the 1960s
                        </li>
                        <li class="flex items-center mb-4 text-base text-3xl text-gray-600 dark:text-gray-400 mt-6">
                            <span class="mr-3 text-blue-500 dark:text-blue-400 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="w-8 h-8  bi bi-4-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM7.519 5.057c-.886 1.418-1.772 2.838-2.542 4.265v1.12H8.85V12h1.26v-1.559h1.007V9.334H10.11V4.002H8.176c-.218.352-.438.703-.657 1.055ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z" />
                                </svg>
                            </span>
                            esktop publishers bundled the text with their software.
                        </li>
                    </ul>
                    <a href="#"
                        class="px-8 py-4 text-gray-100 bg-blue-900 rounded-md dark:bg-blue-400 dark:hover:bg-blue-500 hover:bg-blue-600">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php include("app/include/footer.php"); ?>

    <!-- Tailwind CSS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>

</body>

</html>
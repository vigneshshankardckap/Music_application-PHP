<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Music</title>
    <style>
        .username{
          color:white;
          margin-right:40px ;
        }
        .bg-gray-800{
            background:#1c8c54;

        }
        .log{
            height:30px;
            width:70px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>



<body>
    
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                           <img class="log" src="music.jpeg" alt="">
                               
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
<!--                                homepage form-->


                                <a href="/"
                                    class="<?=url('/')?'bg-gray-900 text-white':'text-gray-300'?> rounded-md px-3 py-2 text-sm font-medium"
                                    aria-current="page">HomePage</a>

<!--                                /** adding music form*/-->
                                <form action="/addmusic" method="post" enctype="multipart/form-data">
                                    <button type="submit"
                                       class="<?=url('/team')?'bg-gray-900 text-white':'text-gray-300'?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Add Music</button>
                                </form>

                                <!--  /** adding artist form*/-->
                                <form action="/addartist" method="post" enctype="multipart/form-data">
                                    <button type="submit"
                                            class="<?=url('/team')?'bg-gray-900 text-white':'text-gray-300'?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Add artist</button>
                                </form>
                               
                            </div>
                        </div>
                    </div>
                    
                   
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">


                            <!-- Log in -->
                            <?php if (isset($_SESSION['name'])) :?>
                            <p class="username"> <span>Hello,</span><?php echo $_SESSION['name']?></p>
                                <form action="/logout" method="post" enctype="multipart/form-data">
                                <button type="submit" class="btn btn-warning">login</button>
                                </form>

                            <?php else : ?>

                                <div class="relative ml-3">
                                <div>
                                    <form action="/login" method="post" enctype="multipart/form-data">
                                    <button type="submit" class="btn btn-warning">login</button>
                                    </form>

                                </div>

                            </div>
                            <?php endif; ?>

                        </div>

                    </div>

                </div>

        </nav>
        <main>
        </main>
    </div>


</body>

</html>

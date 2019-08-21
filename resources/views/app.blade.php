<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>11spaLaracast</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body class="font-sans"> 

        <div id="app">
            
            <header class="section py-6 mb-8" style="background: url('/img/splash.svg') 0 15px no-repeat;" >
                <h1>  
                    <router-link to="/">
                        <img alt="Laracasts" src="/img/logo.svg">
                    </router-link>
                </h1>
            </header>

            <div class="section pb-10">
                <div class="container ">

                    <main class="flex">
                        <aside class="w-64 pt-8 flex-no-shrink">

                            <div class="mb-10">
                                <h5 class="uppercase font-bold mb-5 text-base">The Brand</h5>
                                <ul class="list-reset">
                                    <li class="text-sm leading-loose"> <router-link class="text-black"  to="/" exact>Logo</router-link>   </li>
                                    <li class="text-sm leading-loose"> <router-link class="text-black"  to="/logo-symbol">Logo Simbol</router-link> </li>
                                    <li class="text-sm leading-loose"> <router-link class="text-black"  to="/colors">Colors</router-link> </li>
                                    <li class="text-sm leading-loose"> <router-link class="text-black"  to="/tipography">Typography</router-link> </li>
                                </ul>    
                            </div>

                           <div class="mb-10">
                                <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>
                                <ul class="list-reset">
                                    <li class="text-sm leading-loose"> <router-link class="text-black"  to="/mascot">Mascot</router-link>   </li>
                                    <li class="text-sm leading-loose"> <router-link class="text-black"  to="/illustrations">Illustrations</router-link> </li>
                                    <li class="text-sm leading-loose"> <router-link class="text-black"  to="/loaders-and-animations">Loaders and Animations</router-link> </li>
                                    <li class="text-sm leading-loose"> <router-link class="text-black"  to="/wallpapers">Wallpapers</router-link> </li>
                                </ul>    
                            </div>
                            <div class="mb-10">
                                <h5 class="uppercase font-bold mb-5 text-base">Stats</h5>
                                <ul class="list-reset">
                                    <li class="text-sm leading-loose"> <router-link class="text-black"  to="/site-stats">Site Stats</router-link>   </li>
                                </ul>    
                            </div>
                            <div class="mb-10">
                                <h5 class="uppercase font-bold mb-5 text-base">About</h5>
                                <ul class="list-reset">
                                    <li class="text-sm leading-loose"> <router-link class="text-black"  to="/your-achievements">Your Achievements</router-link>   </li>
                                </ul>    
                            </div>
                        </aside>
                        <div class="primary flex-1">
                            <router-view></router-view>                        
                        </div>
                    </main>

                </div>
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
















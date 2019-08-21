<template>
<div>
    <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">
        Full Logo
    </h1>
    <div class="mb-12">
    	<picture 
    		style="height: 382px;" 
    		class="block shadow rounded-lg flex items-center justify-center mb-6">
    		<img src="/img/logo.svg" alt="logo">
    	</picture>
    	<div class="flex justify-between items-center  ">
    		<p>
	    		 Original Logo on <strong>white</strong> background
	    	</p>
	    	<a 
	    		href="/img/logo.svg" 
	    		class="border border-grey-light px-8 py-2 rounded-full text-black font-bold text-xs">
	    		logo.svg
	    	</a>
    	</div>
    </div>
    <div class="mb-12">
    	<picture 
    		style="height: 382px;" 
    		class="block shadow rounded-lg flex items-center justify-center mb-6 bg-blue">
    		<img src="/img/negative-logo.svg" alt="logo">
    	</picture>
    	<div class="flex justify-between items-center  ">
    		<p>
	    		 Negative Logo on <strong>white</strong> background
	    	</p>
	    	<a 
	    		href="/img/negative-logo.svg" 
	    		class="border border-grey-light px-8 py-2 rounded-full text-black font-bold text-xs">
	    		logo.svg
	    	</a>
    	</div>
    </div>
     
    <div class="mb-12">
        <picture
            style="height: 382px;"
            class="block shadow rounded-lg flex items-center justify-center mb-6 bg-black">
            <img src="/img/pure-negative-logo.svg" alt="logo" />
        </picture>

        <div class="flex justify-between items-center">
            <p>Pure negative logo on <strong>dark</strong> background</p>

            <a href="/img/pure-negative-logo.svg" class="button">
                pure-negative-logo.svg
            </a>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<template>
<div>
    <h1 class="font-normal text-3xl text-grey-darkest leading-none">
        Laracasts Stats
    </h1>
    <ul>
    	<li>
    		<strong>Total Series:</strong> {{ series }}
    	</li>
    	<li>
    		<strong>Total Lessons:</strong> {{ lessons }}
    	</li>
    </ul>
</div>
</template>

<script>
    export default {
        data(){
        	return {
        		series: 100,
        		lessons: 12 
        	} 
        },
        created(){  
             
        }
    }
</script>

<template>
<div>
    <h1 class="font-normal text-3xl text-grey-darkest leading-none">
        Your Achievements
    </h1>
    <ul>
    	<li v-for="achievement in achievements" v-text="achievement.name">
    		
    	</li>
    </ul>
</div>
</template>

<script>
    export default {
        data(){
        	return { 
        		achievements: [] 
        	};
        },
        created(){
        	axios.get('http://laracasts.test/api/achievements')
        	.then(res => {
        	    this.achievements = res.data;
        	});
        }
    }
</script>

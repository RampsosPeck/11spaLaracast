<template>
<div>
    <h1 class="font-normal text-3xl text-grey-darkest leading-none">
        Your Achievements
    </h1>
    <ul>
    	<li v-for="achievement in achievements" v-text="achievement.plot" class="text-sm leading-loose">
    		 
    	</li>
    </ul>
</div>
</template>

<script>
    export default {
        data(){
        	return {   
                achievements: [
                    {   
                        plot: "¡Estrellé mi auto hoy!",
                        writer: "Alex",
                        votos: 60
                    },
                    {   
                        plot: "¡Ayer, alguien se robó mi bolso!",
                        writer: "Jhon",
                        votos: 25
                    },
                    {   
                        plot: "¡Alguien se comió mi chocolate...!",
                        writer: "Alex",
                        votos: 35
                    },
                    {   
                        plot: "¡Ayer, me comi una torta!",
                        writer: "Alex",
                        votos: 58
                    },
                    {   
                        plot: "¡Alguien se comió mi chocolate...!",
                        writer: "Jhon",
                        votos: 40
                    },
                    {   
                        plot: "¡Ayer, alguien se robó mi bolso!",
                        writer: "Alex",
                        votos: 58
                    }
                ]
        	}
        } 
    }
</script>

<template>

    <h1>Doces</h1>

    <div class="cards"> 
        <div>
            <TheCard/>
        </div>
        <div>
            <TheCard/>
        </div>
        <div>
            <TheCard/>
        </div>
        <div>
            <TheCard/>
        </div>
    </div>
    

</template>

<script>
import TheCard from "./TheCard.vue";
 
export default {
    components: {
        TheCard,
    }
}

</script>

<style>
    .cards {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: -80px;
        justify-items: center;
        padding: 10px;
    }
</style>
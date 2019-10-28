<template>
    <div class="container">
        <input type="text" name="" id="" v-model="fruit" @input="filterFruits">
        <div v-if="filteredFruits">
            <ul>
                <li v-for="filteredFruit in filteredFruits" v-bind:key="filteredFruit.id">{{filteredFruit}}</li>
            </ul>
        </div>
   </div>
   
</template>

<script>
export default {
    data:function(){
        return{
            fruit:'',
            fruits:[
                'semangka','jeruk','alpokat','kelengkeng'
            ],
            filteredFruits:[]
        }
    },
    methods:{
        filterFruits(){
            this.filteredFruits = this.fruits.filter(fruit=>{
                return fruit.toLowerCase().startsWith(this.fruit.toLowerCase());
                });
        }
    }
}
</script>
<template>
    <div class="font-sans">
        <div class="flex justify-center items-center w-full">
        <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Edit Todo</h1>
            <form @submit.prevent="updateItem">
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">Name</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="name" v-model="item.name">
                </div>

                <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Save</button>
            </form>
        </div>
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return{item:{}}
              },
        created(){
            this.axios.get(`/api/items/${this.$route.params.id}`).then((res)=> 
                    {this.item = res.data;});
                 },
        methods:{
            updateItem(){
                this.axios.patch(`/api/items/${this.$route.params.id}`, this.item).then((res)=> 
                {this.$router.push({name: 'items'});});
                           }
                 }
                } 
</script>
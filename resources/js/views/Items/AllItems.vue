<template>
<div>
    <div class="p-8 flex justify-center items-center w-full">
        <table class="min-w-full border-collapse block md:table">
            <thead class="block md:table-header-group">
               <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">ID</th>
                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Name</th>
                    <!--<th>Actions</th>-->
                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Actions</th>
                </tr>
                
            </thead>
            <tbody class="block md:table-row-group">
                <tr class="bg-white border border-grey-500 md:border-none block md:table-row" v-for="item in items" :key = "item.id">
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">ID</span>{{item.id}}</td>
				    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>{{item.name}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded"><router-link :to="{name: 'edit', params: {id: item.id}}">Edit </router-link></button>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded" @click="deleteItem(item.id)">Delete</button>
                    </td>
                    
                </tr>
            </tbody>
        </table>
    </div>
</div>
</template>

<script>
    export default{
       data(){
          return{items:[]}
        },
       created(){
            this.axios.get('/api/items/').then(response => {
                this.items = response.data;
                console.log(this.items);
             });
        },
       methods:{
           deleteItem(id){
                this.axios.delete('/api/items/'+ id).then(response =>{
                    let i=this.items.map(data=>data.id).indexOf(id);
                    this.items.splice(i, 1)
                });
            }
        }
    } 
</script>
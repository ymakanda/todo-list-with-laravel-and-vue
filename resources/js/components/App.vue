<template>
    <div>
      <div class="w-1/2 mx-auto mt-4  rounded">
        <!-- Tabs -->
        <ul id="tabs" class="inline-flex w-full px-1 pt-2 ">
            <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-400 rounded-t opacity-50">
                <router-link to="/items" class="nav-item nav-link" >Todo List</router-link>
            </li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50">
                <router-link to= "/create" class="nav-item nav-link" >Create Todo</router-link>
            </li>
        </ul>
      </div>
    <router-view/>
    </div>
</template>
<script>export default{}</script>


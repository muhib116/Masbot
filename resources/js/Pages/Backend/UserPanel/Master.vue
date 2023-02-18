<template>
    <div class="h-[50px] bg-sky-100">
        <Navigation class="h-full px-5" />
    </div>
    <div class="bg-sky-100 flex gap-4 wrapper">
        <div class="bg-white width-270px h-full">
            <LeftSidebar />
        </div>
        <div class="bg-white h-full w-full p-5">
            <slot></slot>
        </div>
    </div>
</template>

<script setup>
import LeftSidebar from '@/Components/Backend/UserPanel/LeftSidebar/LeftSidebar.vue';
import Navigation from '@/Components/Backend/UserPanel/Navigation/Navigation.vue';


</script>

<style scoped>
    .wrapper{
        height: calc(100vh - 50px);
    }
    .width-270px{
        width: 270px;
    }
</style>
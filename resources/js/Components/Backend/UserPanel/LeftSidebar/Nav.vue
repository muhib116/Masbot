<template>
    <nav class="h-full w-16 bg-black flex-shrink-0 p-3 flex flex-col gap-3">
        <NavItem text="Dashboard">
            <DashboardIcon />
        </NavItem>
        <NavItem text="Livechat">
            <LiveChatIcon />
        </NavItem>
        <NavItem text="text" />
        <NavItem text="text" />
        <NavItem text="text" />
        <NavItem text="text" />
        <NavItem text="text" />
    </nav>
</template>

<script setup>
import NavItem from './NavItem.vue';
import DashboardIcon from '@/Icons/DashboardIcon.vue'
import LiveChatIcon from '@/Icons/LiveChatIcon.vue';

</script>

<style lang="scss" scoped>

</style>
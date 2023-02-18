<template>
    <nav class="h-full w-20 bg-black flex-shrink-0 flex flex-col justify-between gap-20 p-2 overflow-y-auto">
        <div class="flex flex-col gap-3">
            <NavItem text="Dashboard">
                <DashboardIcon />
            </NavItem>
            <NavItem text="Livechat">
                <LiveChatIcon />
            </NavItem>
            <NavItem text="Tickets">
                <TicketsIcon/>
            </NavItem>
            <NavItem text="Reports">
                <ReportsIcon/>
            </NavItem>
            <NavItem text="Automation">
                <AutomationIcon/>
            </NavItem>
            <NavItem text="Integrations">
                <IntegrationsIcon/>
            </NavItem>
            <NavItem text="Customization">
                <CustomizationIcon/>
            </NavItem>
            <NavItem text="Marketplace">
                <MarketplaceIcon/>
            </NavItem>
            <NavItem text="Setting">
                <SettingIcon/>
            </NavItem>
        </div>



        <div class="flex flex-col gap-3">
            <NavItem text="What’s new">
                <WhatsNewIcon/>
            </NavItem>
            <NavItem text="Info">
                <InfoIcon/>
            </NavItem>
        </div>
    </nav>
</template>

<script setup>
import NavItem from './NavItem.vue';
import DashboardIcon from '@/Icons/DashboardIcon.vue'
import LiveChatIcon from '@/Icons/LiveChatIcon.vue';
import TicketsIcon from '@/Icons/TicketsIcon.vue';
import ReportsIcon from '@/Icons/ReportsIcon.vue';
import AutomationIcon from '@/Icons/AutomationIcon.vue';
import IntegrationsIcon from '@/Icons/IntegrationsIcon.vue';
import CustomizationIcon from '@/Icons/CustomizationIcon.vue';
import MarketplaceIcon from '@/Icons/MarketplaceIcon.vue';
import SettingIcon from '@/Icons/SettingIcon.vue';
import WhatsNewIcon from '@/Icons/WhatsNewIcon.vue';
import InfoIcon from '@/Icons/InfoIcon.vue';

</script>

<style lang="scss" scoped>

</style>
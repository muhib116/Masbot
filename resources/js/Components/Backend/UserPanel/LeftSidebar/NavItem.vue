<template>
    <a class="w-full aspect-square text-white text-[7px] font-semibold flex items-center justify-center flex-col cursor-pointer gap-1 hover:bg-white/30 rounded transition-all p-1 block">
        <slot></slot>
        {{ text }}
    </a>
</template>

<script setup>
    defineProps({
        text: {
            type: String,
            default: ''
        }
    })
</script>

<style lang="scss" scoped>

</style>
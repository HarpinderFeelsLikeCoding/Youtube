<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '/resources/js/layouts/auth/NavLayout.vue';

defineProps({
    canLogin:Boolean,
    canRegister:Boolean,
    laravelVersion:String,
    phpVersion:String,
});

</script>

<template>
    <Head title="YouTube"/>
       <NavLayout>
            
       </NavLayout>
</template>

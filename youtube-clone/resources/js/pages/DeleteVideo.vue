//Video.vue
<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '@/layouts/NavLayout.vue';

//defineProps({
//    canLogin: Boolean,
//});
</script>

<template>
    <Head title="YouTube" />

    <NavLayout>
        <div class="max-w-2xl mx-auto p-4">
            <table class="min-w-full">
                <thead class="border-b">
                    <tr class="text-white flex justify-between">
                        <th scope="col" class="text-sm font-medium px-6 py-4 text-left">Videos</th>
                        <th scope="col" class="text-sm font-medium px-6 py-4 text-left">Options</th>
                    </tr>
                </thead>
            </table>
            <tbody>
                <tr class="border-b flex justify-between">
                    <td class="px-6 py-4 w-7/12 text-sm font-medium text-gray-900">
                        <video width="320" src="/videos/Mountains.mp4" type="video/mp4" controls></video>
                    </td>
                    <td class="px-6 py-4 w-5/12 text-sm font-medium text-gray-900 relative">
                        <div class="text-white font-extrabold mb-4">This is a title</div>
                    </td>
                </tr>
            </tbody>
        </div>
    </NavLayout>
</template>


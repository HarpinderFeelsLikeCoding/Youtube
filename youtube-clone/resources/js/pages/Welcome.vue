//Welcome.vue
<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '@/layouts/NavLayout.vue';
import VideoCard from '@/components/VideoCard.vue';

//defineProps({
//    canLogin: Boolean,
//});
</script>

<template>
    <Head title="YouTube" />
    <NavLayout>
            <div class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2">
                <VideoCard
                        title=" My Future Home"
                        user = 'Harpinder Singh'
                        views = '23k views - 3 days ago'
                        image = 'https://picsum.photos/id/230/100'
                        videoUrl= "/videos/Mountains.mp4" 
                        thumbnail= "/videos/thumbnails/Mountains.png" 
                />
            </div>
    </NavLayout>
</template>


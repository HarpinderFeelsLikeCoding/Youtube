//Video.vue
<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '@/layouts/NavLayout.vue';
import CheckCircle from 'vue-material-design-icons/CheckCircle.vue';
import ThumbUpOutline from 'vue-material-design-icons/ThumbUpOutline.vue';
import ThumbDownOutline from 'vue-material-design-icons/ThumbDownOutline.vue';
import RecommendedVideos from '@/components/RecommendedVideos.vue';

defineProps({
    video: Object,
    comments: Array,
    recommendedVideos: Array
});
</script>

<template>
    <Head title="YouTube" />

    <NavLayout>
        <div class="xl:flex">
            <div class="p-3">
                <video :src="video.video ||''" controls autoplay/>
                <div class ='text-white text-2xl font-extrabold mt-4'>{{ video.title }}</div>
                <div class =' flex items-center mb-4'>
                        <img
                            class="rounded-full m-1.5 mt-2 flex items-baseline w-8 h-8"
                            :src="`https://picsum.photos/id/${(Math.random() * 100).toFixed(0)}/100` ||'' "
                        />

                    <div class ='pl-2 mt-1'>
                        <div class="text-white text-lg font-extrabold flex items-center">
                            {{ video.user }} <CheckCircle fillcolor="#888888" :size="17"/>
                        </div>
                        <div class ='text-sm text-gray-400 font-extrabold'>{{ video.views }}</div>
                    </div>
                </div>
                <div class='bg-[#3F3F3F] rounded-lg w-full p-3 text-white'>
                    <div class='text-white text-lg font-extrabold'>{{ video.views }}</div>
                    <div class ='text-sm font-extrabold mb-6'>
                        Me when my kangaroo doesnt want tot take a bath with me
                    </div>
                    <div class ='text-sm font-extrabold'>
                        Me when my kangaroo doesnt want tot take a bath with me and that really makes me sad bc i always want tot bath with her.
                    </div>
                </div>

                <div class="'mt-6'">
                    <div class="text-white text-lg font-extrabold">{{ comments.length }}</div>
                    <div v-for="comment in comments" :key="comment">
                        <div class="flex items-flex mb-4 mt-2">
                        <img
                            class="rounded-full mt-2 w-12 h-12"
                            :src="`https://picsum.photos/id/${(Math.random() * 100).toFixed(0)}/100` ||'' "
                        />
                        <div class="pl-6 mt-1">
                            <div class="text-white font-extrabold flex items-baseline">
                                <div>{{ comment.user }}</div>
                                <div class ='text-gray-400 pl-3'>
                                    {{ comment.time }}
                                </div>
                            </div>
                            <div class="text-gray-200 text-sm font-semigold">
                                {{ comment.text }}
                            </div>
                            <div class="mt-4 flex items-center">
                                <ThumbUpOutline fillColor="#FFFFFF" :size="20" class="pr-2"/>
                                <div class="text-gray-400 text-sm font-extrabold pr-10">
                                    {{ (Math.random() * 100).toFixed(0) }}
                                </div>
                                <ThumbDownOutline fillColor="#FFFFFF" :size="20" class="pr-2"/>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="w-[500px] p-3 sm:block hidden">
                <div class="flex mb-3">
                    <RecommendedVideos 
                        :vid="{
                            title: 'A cool video',
                            video: '/videos/Mountains.mp4',
                            thumbnail: '/videos/thumbnails/Mountains.png',
                            user: 'Harpinder Singh',
                            views: '23k views - 3 days ago',
                        }"
                    />
                </div>
            </div>
        </div>
    </NavLayout>

</template>


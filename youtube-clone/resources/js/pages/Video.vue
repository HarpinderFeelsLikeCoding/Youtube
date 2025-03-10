//Video.vue
<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '@/layouts/NavLayout.vue';
import CheckCircle from 'vue-material-design-icons/CheckCircle.vue';
import ThumbUpOutline from 'vue-material-design-icons/ThumbUpOutline.vue';
import ThumbDownOutline from 'vue-material-design-icons/ThumbDownOutline.vue';


//defineProps({
//    canLogin: Boolean,
//});
</script>

<template>
    <Head title="YouTube" />

    <NavLayout>
        <div class="xl:flex">
            <div class="p-3">
                <video src="/videos/Mountains.mp4" controls autoplay/>
                <div class ='text-white text-2xl font-extrabold mt-4'>A cool video</div>
                <div class =' flex items-center mb-4'>
                        <img
                            class="rounded-full m-1.5 mt-2 flex items-baseline w-8 h-8"
                            :src="`https://picsum.photos/id/${(Math.random() * 100).toFixed(0)}/100` ||'' "
                        />

                    <div class ='pl-2 mt-1'>
                        <div class="text-white text-lg font-extrabold flex items-center">
                            Harpinder Singh <CheckCircle fillcolor="#888888" :size="17"/>
                        </div>
                        <div class ='text-sm text-gray-400 font-extrabold'>1k views - 3 days ago</div>
                    </div>
                </div>
                <div class='bg-[#3F3F3F] rounded-lg w-full p-3 text-white'>
                    <div class='text-white text-lg font-extrabold'>70K Views in 2 Days? Bro fell off</div>
                    <div class ='text-sm font-extrabold mb-6'>
                        Me when my kangaroo doesnt want tot take a bath with me
                    </div>
                    <div class ='text-sm font-extrabold'>
                        Me when my kangaroo doesnt want tot take a bath with me
                    </div>
                </div>
            </div>
        </div>
    </NavLayout>
</template>


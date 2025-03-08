<template>
    <div class="relative">
        <div class="rounded-lg bg-black m-2"
        >

        </div>
    </div>
</template>

<script setup>
import { ref,defineProps, toRefs, watch, onMounted } from 'vue';


const props = defineProps({
    title: String,
    user:String,
    views:String,
    image:String,
    videoUrl:String,
    thumbnail:String
})

const { title, user, views, image, videoUrl, thumbnail } = toRefs(props);

let show = ref(false);
let showVideo = ref(false);
let video = ref(null);

watch(() => show.value, (show) => {
    if (show) {
        showVideo.value = true;
        video.value.play();
        return '';
    }

    showVideo.value = false;
    video.value.pause();
    video.value.currentTime = 0;

});
</script>

<style lang="scss" scoped>

</style>
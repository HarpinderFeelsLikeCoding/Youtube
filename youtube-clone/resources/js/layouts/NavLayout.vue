<script setup lang="ts">
import { ref } from 'vue';;
import { Link } from '@inertiajs/vue3';
import MenuIcon from 'vue-material-design-icons/Menu.vue';
import Magnify from 'vue-material-design-icons/Magnify.vue';
//line 21 absolute left-1/2 -translate-x-1/2 may not be needed yet
import SideNavItem from '@/components/ui/SideNavItem.vue';

</script>

<template>
    <div class = 'relative'>
        <div id='TopNav' class ='w-[100%] h-[60px] fixed bg-black z-20 flex items-center justify-between'>
            <div class ='flex items-center'>
                <button class = 'p-2 ml-3 rounded-full hover:bg-gray-800 inline-block cursor-pointer'>
                    <MenuIcon fillcolor="#FFFFFF":size ='26'/>
                </button>
                <div class ='mx-2'></div>
                <div class ='flex text-white items-center justify center mr-10 cursor-pointer'>
                    YOUTUBE
                </div>
            </div>
            <div class = 'w-[600px] md:block hidden absolute left-1/2 -translate-x-1/2'>
                <div class ='rounded-full flex items-center bg-[#222222]'>
                    <input
                    type="text"
                    class="
                    form-control
                    block
                    w-full
                    px-5
                    py-1.5
                    text-base
                    font-normal
                    text-gray-200
                    bg-black
                    placeholder-gray-400
                    bg-clip-padding
                    border
                    border-solid
                    border-l-gray-700
                    border-y-gray-700
                    rounded-l-full
                    transition
                    ease-in-out
                    m-0
                    border-transparent
                    focus:ring-0
                    "
                    placeholder="Search"
                    />
                    <Magnify class="mx-6" fillColor='#FFFFFF':size='23'/>
                </div>
            </div>
            <div>
                <img
                class = 'rounded-full mx-8'
                width="35"
                src="https://media.licdn.com/dms/image/v2/D4E03AQHFFSfMFoA2Tw/profile-displayphoto-shrink_200_200/B4EZTRj2UYHgAY-/0/1738682624749?e=1746662400&v=beta&t=2fy7ig6hrvvSQMVUiK6ze5XZU-p5XHfGqMzqr9lsb8o"
                />
            </div>
        </div>

        <div id='SideNav' class = 'h-[100%] fixed z-0 bg-black w-[240px]'>
            <ul class ='mt-[60px] w-full'>
                <SideNavItem/>
            </ul>
        </div>
        <div id='SideNavOverlay'>

        </div>
       
        <slot/>
    </div>
</template>

//NavLayout.vue
<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import MenuIcon from 'vue-material-design-icons/Menu.vue';
import Magnify from 'vue-material-design-icons/Magnify.vue';
import SideNavItem from '../components/ui/SideNavItem.vue';

let openSideNav = ref(true);

</script>

<template>
    <div class='relative'>
        <div id='TopNav' class='w-[100%] h-[60px] fixed bg-black z-20 flex items-center justify-between'>
            <div class ='flex items-center'>
                <button @click='openSideNav = !openSideNav' class='p-2 ml-3 rounded-full hover:bg-gray-800 inline-block cursor-pointer'>
                    <MenuIcon fillColor="#FFFFFF" :size ='26'/>
                </button>
                <div class ='mx-2'></div>
                <div class ='flex text-white items-center justify-center mr-10 cursor-pointer'>
                    YOUTUBE
                </div>
            </div>
            <div class='w-[600px] md:block hidden'>
                <div class='rounded-full flex items-center bg-[#222222]'>
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
                    <Magnify class="mx-6" fillColor='#FFFFFF' :size='23'/>
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

        <div 
            id='SideNav' 
            class = 'h-[100%] fixed z-0 bg-black'
            :class="[!openSideNav ? 'w-[70px]' : 'w-[240px]']"
        >
            <ul :class ="[!openSideNav ? 'p-2' : 'px-5 pb-2 pt-[7px]']" class ='mt-[60px] w-full'>
                <SideNavItem :openSideNav='openSideNav' iconString='Home' />
                <SideNavItem :openSideNav='openSideNav' iconString='Add Video' />
                <SideNavItem :openSideNav='openSideNav' iconString='Delete Video' />
                <div class="border-b border-b-gray-700 my-2.5"></div>
                <SideNavItem :openSideNav='openSideNav' iconString='Subscriptions' />
                <SideNavItem :openSideNav='openSideNav' iconString='Library' />
                <SideNavItem :openSideNav='openSideNav' iconString='Liked' />
                <SideNavItem :openSideNav='openSideNav' iconString='History' />
                <SideNavItem :openSideNav='openSideNav' iconString='Watch Later' />
                <div v-if ='openSideNav'>
                    <div class="border-b border-b-gray-700 my-2.5"></div>
                    <div class ='text-gray-400 text-[14px] text-extrabold'>
                        About Press Copyright
                        <div>Contact Us</div>
                        Creator Advertise Developers
                    </div>

                    <div class="border-b border-b-gray-700 my-2.5"></div>

                    <div class ='text-gray-400 text-[14px] text-extrabold'>
                        Term Privacy Policy & Safety
                        <div>How YouTube Works</div>
                        <span>Test new features</span>
                    </div>
                </div>
            </ul>
        </div>

        <div id='SideNavOverlay'>
            
        </div>

        <div 
            class ='w-[100%] h-[calc(100vh-60px)] absolute right-0 top-[60px]'
            :class = "{
                'w-[calc(100%-70px)]': !openSideNav,
                'w-[calc(100%-240px)]': openSideNav,
            }"
        >
            <slot/> 
        </div>
    </div>
</template>

<style>
    body {
        background-color: black;
    }
</style>
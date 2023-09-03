<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />


    <!-- Hero Section: Simple with Logo -->
    <div class="relative overflow-hidden bg-white dark:text-gray-100 dark:bg-gray-900">
        <!-- Logo -->
        <div class="absolute inset-x-0 bottom-0 text-gray-50 dark:text-gray-950/25">
            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150"><path d="M-0.84,34.03 C187.63,148.52 327.03,-4.44 499.72,40.95 L500.00,150.00 L0.00,150.00 Z"></path></svg>
        </div>
        <!-- END Logo -->

        <!-- Hero Content -->
        <div class="relative container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
            <div class="text-center">
                <a href="#" class="group inline-block mb-10 text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300">
                    <svg class="hi-outline hi-cube-transparent inline-block w-12 h-12 transition group-hover:scale-110 group-active:scale-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-2.25-1.313M21 7.5v2.25m0-2.25l-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3l2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75l2.25-1.313M12 21.75V19.5m0 2.25l-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25"/></svg>
                </a>
                <h1 class="text-4xl font-black text-black mb-4 dark:text-white">
                    Online Banking portal
                </h1>
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-center space-y-2 sm:space-y-0 sm:space-x-2 pt-10 pb-28">
                <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Dashboard</Link
                    >

                    <template v-else>
                        <Link
                            :href="route('login')"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                        >Log in</Link
                        >

                        <Link
                            v-if="canRegister"
                            :href="route('register')"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                        >Register</Link
                        >
                    </template>
                </div>

            </div>
            <div class="relative mx-5 lg:mx-32 -mb-5 sm:mb-0">
                <div class="absolute inset-0 rounded-xl -m-6 lg:-m-8 -rotate-2 bg-indigo-100 dark:bg-gray-800"></div>
                <div class="absolute inset-0 rounded-xl -m-6 lg:-m-8 rotate-1 bg-indigo-800 bg-opacity-75 shadow-inner dark:bg-indigo-900 dark:bg-opacity-75"></div>
                <img src="https://cdn.tailkit.com/media/placeholders/photo-m_HRfLhgABo-1280x800.jpg" class="relative rounded-lg mx-auto shadow-lg" alt="Hero Image">
            </div>
        </div>
        <!-- END Hero Content -->
    </div>
    <!-- END Hero Section: Simple with Logo -->


</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>

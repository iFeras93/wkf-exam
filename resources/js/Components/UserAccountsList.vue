<script>
export default {
    name: "UserAccountsList",
    props: {
        accounts: {
            type: Array,
            required: true,
        },
    },
}
</script>

<template>

<!--    {{ accounts }}-->

    <!-- Statistics: Bordered with Heading and Action -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-8">


        <div v-for="(account,index) in accounts" :key="index">

            <!-- Card -->
            <div class="flex flex-col rounded-lg border bg-white dark:text-gray-100 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between py-4 px-5 lg:px-6 w-full">
                    <h3 class="text-lg font-medium">
                        {{ account.currency }}
                    </h3>
                    <button type="button"
                            class="inline-flex items-center justify-center h-10 transition text-gray-600 hover:text-gray-950 active:text-gray-600 dark:text-gray-400 dark:hover:text-white dark:active:text-gray-400">
                        <svg class="hi-outline hi-ellipsis-vertical inline-block w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"/>
                        </svg>
                    </button>
                </div>
                <div class="pb-5 px-5 lg:pb-6 lg:px-6 grow w-full flex justify-between items-center">
                    <dl>
                        <dt class="text-2xl font-bold">
                            {{ account.balance }}
                        </dt>
                    </dl>
                </div>
            </div>
            <!-- END Card -->

        </div>



    </div>
    <!-- END Statistics: Bordered with Heading and Action -->


</template>

<style scoped>

</style>

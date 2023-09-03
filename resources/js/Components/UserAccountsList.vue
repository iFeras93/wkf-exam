<script>
export default {
    name: "UserAccountsList",
    props: {
        accounts: {
            type: Array,
            required: true,
        },
    },
    methods: {
        goToRoute(uri) {
            window.location.href = uri;
        }
    },
}
</script>

<template>

    <!--    {{ accounts }}-->

    <!-- Statistics: Bordered with Heading and Action -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-8">


        <div v-for="(account,index) in accounts" :key="index">

            <!-- Card -->
            <div
                class="flex flex-col rounded-lg border bg-white dark:text-gray-100 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between py-4 px-5 lg:px-6 w-full">
                    <h3 class="text-lg font-medium">
                        {{ account.currency }}
                    </h3>
                    <button type="button"
                            @click="goToRoute(`/transactions/${account.id}`)"
                            class="inline-flex items-center justify-center h-10 transition text-gray-600 hover:text-gray-950 active:text-gray-600 dark:text-gray-400 dark:hover:text-white dark:active:text-gray-400">

                        <svg class="hi-mini hi-eye inline-block w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z"/>
                            <path fill-rule="evenodd"
                                  d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>
                </div>
                <div class="pb-5 px-5 lg:pb-6 lg:px-6 grow w-full flex justify-between items-center">
                    <dl>
                        <dt class="text-2xl font-bold">
                            {{ account.balance }}
                        </dt>
                    </dl>

                    <!-- Button (extra small) -->
                    <a :href="route('ShowMakeTransaction',[account.id])" type="button"
                       class="mb-3 inline-flex justify-center items-center space-x-2 border font-semibold rounded-lg px-2 py-1 leading-5 text-sm border-indigo-700 bg-indigo-700 text-white hover:text-white hover:bg-indigo-600 hover:border-indigo-600 focus:ring focus:ring-indigo-400 focus:ring-opacity-50 active:bg-indigo-700 active:border-indigo-700 dark:focus:ring-indigo-400 dark:focus:ring-opacity-90">
                        Make Transaction
                    </a>
                </div>
            </div>
            <!-- END Card -->

        </div>


    </div>
    <!-- END Statistics: Bordered with Heading and Action -->


</template>

<style scoped>

</style>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, router} from '@inertiajs/vue3';
import UserAccountsList from "@/Components/UserAccountsList.vue";
import {reactive} from "vue";

defineProps([
    'account_id',
]);


console.log(router)
const form = reactive({
    type: "credit",
    amount: null,
    account_id: router.page.props.account_id,
})

function submit() {
    router.post('/make-transactions', form)
}


// form.id_account= account_id;

</script>

<template>
    <Head title="Transactions List"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Transactions</h2>


        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <!-- Form Layouts: Multiple Cards -->
                <div class="space-y-4 lg:space-y-8 dark:text-gray-100">
                    <!-- User Profile -->
                    <div
                        class="flex flex-col rounded-lg shadow-sm bg-white overflow-hidden dark:text-gray-100 dark:bg-gray-800">
                        <!-- Header -->
                        <div class="py-4 px-5 bg-gray-50 dark:bg-gray-700/50">
                            <h3 class="flex items-center space-x-2">
                                <svg class="hi-mini hi-user-circle inline-block w-5 h-5 text-indigo-500"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span>Make Transaction</span>
                            </h3>
                        </div>
                        <!-- END Header -->

                        <!-- Body -->
                        <div class="p-5 grow md:flex md:space-x-5">
                            <p class="md:flex-none md:w-1/3 text-gray-500 text-sm mb-5 dark:text-gray-400">
                            </p>
                            <form class="space-y-6 md:w-1/2" method="post" @submit.prevent="submit">

                                <input type="hidden" name="account_id" v-model="form.account_id">
                                <div class="space-y-1">
                                    <!-- Select Box -->
                                    <div class="space-y-1">
                                        <label for="username" class="font-medium">Type</label>
                                        <select v-model="form.type" id="select" name="type"
                                                class="w-full block border px-3 py-2 leading-6 rounded-lg border-gray-200 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:focus:border-indigo-500">
                                            <option value="debit">Debit</option>
                                            <option value="credit">Credit</option>
                                        </select>
                                    </div>
                                    <!-- END Select Box -->

                                </div>
                                <div class="space-y-1">
                                    <label for="name" class="font-medium">Amount</label>
                                    <input v-model="form.amount" type="number" id="amount" name="amount"
                                           placeholder="0.00"
                                           class="w-full block border placeholder-gray-500 px-3 py-2 leading-6 rounded-lg border-gray-200 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:focus:border-indigo-500 dark:placeholder-gray-400">

                                    <!--                                    <div v-if="form.errors.amount">{{ form.errors.amount }}</div>-->

                                </div>
                                <button type="submit"
                                        class="inline-flex justify-center items-center space-x-2 border font-semibold rounded-lg px-3 py-2 leading-5 text-sm border-indigo-700 bg-indigo-700 text-white hover:text-white hover:bg-indigo-600 hover:border-indigo-600 focus:ring focus:ring-indigo-400 focus:ring-opacity-50 active:bg-indigo-700 active:border-indigo-700 dark:focus:ring-indigo-400 dark:focus:ring-opacity-90">
                                    Make Transaction
                                </button>
                            </form>
                        </div>
                        <!-- END Body -->
                    </div>
                    <!-- END User Profile -->

                </div>
                <!-- END Form Layouts: Multiple Cards -->


            </div>
        </div>
    </AuthenticatedLayout>
</template>

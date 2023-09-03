<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import UserAccountsList from "@/Components/UserAccountsList.vue";

defineProps([
    'transactions',
]);
</script>

<template>
    <Head title="Transactions List" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Transactions</h2>



        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">

                <!-- Tables: Bordered -->
                <!-- Responsive Table Container -->
                <div class="border border-gray-200 rounded overflow-x-auto min-w-full bg-white dark:bg-gray-800 dark:border-gray-700">
                    <!-- Table -->
                    <table class="min-w-full text-sm align-middle whitespace-nowrap">
                        <!-- Table Header -->
                        <thead>
                        <tr class="border-b border-gray-100 dark:border-gray-700/50">
                            <th class="px-3 py-4 text-gray-900 bg-gray-100/75 font-semibold text-center dark:text-gray-50 dark:bg-gray-700/25">
                                #
                            </th>
                            <th class="px-3 py-4 text-gray-900 bg-gray-100/75 font-semibold text-left dark:text-gray-50 dark:bg-gray-700/25">
                                Amount
                            </th>
                            <th class="px-3 py-4 text-gray-900 bg-gray-100/75 font-semibold text-left dark:text-gray-50 dark:bg-gray-700/25">
                                Type
                            </th>
                        </tr>
                        </thead>
                        <!-- END Table Header -->

                        <!-- Table Body -->
                        <tbody>

                        <tr class="border-b border-gray-100 dark:border-gray-700/50" v-for="(trans, index) in transactions" :key="index">
                            <td class="p-3 text-gray-500 dark:text-gray-400 text-center">
                                {{ trans.id}}
                            </td>
                            <td class="p-3">
                                <div class="text-center font-semibold inline-flex px-2 py-1 leading-4 text-xs rounded-full text-emerald-900 border border-transparent bg-emerald-100 dark:font-medium dark:text-emerald-200 dark:border-emerald-900 dark:bg-emerald-700 dark:bg-opacity-10">
                                    {{ trans.type}}
                                </div>
                            </td>
                            <td class="p-3 text-gray-500 dark:text-gray-400 text-center">
                                {{ trans.amount}}
                            </td>
                        </tr>

                        </tbody>
                        <!-- END Table Body -->
                    </table>
                    <!-- END Table -->
                </div>
                <!-- END Responsive Table Container -->
                <!-- END Tables: Bordered -->

            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import UserAccountsList from "@/Components/UserAccountsList.vue";

defineProps([
    'currentUser',
    'accounts'
]);
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>



        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <user-accounts-list :accounts="accounts"/>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

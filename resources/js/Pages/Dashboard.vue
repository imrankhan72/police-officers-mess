<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
defineProps({
    bookings:Array,
    payments:Array,

})

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Booking requests</h2>
        </template>

        <div class="bg-gray-50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h3 class="mt-8 mb-4 text-lg font-medium leading-6 text-gray-900 pt-8">Booking Requests</h3>
                <div class="overflow-hidden bg-white shadow sm:rounded-md">
                    <ul role="list" class="divide-y divide-gray-200">
                        <li v-for="booking in bookings">
                            <a :href="'/admin/bookings/'+booking.id" class="block hover:bg-gray-50">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="truncate text-sm font-medium text-indigo-600">{{booking.name}}</p>

                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p class="flex items-center text-sm text-gray-500">
                                                <!-- Heroicon name: mini/users -->
                                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M7 8a3 3 0 100-6 3 3 0 000 6zM14.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM1.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 017 18a9.953 9.953 0 01-5.385-1.572zM14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 00-1.588-3.755 4.502 4.502 0 015.874 2.636.818.818 0 01-.36.98A7.465 7.465 0 0114.5 16z" />
                                                </svg>
                                                {{booking.designation_id}}  ({{booking.service_status}})
                                            </p>
                                            <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                                <!-- Heroicon name: mini/map-pin -->
                                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" />
                                                </svg>
                                                {{booking.mobile}}
                                            </p>
                                        </div>
                                        <div class="flex flex-col space-y-1">
                                            <div class="text-sm font-semibold">
                                                <span v-if="booking.status === 0" class="text-orange-400">PENDING</span>
                                                <span v-if="booking.status === 1" class="text-green-400">APPROVED</span>
                                                <span v-if="booking.status === 2" class="text-red-400">REJECTED</span>

                                            </div>
                                            <div class="flex items-center text-sm text-gray-500 sm:mt-0">
                                                <!-- Heroicon name: mini/calendar -->
                                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
                                                </svg>
                                                <p>
                                                    Received on <time datetime="2020-01-07">{{booking.created_at}}</time>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

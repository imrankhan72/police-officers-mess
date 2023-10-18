<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import {CalendarDaysIcon } from '@heroicons/vue/20/solid'
defineProps({
    booking:Array
})
</script>

<template>
    <Head title="Booking Details" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Booking #{{booking.id}}</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  bg-white ">
                <div class="py-8">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-base font-semibold leading-7 text-gray-900">Booking Information</h3>
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and application.</p>
                    </div>
                    <div class="mt-6 border-t border-gray-100">
                        <dl class="divide-y divide-gray-100">
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Name</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{booking.name}}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Designation</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{booking.designation_id}} ({{booking.service_status}})</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Email address</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{booking.email}}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Mobile</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{booking.mobile}}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Booking for (Room Type)</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{booking.room_type}}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Booking for</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{booking.booking_for}} Self</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Message</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{booking.message}}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Booking Period</dt>
                                <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                    <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                                        <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                            <div class="flex w-0 flex-1 items-center">
                                                <CalendarDaysIcon class="h-5 w-5 flex-shrink-0 text-gray-400" aria-hidden="true" />
                                                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                    <span class="flex-shrink-0 text-gray-400">From</span>
                                                    <span class="truncate font-medium">{{booking.booking_from}}</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                            <div class="flex w-0 flex-1 items-center">
                                                <CalendarDaysIcon class="h-5 w-5 flex-shrink-0 text-gray-400" aria-hidden="true" />
                                                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                    <span class="flex-shrink-0 text-gray-400">Till</span>
                                                    <span class="truncate font-medium">{{booking.booking_till}}</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

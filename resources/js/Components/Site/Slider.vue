<script setup>
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
</script>

<template>
    <div class="container mx-auto bg-gray-100">
        <carousel :items-to-show="1" >
            <slide class="rounded-md">
                <img src="/assets/images/slide03.jpg" class="object-contain"/>
            </slide>

            <template #addons>
                <navigation />
                <pagination />
            </template>
        </carousel>
    </div>
</template>

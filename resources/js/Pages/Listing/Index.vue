<template>
  <Filters :filters="filters" />

  <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3">
    <Listing v-for="listing in listings.data" :key="listing.id" :listing="listing" />
  </div>

  <div v-if="listings.data.length" class="w-full flex justify-center mt-8 mb-4">
    <Pagination :links="listings.links" />
  </div>
</template>

<script setup>
import Filters from '@/Pages/Listing/Index/Components/Filters.vue'
import Listing from '@/Pages/Listing/Index/Components/Listing.vue'
import Pagination from '@/Components/UI/Pagination.vue'

defineProps({
  listings: Object,
  filters: Object,
})
</script>
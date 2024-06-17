<template>
  <header class="border-solid border-2 border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900">
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('listing.index')">Listings</Link>
        </div>
        <div class="text-xl text-indigo-600 dark:text-indigo-300">
          <Link :href="route('listing.index')">Laramove</Link>
        </div>
        <div v-if="$page.props.user" class="flex items-center gap-4">
          <div class="text-sm text-gray-500">{{ $page.props.user.name }}</div>
          <Link :href="route('listing.create')" class="btn-primary">+ New Listing</Link>
          <div>
            <Link :href="route('logout')" method="delete" as="button">Logout</Link>
          </div>
        </div>
        <div v-else class="flex items-center gap-2">
          <Link :href="route('user-account.create')">Register</Link>
          <Link :href="route('login')">Sign In</Link>
        </div>
      </nav>
    </div>
  </header>
  
  <main class="container mx-auto p-4 w-full">
    <div v-if="$page.props.flash.success" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
      {{ $page.props.flash.success }}
    </div>

    <slot />
  </main>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { route } from 'ziggy'
</script>
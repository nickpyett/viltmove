<template>
  <h1>Index</h1>
    
  <div>
    The message is "{{ message }}"
  </div>
</template>

<script setup>
defineProps({
  'message': String,
})
</script>

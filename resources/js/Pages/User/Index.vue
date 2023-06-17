<template>
  <Layout>

    <Head title="Welcome" />
    <div class="mt-3">
      <Link href="/create-user">
      <v-btn color="indigo-darken-3 text-none" class="mt-3">
        <b>Create New User
        </b>
      </v-btn>
      </Link>
    </div>
  </Layout>
</template>

<script setup>
import Layout from '../Layout/Layout.vue';
import { Head } from '@inertiajs/vue3';

// defineProps({ user: Object })
</script>
<template>
  <v-app id="inspire">
    <v-navigation-drawer v-model="drawer">
      <!--  -->
    </v-navigation-drawer>

    <!-- Top Header -->
    <v-app-bar>
      <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
      <v-spacer></v-spacer>
      <v-card density="comfortable" subtitle="Administrator" title="Dzulfikar" variant="text">
        <template v-slot:prepend>
          <v-avatar color="grey-darken-3" image="https://randomuser.me/api/portraits/men/17.jpg"></v-avatar>
        </template>
      </v-card>

      <v-menu min-width=" 200px" rounded>
        <template v-slot:activator="{ props }">
          <v-btn icon v-bind="props">
            <v-icon>mdi-dots-vertical</v-icon>
          </v-btn>
        </template>
        <v-card>
          <v-card-text>
            <div class="mx-auto text-center">
              <v-avatar color="brown">
                <span class="text-h5">D</span>
              </v-avatar>
              <h3>Dzulfikar S Akmal</h3>
              <p class="text-caption mt-1">
                dzulfikar@email.com
              </p>
              <v-divider class="my-3"></v-divider>
              <v-btn rounded variant="text" class="text-none" prepend-icon="$vuetify">
                Edit Account
              </v-btn>
              <v-divider class="my-3"></v-divider>
              <v-btn rounded variant="text" class="text-none">
                Disconnect
              </v-btn>
            </div>
          </v-card-text>
        </v-card>
      </v-menu>

    </v-app-bar>

    <v-main>
      <v-container>
        <h2>{{ headTitle }}</h2>
        <slot></slot>
      </v-container>
    </v-main>
  </v-app>
</template>

<script setup>
import { ref } from 'vue'
import { usePage } from '@inertiajs/vue3'

const drawer = ref(true)
const page = usePage()

// const toolbarTitle = computed(() => page.props.toolbarTitle);
const headTitle = page.props.toolbarTitle;
</script>

<!-- <script>
export default {
  data: () => ({
    drawer: false,
  }),
}
</script> -->

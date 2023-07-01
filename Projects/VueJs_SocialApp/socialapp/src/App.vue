<template>
  <div id="app">
    <SiteNav v-if="showNav"></SiteNav>
    <router-view/>
  </div>
</template>

<script>
import { mapState } from 'vuex'
import SiteNav from '@/components/SiteNav'

export default {
  components: {
    SiteNav
  },
  computed: {
    ...mapState(['userProfile']),
    showNav() {
      //return true if the user logged in as then the userprofile object in the state will have more than 1 key
      return Object.keys(this.userProfile).length > 1
    }
  }
}
</script>

<style lang="scss">

</style>


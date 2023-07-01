<template>
  <div>
    <p>Connection: {{status}}</p>
    <button @click="changeStatus">Change Status</button>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      status: 'Critical'
    }
  },
  methods: {
    changeStatus: function() {
      this.status = 'Normal';
    }
  }
}
</script>

<template>
  <div class="app-layout">
    <SideBar />
    <div class="main-content">
      <router-view />
    </div>
  </div>
</template>

<script setup>
import SideBar from './components/SideBar.vue'
</script>

<style>
.app-layout {
  display: flex;
}

.main-content {
  margin-left: 220px;
  padding: 2rem;
  flex: 1;
  transition: margin-left 0.3s ease;
}

.sidebar.collapsed ~ .main-content {
  margin-left: 60px;
}
</style>

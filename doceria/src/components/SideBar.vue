<template>
  <div class="sidebar" :class="{ collapsed: isCollapsed }">
    <button class="toggle-button" @click="isCollapsed = !isCollapsed">
      <i :class="isCollapsed ? 'pi pi-bars' : 'pi pi-times'"></i>
    </button>

    <div v-if="!isCollapsed" class="logo">🧁 Sweet Dream</div>

    <ul class="menu">
      <li>
        <router-link to="/" class="menu-item" exact-active-class="active">
          <i class="pi pi-home"></i>
          <span v-if="!isCollapsed">Início</span>
        </router-link>
      </li> 
      <li>
        <router-link to="/dashboard" class="menu-item" exact-active-class="active">
          <i class="pi pi-th-large"></i>
          <span v-if="!isCollapsed">Dashboard</span>
        </router-link>
      </li>
      <li>
        <router-link to="/produtos" class="menu-item" exact-active-class="active">
          <i class="pi pi-box"></i>
          <span v-if="!isCollapsed">Doces</span>
        </router-link>
      </li>
      <li>
        <router-link to="/pedidos" class="menu-item" exact-active-class="active">
          <i class="pi pi-user"></i>
          <span v-if="!isCollapsed">Pedidos</span>
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const isCollapsed = ref(false)
</script>

<style scoped>
.sidebar {
  width: 220px;
  height: 100vh;
  background-color: #f8f9fa;
  border-right: 1px solid #ddd;
  padding: 1rem;
  position: fixed;
  left: 0;
  top: 0;
  display: flex;
  flex-direction: column;
  transition: width 0.3s ease;
  z-index: 10;
}

.sidebar.collapsed {
  width: 60px;
}

.toggle-button {
  background: none;
  border: none;
  font-size: 1.2rem;
  margin-bottom: 1rem;
  align-self: flex-end;
  cursor: pointer;
}

.logo {
  font-weight: bold;
  font-size: 1.2rem;
  margin-bottom: 2rem;
}

.menu {
  list-style: none;
  padding: 0;
  margin: 0;
}

.menu-item {
  display: flex;
  align-items: center;
  padding: 0.75rem;
  text-decoration: none;
  color: #333;
  border-radius: 4px;
  transition: background 0.2s;
}

.menu-item:hover {
  background-color: #eaeaea;
}

.menu-item i {
  margin-right: 0.5rem;
}

.sidebar.collapsed .menu-item i {
  margin: auto;
}

.sidebar.collapsed .menu-item span {
  display: none;
}

.active {
  background-color: #d0e7ff;
  font-weight: bold;
}
</style>

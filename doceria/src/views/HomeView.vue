<template>
  <div class="p-4">
    <div class="surface-card p-5 shadow-2 border-round">
      <h1 class="text-3xl font-bold mb-3">Olá, Fulano 🧁</h1>
      <p class="mb-4 text-gray-700">
        Bem vindo(a) à nossa Doceira Sweet Dreams 
      </p>

      <Button 
        label="Acessar Produtos" 
        icon="pi pi-box" 
        class="p-button-primary"
        @click="goToProdutos"
      />
    </div>
  </div>
</template>

<script setup>
import { useRouter } from 'vue-router'
import Button from 'primevue/button'

const router = useRouter()

const goToProdutos = () => {
  router.push('/produtos')
}

</script>

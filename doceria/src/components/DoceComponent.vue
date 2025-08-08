<template>
   <div>
   <!-- Tabela -->
    <DataTable :value="produtos" class="p-datatable-sm">
      <Column field="id" header="ID"></Column>
      <Column field="nome" header="Nome"></Column>
      <Column field="preco" header="Preço">
        <template #body="slotProps">
          {{ formatarPreco(slotProps.data) }}
        </template>
      </Column>
      <Column field="disponivel" header="Disponível">
        <template #body="slotProps">
          {{ exibirDisponivel(slotProps.data) }}
        </template>
      </Column>
      <Column header="Ações">
        <template #body="slotProps">
          <div class="flex gap-2">
            <Button icon="pi pi-search" class="p-button-info p-button-sm" @click="() => detalhar(slotProps.data)" />
            <Button icon="pi pi-pencil" class="p-button-warning p-button-sm" @click="() => editar(slotProps.data)" />
            <Button icon="pi pi-trash" class="p-button-danger p-button-sm" @click="() => remover(slotProps.data.id)" />
            <ButtonCounter />
          </div>
        </template>
      </Column>
    </DataTable>

    <!-- Diálogo de detalhes -->
    <Dialog v-model:visible="dialogDetalhes" header="Detalhes do Produto" modal>
      <div v-if="produtoDetalhes">
        <p><strong>ID:</strong> {{ produtoDetalhes.id }}</p>
        <p><strong>Nome:</strong> {{ produtoDetalhes.nome }}</p>
        <p><strong>Preço:</strong> {{ formatarPreco(produtoDetalhes) }}</p>
        <p><strong>Disponível:</strong> {{ produtoDetalhes.disponivel ? 'Sim' : 'Não' }}</p>
      </div>
    </Dialog>
  </div>
</template>

<style>

button {
  background: #db7093
}

</style>

<script setup>
import produtoService from '../services/produtoService.js'
import DataTable from 'primevue/datatable'


const {
  produtos,
  editar,
  remover,
  detalhar,
  formatarPreco,
  exibirDisponivel,
} = produtoService
</script>
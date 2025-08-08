<template>
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
          </div>
        </template>
      </Column>
    </DataTable>
</template>

<style>
    button {
    background: #db7093
    }
</style>

<script>
    import produtoService from '../services/produtoService.js'
    import Button from 'primevue/button'
    import Column from 'primevue/Column'
    import DataTable from 'primevue/DataTable'

    defineProps({
        produto,
        produtos,
        detalhar,
        remover,
        editar,
        exibirDisponivel,
        formatarPreco,                                          
    }) 
</script>

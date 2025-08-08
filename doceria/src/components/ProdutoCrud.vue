<template>
  
  <div>
    <h2 class="text-2xl font-bold mb-4">Cadastrar Produto</h2>

    <!-- Formulário -->
    <div class="p-fluid grid gap-3 mb-6">
      <div class="col-12 md:col-4">
        <InputText v-model="produto.nome" placeholder="Nome do produto" />
      </div>
      <div class="col-12 md:col-4">
        <InputNumber v-model="produto.preco" placeholder="Preço" mode="currency" currency="BRL" locale="pt-BR" />
      </div>
      <div class="col-12 md:col-4 flex align-items-center">
        <Checkbox v-model="produto.disponivel" :binary="true" />
        <label class="ml-2">Disponível</label>
      </div>
      <div class="col-12">
        <Button label="Salvar" icon="pi pi-save" class="p-button-success w-full" @click="salvar" />
      </div>
    </div>

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
import InputText from 'primevue/inputtext'
import InputNumber from 'primevue/inputnumber'
import Checkbox from 'primevue/checkbox'
import Button from 'primevue/button'
import DataTable from 'primevue/datatable'
import Column from 'primevue/column'
import Dialog from 'primevue/dialog'

const {
  produtos,
  produto,
  dialogDetalhes,
  produtoDetalhes,
  salvar,
  editar,
  remover,
  detalhar,
  formatarPreco,
  exibirDisponivel,
} = produtoService
</script>

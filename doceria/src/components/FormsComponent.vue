<template>
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
</template>


<style>

button {
  background: #db7093
}

</style>


<script>
    import produtoService from '../services/produtoService.js'
    import Button from 'primevue/button'
    import InputNumber from 'primevue/inputNumber'
    import InputText from 'primevue/inputText'

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


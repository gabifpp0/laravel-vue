<template>
    <!-- Diálogo de detalhes -->
    <Dialog v-model:visible="dialogDetalhes" header="Detalhes do Produto" modal>
      <div v-if="produtoDetalhes">
        <p><strong>ID:</strong> {{ produtoDetalhes.id }}</p>
        <p><strong>Nome:</strong> {{ produtoDetalhes.nome }}</p>
        <p><strong>Preço:</strong> {{ formatarPreco(produtoDetalhes) }}</p>
        <p><strong>Disponível:</strong> {{ produtoDetalhes.disponivel ? 'Sim' : 'Não' }}</p>
      </div>
    </Dialog>
</template>

<style>

button {
  background: #db7093
}

</style>


<script>
    import produtoService from '../services/produtoService.js'
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

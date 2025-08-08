import { ref } from 'vue'
import Produto from '../models/Produto.js'

const produtos = ref([])
const produto = ref(new Produto())
const dialogDetalhes = ref(false)
const produtoDetalhes = ref(null)

const salvar = () => {
  if (produto.value.id) {
    const idx = produtos.value.findIndex(p => p.id === produto.value.id)
    if (idx !== -1) produtos.value[idx] = { ...produto.value }
  } else {
    produto.value.id = Date.now()
    produtos.value.push({ ...produto.value })
  }
  limpar()
}

const limpar = () => {
  produto.value = new Produto()
}

const editar = (p) => {
  produto.value = { ...p }
}

const remover = (id) => {
  produtos.value = produtos.value.filter(p => p.id !== id)
}

const detalhar = (p) => {
  produtoDetalhes.value = p
  dialogDetalhes.value = true
}

const formatarPreco = (row) => {
  return new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(row.preco ?? 0)
}

const exibirDisponivel = (row) => row.disponivel ? 'Sim' : 'Não'

export default {
  produtos,
  produto,
  dialogDetalhes,
  produtoDetalhes,
  salvar,
  limpar,
  editar,
  remover,
  detalhar,
  formatarPreco,
  exibirDisponivel,
}

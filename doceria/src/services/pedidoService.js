import { ref } from 'vue'
import Pedido from '../models/Pedido.js'

const pedidos = ref([])
const pedido = ref(new Pedido())
const dialogDetalhes = ref(false)
const produtoDetalhes = ref(null)

const salvar = () => {
  if (pedido.value.id) {
    const idx = pedidos.value.findIndex(p => p.id === pedido.value.id)
    if (idx !== -1) pedidos.value[idx] = { ...pedido.value }
  } else {
    pedido.value.id = Date.now()
    pedidos.value.push({ ...pedido.value })
  }
  limpar()
}

const limpar = () => {
  pedido.value = new Pedido()
}

const editar = (p) => {
  pedido.value = { ...p }
}

const remover = (id) => {
  pedidos.value = pedidos.value.filter(p => p.id !== id)
}

const detalhar = (p) => {
  pedidoDetalhes.value = p
  dialogDetalhes.value = true
}

const formatarPreco = (row) => {
  return new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(row.preco ?? 0)
}

const exibirDisponivel = (row) => row.disponivel ? 'Sim' : 'Não'

export default {
  pedidos,
  pedido,
  dialogDetalhes,
  pedidoDetalhes,
  salvar,
  limpar,
  editar,
  remover,
  detalhar,
  formatarPreco,
  exibirDisponivel,
}

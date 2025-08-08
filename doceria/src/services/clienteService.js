import { ref } from 'vue'
import Cliente from '../models/Cliente.js'

const clientes = ref([])
const cliente = ref(new Cliente())
const dialogDetalhes = ref(false)
const clienteDetalhes = ref(null)

const salvar = () => {
  if (cliente.value.id) {
    const idx = clientes.value.findIndex(p => p.id === cliente.value.id)
    if (idx !== -1) clientes.value[idx] = { ...cliente.value }
  } else {
    cliente.value.id = Date.now()
    clientes.value.push({ ...cliente.value })
  }
  limpar()
}

const limpar = () => {
  cliente.value = new Cliente()
}

const editar = (p) => {
  cliente.value = { ...p }
}

const remover = (id) => {
  clientes.value = clientes.value.filter(p => p.id !== id)
}

const detalhar = (p) => {
  clienteDetalhes.value = p
  dialogDetalhes.value = true
}

const formatarPreco = (row) => {
  return new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(row.preco ?? 0)
}

const exibirDisponivel = (row) => row.disponivel ? 'Sim' : 'Não'

export default {
  clientes,
  cliente,
  dialogDetalhes,
  clienteDetalhes,
  salvar,
  limpar,
  editar,
  remover,
  detalhar,
  formatarPreco,
  exibirDisponivel,
}

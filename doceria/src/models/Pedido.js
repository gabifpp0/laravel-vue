export default class Pedido {
  constructor({ id = null, itens = [], total = 0, pagamento = false, status = ['pendente', 'entregue', 'pronto'] } = {}) {
    this.id = id
    this.itens = itens
    this.total = total
    this.pagamento = pagamento
    this.status = status
  }
}

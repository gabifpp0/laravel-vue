export default class Cliente {
  constructor({ id = null, nome = '', telefone = '' } = {}) {
    this.id = id
    this.nome = nome
    this.telefone = telefone
  }
}

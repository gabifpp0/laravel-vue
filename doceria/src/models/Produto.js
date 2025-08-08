export default class Produto {
  constructor({ id = null, nome = '', preco = 0, disponivel = false, imagem = 0 } = {}) {
    this.id = id
    this.nome = nome
    this.preco = preco
    this.disponivel = disponivel
    this.imagem = imagem
  }
}

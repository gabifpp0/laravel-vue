import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ProdutoView from '../views/ProdutoView.vue'
import PedidoView from '../views/PedidoView.vue'
import TheDashboardView from '../views/TheDashboardView.vue'


const routes = [
  { path: '/', name: 'Home', component: HomeView },
  { path: '/produtos', name: 'Produtos', component: ProdutoView },
  { path: '/pedidos', name: 'Pedidos', component: PedidoView },
  { path: '/dashboard', name: 'Dashboard', component: TheDashboardView }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router

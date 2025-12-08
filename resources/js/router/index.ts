import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router'
import ProductPage from '@/pages/ProductPage.vue'

const routes: RouteRecordRaw[] = [
  {
    path: '/product/:id',
    name: 'product.show',
    component: ProductPage,
    props: true, // <-- enables typed props
  },
]

export default createRouter({
  history: createWebHistory(),
  routes,
})

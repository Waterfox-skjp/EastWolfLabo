import Vue from 'vue'
import Router from 'vue-router'
import page0 from '@/views/0.vue'
import page1 from '@/views/1.vue'
import page2 from '@/views/2.vue'
import page3 from '@/views/3.vue'
import page4 from '@/views/4.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: '0',
      component: page0
    },
    {
      path: '/1/',
      name: '1',
      component: page1
    },
    {
      path: '/2/',
      name: '2',
      component: page2
    },
    {
      path: '/3/',
      name: '3',
      component: page3
    },
    {
      path: '/4/',
      name: '4',
      component: page4
    }
  ]
})

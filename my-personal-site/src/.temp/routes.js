const c1 = () => import(/* webpackChunkName: "page--src-pages-about-vue" */ "D:\\wp-site\\test\\app\\public\\wp-content\\themes\\my-personal-site\\src\\pages\\About.vue")
const c2 = () => import(/* webpackChunkName: "page--node-modules-gridsome-app-pages-404-vue" */ "D:\\wp-site\\test\\app\\public\\wp-content\\themes\\my-personal-site\\node_modules\\gridsome\\app\\pages\\404.vue")
const c3 = () => import(/* webpackChunkName: "page--src-pages-index-vue" */ "D:\\wp-site\\test\\app\\public\\wp-content\\themes\\my-personal-site\\src\\pages\\Index.vue")

export default [
  {
    path: "/about/",
    component: c1
  },
  {
    name: "404",
    path: "/404/",
    component: c2
  },
  {
    name: "home",
    path: "/",
    component: c3
  },
  {
    name: "*",
    path: "*",
    component: c2
  }
]

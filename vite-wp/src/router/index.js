import { createRouter, createWebHistory } from 'vue-router';

// Pages

import TopPage from '@/views/page/top.vue'
import AboutPage from '@/views/page/about.vue'
import ProfilePage from '@/views/page/profile.vue'
import ContactPage from '@/views/page/contact.vue'

//post
import NewsArchive from '@/views/archive/news-archive.vue'
import SingleNews from '@/views/single/single-news.vue'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: TopPage,
        },
        {
            path: '/about',
            name: 'about',
            component: AboutPage,
        },
        {
            path: '/profile',
            name: 'profile',
            component: ProfilePage,
        },
        {
            path: '/contact',
            name: 'contact',
            component: ContactPage,
        },
        {
            path: '/news',
            name: 'news.archive',
            component: NewsArchive,
        },
        {
            path: '/news/:id',
            name: 'single.news',
            component: SingleNews,
        },
    ],
});

export default router;
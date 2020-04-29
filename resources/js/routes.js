import Hello from './components/Hello.vue';
import Home from './components/Home.vue';

export const routes = [
    {
        name: 'hello',
        path: '/Hello',
        component: Hello
    },
    {
        name: 'home',
        path: '/',
        component: Home
    }
];
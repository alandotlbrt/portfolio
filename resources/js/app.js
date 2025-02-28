import './bootstrap';


import { createApp } from 'vue';
import App from './components/App.vue';
import '../css/projects.css';

const app = createApp(App);

app.mount("#app");

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        document.querySelector(targetId).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});



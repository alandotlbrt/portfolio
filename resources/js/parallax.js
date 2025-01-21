import Parallax from 'parallax-js';
document.addEventListener('DOMContentLoaded', () => {
    const scene = document.getElementById('scene');
    if (scene) {

        new Parallax(scene);
    }
});

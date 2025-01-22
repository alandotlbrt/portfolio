import Parallax from 'parallax-js';


var scene_galaxie = document.getElementById('galaxie');
var parallaxInstance_galaxie = new Parallax(scene_galaxie, {
    relativeInput: true
});

parallaxInstance_galaxie.friction(0.1, 0.1);
parallaxInstance_galaxie.limit(40, 40);
 


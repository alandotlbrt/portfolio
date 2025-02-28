<template>
    <div class="project-div">
        <ul class="word-list">
            <li v-for="(item, index) in items" :key="index" @mouseover="changeImage(item.image)">
              <div class="horizontal projects">

                <p  v-on:click="redirect(item.adresse)">{{ item.text }}</p>
                <svg  v-if="item.image==currentImage && item.text!='Maquette Figma'" viewBox="-8 -8 32.00 32.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.00016"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.064"></g><g id="SVGRepo_iconCarrier"> <path d="M11 15H12L16 11L12 7H11V10H5C3.34315 10 2 8.65685 2 7C2 5.34315 3.34315 4 5 4H12V2H5C2.23858 2 0 4.23858 0 7C0 9.76142 2.23858 12 5 12H11V15Z" fill="#ffffff"></path> </g></svg>
                <svg v-else-if="item.image==currentImage && item.text=='Maquette Figma'" fill="#ffffff"viewBox="-1.2 -1.2 22.40 22.40" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M7.8 10a2.2 2.2 0 0 0 4.4 0 2.2 2.2 0 0 0-4.4 0z"></path></g></svg>
              </div>
              </li>
        </ul>
        <div class="projects-image">
            <img v-if="currentImage" :src="currentImage" :key="currentImage" />
        </div>
    </div>
</template>


<script>
import plumeimg from './plume.png';
import figma from './figma1.png';
import alphabet from './find-alphabet.png';

export default {
  data() {
    return {
      currentImage: plumeimg,  
      items: [
        { text: "Social-Network", image: plumeimg, adresse:"https://github.com/alandotlbrt/social-network"},
        { text: "Maquette Figma", image: figma, adresse:""},
        { text: "Find-Alphabet", image: alphabet, adresse:"https://find-alphabet.eu"}
      ]
    };
  },
  methods: {
    changeImage(newImage) {
      if (newImage !== this.currentImage) {
        this.currentImage = newImage;
      }
    },
    redirect(url) {
      console.log(url)
      if (url) {
            window.open(url, '_blank', 'noopener,noreferrer');
        }
    },
  }
};
</script>


<template>
    <header>
        <div id="menubar">
            <div id="click-menu">
              <svg @click="toggleMenu" id="svg" height="32px" width="32px" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32"  xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg>
              <h1>{{ title }}</h1>>
            </div>
            <transition name="menu">
              <div id="menu-items" v-if='show' class="menu-items-view">
                <ul>
                    <li v-for="(text, index) in menuText" :key="index">
                      <a :href="text.url">{{ text.words }}</a></li>
                </ul>
              </div>
            </transition>
        </div>
    </header>
</template>

<script>
    export default {
        name: "HeaderComponent",
        data: () => {
            return {
                title: "SBTS Digital Technican",
                url: "",
                menuText: [
                    { words: "Submit a Technology Request", url: "" },
                    { words: "What do I need?", url: ""},
                    { words: "Campus Technology Home", url: "http://www.sbts.edu/services/campus-technology/"},
                    { words: "SBTS Home", url: "http://www.sbts.edu"},
                    { words: "Request Manager", url: "/requestmanager"}
                ],
                show: false
            }
        },
        methods: {
          toggleMenu: function(){
            return this.show = !this.show
          }
        }
    }
</script>

<style scoped>
@media screen and (min-width: 768px) {
  svg {
    margin-top: 1em;
    margin-left: 1em;
    margin-bottom: 1em;
    border: 2px solid white;
    border-radius: 3px;
    fill: white;
  }
  p {
    margin: 1em;
    padding: .5em;
    font-family: Calibri, light;
  }
  ul {
    margin: 0.25em;
    padding: 0.25em;
  }
  li {
    list-style: none;
    margin: 5px;
  }
  a {
    text-decoration: none;
    color: inherit;
  }
  a:visited {
    color: inherit;
  }
  h1 {
    font-size: 1.5em;
    font-family: Calibri, light;
    text-align: center;
    flex-grow: 2;
    animation: letter-space 1s ease-out forwards;
    -webkit-animation: letter-space 1s ease-out forwards;
    -moz-animation: letter-space 1s ease-out forwards;
  }
  #menubar {
    width: 100vw;
    margin: 0;
  }
  #click-menu {
    display: flex;
    justify-content: center;
    height: 10vh;
    background-color: rgb(58, 57, 57);
    color: white;
  }
  #menu-items {
    position: absolute;
    z-index: 4;
    top: 10vh ;
    left: 3em;
    width: 20vw;
    height: 23vh;
    padding: .5em;
    overflow: hidden;
    background-color: rgb(58, 57, 57);
    border-bottom: 1px solid black;
    border-right: 1px solid black;
    border-left: 1px solid black;
    border-radius: 0  0 5px 5px;
    box-shadow: 5px 5px 8px 0px rgba(7, 7, 7, 0.5);
    color: white;
  }
  /*
  |--------------------------
  | Vue Transitions
  |--------------------------
  */
  .menu-enter-active {
    animation: roll-open .5s;
  }
  .menu-leave-active {
    animation: roll-open .5s reverse;
  }

  /*
  |-------------------
  | Animations
  |-------------------
  */
  @keyframes roll-open {
    0% {
      height: 0;
      width: 0;
      opacity: 0;
      color: rgba(255, 255, 255, 0);
      background-color: rgb(255, 255, 255);
    }
    50% {
      height: 1vh;
      width: 20vw;
    }
    75% {
      color: rgba(255, 255, 255, 0)
    }
    100% {
      height: 23vh;
      color: rgba(255, 255, 255, 0);
      background-color: rgb(58, 57, 57);
    }
  }
  @keyframes letter-space {
    0% {
      letter-spacing: 50px;
      opacity: 0;
    }
    50% {
      letter-spacing: 4px;
      opacity: 1;
    }
    100%{
      letter-spacing: 1px;
      opacity: 1;
    }
  }
}




</style>

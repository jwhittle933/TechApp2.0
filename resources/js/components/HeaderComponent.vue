<template>
    <header id="header">
        <div id = "menubar">
            <div id="menu-div">
            <!--<icon-base icon-name='menu'><icon-write /></icon-base>-->
            <p @click="toggleMenu" class="menu"><a href="#">{{ menu }}</a></p>
            </div>
            <div id="menu-items" v-if='show' class="menu-items-view">
            <ul>
                <li v-for="(text, index) in menuText" :key="index">
                  <a :href="text.url">{{ text.words }}</a></li>
            </ul>
            </div>
        </div>
        <h1 id="item">{{ title }}</h1>
        <p id="item3">{{ message }}</p>
    </header>
</template>

<script>
    export default {
        name: "HeaderComponent",
        data: function(){
            return {
                title: "Tech Help @ SBTS",
                message: "A quick help site when a technician is unavailible",
                menu: "Menu",
                url: "",
                menuText: [
                    { words: "Submit a Technology Request", url: "" },
                    { words: "What do I need?", url: ""},
                    { words: "Campus Technology Home", url: "http://www.sbts.edu/services/campus-technology/"},
                    { words: "SBTS Home", url: "http://www.sbts.edu"},
                    { words: "Request Manager", url: "/login"}
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
svg {
  height: 80px;
  width: 20px;
  margin-right: 7px;
}
ul {
  padding-left: 0;
}
a {
  text-decoration: none;
  color: inherit;
}
#menubar {
  background-image: linear-gradient(to right, #fff, #6DB3BF);
}
#menu-div {
  display: flex;
  width: auto;
  font-family: Lobster;
  font-size: 1.5em;
  margin-bottom: 0;
}
.menu-items-view {
  background-color: #FFFDFA;
  position: fixed;
  left: 10px;
  top: 75px;
  width: 30%;
  border: solid 2px #6DB3BF;
  z-index: 1;
  box-shadow: 5px 5px 5px #67696E;
}
#menu-items li {
  color: black;
  list-style: none;
  font-family: Montserrat;
  font-size: 1.25em;
  margin-left: 4px;
  padding: 2px;
  width: auto;
}
.menu {
  font-family: Lobster;
}
header {
  margin-top: 0;
  width: 100%;
  border-bottom: solid 2px #223351;
  background-image: linear-gradient(to right, #fff, #6DB3BF);
}
p {
  font-family: Sawarabi Mincho;
  text-align: center;
}
h1 {
    text-align: center;
    font-family: Cinzel;
    font-size: 4.5em;
}
</style>


<template>
    <footer id="footer">
        <ul>
          <li v-for="(link, index) in links" :key="index">
            <a :href="link.url">{{ link.text }}</a>
            <svg viewbox="0 0 20 20" class="Icon">
              <path d="M0 0 L10 10 L0 20" ></path>
            </svg>
          </li>
        </ul>
    </footer>
</template>

<script>
    export default {
        name: "FooterComponent",
        data: function(){
          return {
            links: [
              {text: "SBTS ", url: "http://www.sbts.edu/"},
              {text: "Canvas ", url: "http://www.sbts.instructure.com"},
              {text: "MySBTS ", url: "http://www.my.sbts.edu"},
              {text: "AlberMohler.com ", url: "http://www.albermohler.com"},
              {text: "Campus Technology", url: "http://www.sbts.edu/services/campus-technology/"}
            ]
          }
        }
    }
</script>

<style scoped>
footer {
  position: fixed;
  bottom: 0;
  width: 100vw;
  background-color: #325D7F;
  color: #E7F2EA;
  height: 8vh;
  border: solid 2px rgb(124, 130, 131);
  clear: both;
  display: flex;
  align-items: center;
  justify-content: center;
}
ul {
  display: flex;
  justify-content: space-around;
}
li {
  list-style: none;
  padding: 3vw;
  display: flex;
}
a {
  text-decoration: none;
  color: white;
  font-family:cursive;
  font-size: 1.5em;
}
.Icon {
  width: 1.5rem;
  height: 1.5rem;
  opacity: 0;
  order: -1;
  transition: all 0.2s;
  transform: translateX(-100%)
}
.Icon path{
  fill: none;
  stroke: white;
  stroke-width: 2px;
}
a:hover + .Icon{
  transform: translateX(0);
  opacity: 1;
}
</style>

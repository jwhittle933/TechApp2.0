<template>
    <footer id="footer">
        <!-- <ul>
          <li v-for="(link, index) in links" :key="index">
            <a :href="link.url">{{ link.text }}</a>
            <svg viewbox="0 0 10 10" class="Icon">
              <path d="M0 0 L5 5 L0 10" ></path>
            </svg>
          </li>
        </ul> -->
        <!--Create hidden footer that opens on click to reveal links, etc. -->
        <div class="flex">
          <svg viewbox="0 0 40 40" class="Icon2">
            <path d="M0 30 L20 20 L40 30" ></path>
          </svg>
        </div>
    </footer>
</template>

<script>
    export default {
        name: "FooterComponent",
        data: function(){
          return {
            footerShow: false,
            links: [
              {text: "SBTS ", url: "http://www.sbts.edu/"},
              {text: "Canvas ", url: "http://www.sbts.instructure.com"},
              {text: "MySBTS ", url: "http://www.my.sbts.edu"},
              {text: "AlberMohler.com ", url: "http://www.albermohler.com"},
              {text: "Campus Technology", url: "http://www.sbts.edu/services/campus-technology/"}
            ]
          }
        },
        methods: {
          toggleFooterMenu() {

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
  height: 10vh;
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
  padding: 1vw;
  display: flex;
  align-items: center;
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
  margin-bottom: 0;
}
a:hover + .Icon{
  transform: translateX(0);
  opacity: 1;
}
.flex {
  display: flex;
}
.Icon2 {
  width: 2.5em;
  height: 2.5em;
}
.Icon2 path {
  stroke: black;
  stroke-width: 2.5px;
  fill: none;
}
</style>

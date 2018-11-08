<template>
    <footer id="footer">
        <div id="southern-links">
          <ul>
            <li v-for="(link, index) in links" :key="index">
              <a :href="link.url">{{ link.text }}</a>
            </li>
          </ul>
        </div>
        <div id='droptest'></div>
    </footer>
</template>

<script>
    export default {
        name: "FooterComponent",
        data: function(){
          return {
            links: [
              {text: "SBTS |", url: "http://www.sbts.edu/"},
              {text: "Canvas |", url: "http://www.sbts.instructure.com"},
              {text: "MySBTS |", url: "http://www.my.sbts.edu"},
              {text: "AlberMohler.com |", url: "http://www.albermohler.com"},
              {text: "Campus Technology", url: "http://www.sbts.edu/services/campus-technology/"}
            ]
          }
        }
    }
</script>

<style scoped>
li {
  display: inline;
}
a {
  text-decoration: none;
  color: black;
}
a:hover {
  text-decoration: underline;
}
footer {
  position: fixed;
  bottom: 0;
  width: 100vw;
  background-color: #325D7F;
  color: #E7F2EA;
  height: 15vh;
  border: solid 5px #3C5D5E;
  clear: both;
  display: flex;
}
#southern-links ul {
  margin-top: 50px;
}
#southern-links li {
  list-style: none;
  font-family: Cinzel;
  font-size: 1.75em;
}
#southern-links a:visited {
  color: black;
}
#other-links {
  width: 50%;
}
#other-links li {
  list-style: none;
}
</style>

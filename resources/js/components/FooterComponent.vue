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
        <div id="twitter-api">
          <h2>Stay up-to-date with Campus Technology on Twitter</h2>
          <a class="twitter-timeline" data-width="600" data-height="300" data-theme="dark" href="https://twitter.com/sbtstech?ref_src=twsrc%5Etfw">Tweets by sbtstech</a>
        </div>
    </footer>
</template>

<script>
    export default {
        name: "FooterComponent",
        data: function(){
          return {
            links: [
              {text: "SBTS", url: "http://www.sbts.edu/"},
              {text: "Canvas", url: "http://www.sbts.instructure.com"},
              {text: "MySBTS", url: "http://www.my.sbts.edu"},
              {text: "AlberMohler.com", url: "http://www.albermohler.com"},
              {text: "Campus Technology", url: "http://www.sbts.edu/services/campus-technology/"}
            ]
          }
        }
    }
</script>

<style scoped>
h2 {
  font-family: Sawarabi Minco;
}
a {
  text-decoration: none;
  color: black;
}
a:hover {
  text-decoration: underline;
}
footer {
  background-color: #325D7F;
  color: #E7F2EA;
  height:auto;
  border: solid 5px #3C5D5E;
  clear: both;
  display: flex;
}
#southern-links {
  width: 50%;
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

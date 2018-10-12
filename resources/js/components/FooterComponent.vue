<template>
    <footer id="footer">
        <div id="southern-links">
          <ul>
            <li v-for="(link, index) in links" :key="index">{{ link.text }}</li>
          </ul>
        </div>
        <div id='droptest'></div>
        <div>
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
              {text: "SBTS", url: ""},
              {text: "Canvas", url: ""},
              {text: "MySBTS", url: ""},
              {text: "AlberMohler.com", url: ""},
              {text: "Campus Technology", url: ""}
            ]
          }
        }
    }
</script>

<style scoped>
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
#southern-links li {
  list-style: none;
}
#other-links {
  width: 50%;
}
#other-links li {
  list-style: none;
}
</style>

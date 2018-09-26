</v-flex>
</v-layout>
</v-container>
</v-content>
<v-footer color="blue" app>
    <span class="white--text"> Created by Benjamin Zaragoza Pla &copy;2018 All rights reserved</span>
</v-footer>
</v-app>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
<script>
    new Vue({
        el: '#app' ,
        data: () => ({
            drawer: null
        }),
        props: {
            source: String
        }})
</script>
</body>
</html>

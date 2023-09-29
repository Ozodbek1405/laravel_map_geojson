<!DOCTYPE html>
<html>
<head>
    <title>Vue.js and Laravel Blade</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
<div id="app">
    <ul>
        <li v-for="region in regions">@{{ region.name }}</li>
    </ul>
</div>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            regions: []
        },
        mounted() {
            this.fetchPosts();
        },
        methods: {
            fetchPosts() {
                axios.get('/api/regions')
                    .then(response => {
                        this.regions = response.data;
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }
        }
    });
</script>
</body>
</html>

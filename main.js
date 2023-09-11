const { createApp } = Vue

const app = createApp({
    data() {
        return {
            posts: []
        }
    },
    mounted() {
        axios.get("api/posts.php").then((response) => {
            this.posts = response.data;
            console.log(response);
        })
    }
}).mount('#app')
var app = new Vue({
  el: '#app',
  data: {
    cards: [],
  },
    created() {
    axios.get('http://localhost:8888/php-ajax-dischi/server/controller-api.php?genre=all')
    .then((response) => {
        // console.log(response);
        this.cards = response.data.results;
        console.log(this.cards);
    })
    .catch((error) => {
    console.log(error);
    })
  },
})
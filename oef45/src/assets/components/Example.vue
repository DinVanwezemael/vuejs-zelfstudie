<script>
export default {

    data(){
        name: 'din vanw'
    },

    render(createElement) {
    return createElement("div", {attrs : {id : "foobar"}}, [
        element("h1", this.name),
        element("h2", this.name)
    ])
  }
}
</script>
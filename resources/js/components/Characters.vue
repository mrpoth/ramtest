<template>
  <div class="flex-container">
    <div class="flex-box" v-for="character in characters" :key="character.id">
      <a v-bind:href="'/character/?id=' + character.id">
      <img class="char-image" v-bind:src="character.image" />
      <h3>Name: {{ character.name }}</h3></a>
      <h3>Species: {{ character.species }}</h3>
      <h3>Origin: {{ character.origin.name }}</h3>
      <h4>Total Episodes: {{ character.episode.length }}</h4>
    </div>
  </div>
</template>

<script>
export default {
  props: ["characters"],
};
</script>

<style scoped>
.flex-container {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}
.flex-box {
  margin: 10px;
  border: 1px solid black;
  width: 400px;
  max-width: 100%;
  text-align: center;
}
.char-image {
  margin: 10px auto;
  display: block;
  max-width: 100%;
  height: auto;
}
</style>

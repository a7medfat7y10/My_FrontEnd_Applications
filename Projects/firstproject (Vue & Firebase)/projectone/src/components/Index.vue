<template>
  <div class="index container ">
    <div class="card" v-for="smoothie in smoothies" :key="smoothie.id">
      <div class="card-content">
        <i class="material-icons delete" @click="deleteSmoothie(smoothie.id)">delete</i>
        <h2 class="indigo-text">
          {{smoothie.title}}
        </h2>
        <ul class="ingredients">
          <li v-for="(ing, index) in smoothie.ingredients" :key="index">
            <span class="chip"> {{ing}}</span>
          </li>
        </ul>
      </div>
      <span class="btn-floating btn-large halfway-fab pink">
        <router-link :to="'/edit-smoothie/' + smoothie.slug ">
          <i class="material-icons edit">edit</i>
        </router-link>
      </span>
    </div>
  </div>
</template>

<script>
//db is any name u can call the firestore exported from init.js
import db from '../firebase/init.js'

export default {
  name: 'Index',
  data () {
    return {
      smoothies: []
    }
  },
  methods: {
    deleteSmoothie(id) {
      // console.log(id)
      //delete from firebase then delete from the front end
      db.collection('smoothies').doc(id).delete()
      .then(() => {
        //filtering the smoothies with id not equal to the smoothie id
        this.smoothies = this.smoothies.filter(smoothie => {
          return smoothie.id != id
        })
      })
    }
  },
  created() {
    db.collection('smoothies').get()
    .then(snapshot => {
      snapshot.forEach(doc => {
        let smoothie = doc.data();
        smoothie.id = doc.id;
        this.smoothies.push(smoothie)
      })
    })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style >
.index {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 30px;
  margin-top: 60px;
}
.index h2 {
  font-size: 1.8em;
  text-align: center;
  margin-top: 0;
}
.index .ingredients {
  margin: 30px auto;
}
.index .ingredients li{
  display: inline-block;
}
.index .delete {
  position: absolute;
  top: 4px;
  right: 4px;
  cursor: pointer;
  color: #aaa;
  font-size: 1.4em ;
}
</style>

<template>
  <div class="map container">
    <h2 class="center">This is map page </h2>
    <h3 class="center">All users</h3>

    <!--This is used by me insted of markers to take me to the users profiles-->
    <div v-for="document in docs" :key="document.data.user_id" class="alias marker" >
      <router-link :to="{name:'ViewProfile', params: {id: document.id}}">  {{document.data().alias }} </router-link>
    </div>


    <!--used to display maps which not work-->
    <div class="google-map" id="map">

    </div>
  </div>
</template>

<script>
import firebase from 'firebase'
import db from '@/firebase/init'

export default {
  name: 'GMap',
  data() {
    return {
      // lat: 53,
      // lng: -2,
      data: null,
      docs: null,
      id : null
    }
  },
  methods: {
    renderMap() {
    //   const map = new google.maps.Map(document.getElementById('map'), {
    //     center: {
    //       lat: this.lat,
    //       lng: this.lng
    //     },
    //     zoom: 6,
    //     maxZoom: 15,
    //     minZoom: 3,
    //     streetViewControl: false
    //   })

    db.collection('users').get().then(users => {
      this.docs = users.docs;
      users.docs.forEach(doc => {
        let data = doc.data()
        this.data = data


        // if(data.geolocation){
        //   let marker = new google.maps.Marker({
        //     position: {
        //       lat: data.geolocation.lat,
        //       lng: data.geolocation.lng
        //     },
        //     map: map
        //   })

          // //add click event to marker
          // marker.addListener('click', () => {
          //   console.log(doc.id)
          // })
        // }
      })
    })
    }
  },
  mounted() {
    //get current user
    let user = firebase.auth().currentUser
    console.log(user)

    //get user geolocation
    // if(navigator.geolocation) {
      // navigator,geolocation.getCurrentPosition(pos => {
      //   this.lat = pos.coords.latitude
      //   this.lng = pos.coords.longitude

        //find the user record and then update georecords
        db.collection('users').where('user_id', '==', user.uid).get()
        .then(snapshot => {
          snapshot.forEach((doc) => {
            // console.log(doc.id)
            db.collection('users').doc(doc.id).update({
              geolocation: {
                // lat: pos.coords.latitude,
                // lng: pos.coords.longitude
                lat: 50,
                lng: 200
              }
            })
          })
        })

        // this.renderMap();
      // }, (err) => {
      //   console.log(err)
        this.renderMap();
      // }, {maximumAge: 60000, timeout: 3000})
    // } else {
    //   //position center by default values
    //   this.renderMap();
    // }

  }
}
</script>

<style>
.google-map {
  width: 100%;
  height: 100%;
  position: absolute;
  top:0;
  left:0;
  z-index:-1;
  background: #FFF;
  margin: 0 auto;
}
.alias {
  background-color:aqua;
  padding:10px;
  cursor:pointer;
  text-align: center;
  max-width: 400px;
  margin: 5px auto;
  color: #888
}

</style>

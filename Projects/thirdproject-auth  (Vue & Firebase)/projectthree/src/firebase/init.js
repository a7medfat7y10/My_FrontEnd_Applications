import firebase from 'firebase';
import firestore from 'firebase/firestore';


 // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyA8d6VU_giJW3CLpSEkgOqmdgaJtSaaLXY",
    authDomain: "vue-auth-geolocation.firebaseapp.com",
    databaseURL: "https://vue-auth-geolocation.firebaseio.com",
    projectId: "vue-auth-geolocation",
    storageBucket: "vue-auth-geolocation.appspot.com",
    messagingSenderId: "379746478210",
    appId: "1:379746478210:web:f10e08482edeb26ab02c9b",
    measurementId: "G-6HJP7CTJ0L"
  };
  // Initialize Firebase
  const firebaseApp = firebase.initializeApp(firebaseConfig);
  firebaseApp.firestore().settings({timestampsInSnapshots: true});

  firebase.analytics();

  export default firebaseApp.firestore();

import firebase from 'firebase'
import firestore from 'firebase/firestore'

// Your web app's Firebase configuration
var firebaseConfig = {
  apiKey: "AIzaSyBnvC1CYijBd5gK13EqLK6fBYAF9h_eoRc",
  authDomain: "vue-ninja-chat-53325.firebaseapp.com",
  databaseURL: "https://vue-ninja-chat-53325.firebaseio.com",
  projectId: "vue-ninja-chat-53325",
  storageBucket: "vue-ninja-chat-53325.appspot.com",
  messagingSenderId: "617062883047",
  appId: "1:617062883047:web:20ba69dae5b60bdb0a0c42",
  measurementId: "G-QR7ZQJ0NLY"
};
// Initialize Firebase
const firebaseApp = firebase.initializeApp(firebaseConfig);
firebaseApp.firestore().settings({timestampsInSnapshots: true});
firebase.analytics();


export default firebaseApp.firestore();

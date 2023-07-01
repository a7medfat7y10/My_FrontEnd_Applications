import firebase from 'firebase'
import firestore from 'firebase/firestore'

// Your web app's Firebase configuration
 var firebaseConfig = {
  apiKey: "AIzaSyBW-QUsbhT9nnp3N-pze7PucC4sll8P4ZM",
  authDomain: "vue-ninja-smoothies-61a5e.firebaseapp.com",
  databaseURL: "https://vue-ninja-smoothies-61a5e.firebaseio.com",
  projectId: "vue-ninja-smoothies-61a5e",
  storageBucket: "vue-ninja-smoothies-61a5e.appspot.com",
  messagingSenderId: "840154454507",
  appId: "1:840154454507:web:902c7a30a31e56e268e1ae",
  measurementId: "G-ND4N57DX63"
};
// Initialize Firebase
const firebaseApp = firebase.initializeApp(firebaseConfig);
firebaseApp.firestore().settings({timestampsInSnapshots: true})
firebase.analytics();

export default firebaseApp.firestore()

import firebase from 'firebase'
import firestore from 'firebase/firestore'

  
// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
var firebaseConfig = {
apiKey: "AIzaSyBTQrfHCip2oWfbBsodY9pKNHtJxEsQSTI",
authDomain: "socialapp-vue.firebaseapp.com",
databaseURL: "https://socialapp-vue.firebaseio.com",
projectId: "socialapp-vue",
storageBucket: "socialapp-vue.appspot.com",
messagingSenderId: "591958570801",
appId: "1:591958570801:web:8bcbca547906d395786210",
measurementId: "G-RB0KGFM5KZ"
};
const firebaseApp = firebase.initializeApp(firebaseConfig);
firebaseApp.firestore().settings({timestampsInSnapshots: true})
firebase.analytics();


const db = firebaseApp.firestore()
const auth = firebase.auth()
const usersCollection = db.collection('users')
const postsCollection = db.collection('posts')
const commentsCollection = db.collection('comments')
const likesCollection = db.collection('likes')

export {
    // db,
    auth,
    usersCollection,
    postsCollection,
    commentsCollection,
    likesCollection
}
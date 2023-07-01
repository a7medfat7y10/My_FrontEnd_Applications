//check if user is logged in or out to retrieve the data of guides
auth.onAuthStateChanged(user => {
  if(user) {
    db.collection('guides').onSnapshot(snapshot => {
      setupGuides(snapshot.docs); //entering the data coming from database into the function in index.js
      setupUi(user);
    }, function(err)  {
      console.log(err.message);
    });
  } else {
    setupUi();
    setupGuides([]);
  }
});

//start signup
const signupForm = document.querySelector('#signup-form');
signupForm.addEventListener('submit', function(e) {
  e.preventDefault();
  //get user info
  const email = signupForm['signup-email'].value;
  const password = signupForm['signup-password'].value;
  //signup user
  auth.createUserWithEmailAndPassword(email, password).then(cred => {
    //collection users and document doesnot exist but will be cereated and bio field will be created 
    //making a document with the credential user in users collectio in database
    return db.collection('users').doc(cred.user.uid).set({
      bio: signupForm['signup-bio'].value
    });
  }).then(function() {
    const modal = document.querySelector('#modal-signup');
    M.Modal.getInstance(modal).close();
    signupForm.reset();
    signupForm.querySelector('.error').innerHTML = '';
  }).catch(function(err) {
    signupForm.querySelector('.error').innerHTML = err.message;
  })
});

//start logout
const logout = document.querySelector('#logout');
logout.addEventListener('click', function(e){
  auth.signOut().then(() => {
    console.log('user signed out');
  })
});

//start login
const loginForm = document.querySelector('#login-form');
loginForm.addEventListener('submit', function(e) {
  e.preventDefault();
  const email = loginForm['login-email'].value;
  const password = loginForm['login-password'].value;
  auth.signInWithEmailAndPassword(email, password).then(cred => {
    console.log(cred.user);
    const modal = document.querySelector('#modal-login');
    M.Modal.getInstance(modal).close();
    loginForm.reset();
    loginForm.querySelector('.error').innerHTML = '';
  }).catch(err => {
    loginForm.querySelector('.error').innerHTML = err.message;
  })
})


//create guides
const createForm = document.querySelector('#create-form');
createForm.addEventListener('submit', function(e) {
  e.preventDefault();
  const valTitle = document.getElementById('title').value;
  const valContent = document.getElementById('content').value;
  db.collection('guides').add({
    title: valTitle,
    content: valContent
  }).then(function() {
    const modal = document.querySelector('#modal-create');
    M.Modal.getInstance(modal).close();
    createForm.reset();
  }).catch(function(err) {
    console.log(err.message);
  })
});
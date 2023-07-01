//Retrieving guides from firesstore
const guideList = document.querySelector('.guides');
function setupGuides(data){
  if(data.length){
    let html = '';
    data.forEach(doc => {
      const guide = doc.data();
      const li = `<li>
        <div class="collapsible-header grey lighten-4">` + guide.title + `</div>
        <div class="collapsible-body white">` + guide.content + `</div>
        </li>`;
        html += li;
        guideList.innerHTML = html; 
    });
  } else {
    guideList.innerHTML='<h5 class="center-align">Login to view guides</h5>';
  }
}

//checking if login and out
//Navbar Icons Toggling and sttingup ui and account details
const loggedInLinks = document.querySelectorAll('.logged-in');
const loggedOutLinks = document.querySelectorAll('.logged-out');
const accountDetails = document.querySelector('.account-details');
function setupUi (user) {
  //check for logged in
  if(user) {
    //account details
    db.collection('users').doc(user.uid).get().then(function(doc) {
      const html=`
      <div>Logged in as ${user.email}</div>
      <div>${doc.data().bio}</div>
    `;
    accountDetails.innerHTML = html;
    }) 

    loggedInLinks.forEach(item => item.style.display="block");
    loggedOutLinks.forEach(item => item.style.display="none");
  } else {
    accountDetails.innerHTML = '';
    loggedInLinks.forEach(item => item.style.display="none");
    loggedOutLinks.forEach(item => item.style.display="block");
  }
}

// setup materialize components
document.addEventListener('DOMContentLoaded', function() {

  var modals = document.querySelectorAll('.modal');
  M.Modal.init(modals);

  var items = document.querySelectorAll('.collapsible');
  M.Collapsible.init(items);

});
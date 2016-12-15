console.log('Loaded!');
var reg=document.getElementById('reg');
reg.onclick = function()
{
     var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
          if (request.readyState === XMLHttpRequest.DONE) {
              if (request.status === 200) {
                  alert('User created successfully');
                  reg.innerHTML = 'Registered!';
              } else {
                  alert('Could not register the user');
                  reg.innerHTML = 'Register';
              }
          }
        };
         
        var username = document.getElementById('u2').value;
        var password = document.getElementById('p2').value;
       

        if (username.trim() === '' || password.trim() === '') {
        alert("Username/Password field can't be left empty");
        return;
    }
        request.open('POST', 'http://sarathcg.imad.hasura-app.io/create-user', true);
        request.setRequestHeader('Content-Type', 'application/json');
        request.send(JSON.stringify({username: username, password: password}));  
        reg.innerHTML = 'Registering...';
};

var log = document.getElementById('log');
log.onclick = function()
{
     var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
          if (request.readyState === XMLHttpRequest.DONE) {
             if (request.status === 200) {
                  log.innerHTML  = 'Sucess!';
              } else if (request.status === 403) {
                  log.innerHTML  = 'Invalid credentials. Try again?';
              } else if (request.status === 500) {
                  alert('Something went wrong on the server');
                 log.innerHTML  = 'Login';
              } else {
                  alert('Something went wrong on the server');
                  log.innerHTML = 'Login';
}
          }
        };
         
        var username = document.getElementById('u').value;
        var password = document.getElementById('p').value;
        console.log(username);
        console.log(password);
       

        if (username.trim() === '' || password.trim() === '') {
        alert("Enter login credentials");
        return;
    }
        request.open('POST', 'http://sarathcg.imad.hasura-app.io/login', true);
        request.setRequestHeader('Content-Type', 'application/json');
        request.send(JSON.stringify({username: username, password: password}));  
        log.innerHTML = 'logging in...';
};

var user = document.getElementById('user');
user.style['display']='none';

var logout = document.getElementById('logout');
logout.style['display']='none';

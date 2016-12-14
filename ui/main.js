console.log('Loaded!');
var reg=document.getElementById('reg');
reg.onclick = function()
{
     var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
          if (request.readyState === XMLHttpRequest.DONE) {
              if (request.status === 200) {
                  alert('User created successfully');
                  register.value = 'Registered!';
              } else {
                  alert('Could not register the user');
                  register.value = 'Register';
              }
          }
        };
         
        var username = document.getElementById('u2').value;
        var password = document.getElementById('p2').value;
        console.log(username);
        console.log(password);

        if (username.trim() === '' || password.trim() === '') {
        alert("Username/Password field can't be left empty");
        return;
    }
        request.open('POST', '/create-user', true);
        request.setRequestHeader('Content-Type', 'application/json');
        request.send(JSON.stringify({username: username, password: password}));  
        reg.value = 'Registering...';
    };



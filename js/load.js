
    function showLoading() {
        // Create a white box to cover the page.
        var back = document.createElement('div');
        back.style.backgroundColor = '#ffffff';
        back.style.position = 'fixed';
        back.style.zIndex = '0';
        back.style.left = '0px';
        back.style.top = '0px';
        back.style.right = '0px';
        back.style.bottom = '0px';
        document.body.appendChild(back);
     
        // Add a box to contain the message.
        var box = document.createElement('div');
        box.style.position = 'absolute';
        box.style.zIndex = '1';
        box.style.width = '250px';
        box.style.margin = '15px ' + ((document.body.offsetWidth / 2) - (250 / 2)) + 'px';
        box.style.fontFamily = 'Verdana, Arial, serif';
        document.body.appendChild(box);
     
        // Add the "Please wait" header
        var message = document.createElement('span');
        message.id = 'loading_header';
        message.style.display = 'block';
        message.style.fontSize = '175%';
        message.style.fontWeight = 'bold';
        message.style.textAlign = 'center';
        message.innerHTML = 'Please wait';
        box.appendChild(message);
     
        // Add the subheader message
        var message = document.createElement('span');
        message.id = 'loading_message';
        message.style.display = 'block';
        message.style.fontSize = '125%';
        message.style.textAlign = 'center';
        message.innerHTML = 'Redirect to home page..';
        box.appendChild(message);
     
        // Add a loading image.
        var img = document.createElement('img');
        img.setAttribute('src', 'loading.gif');
        img.style.display = 'block';
        img.style.width = '64px';
        img.style.height = '64px';
        img.style.margin = '15px auto';
        box.appendChild(img);
    }

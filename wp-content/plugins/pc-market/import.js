function importing(){

    const fs = require('fs');

    var loc = window.location.pathname;
    var dir = loc.substring(0, loc.lastIndexOf('/'));

    fs.readdir(dir, (err, files) => {
        files.forEach(file => {
          console.log(file);
        });
      });

}
function importing(){

    import * as fs from '/home4/smakolyk/public_html/pcwordpress/node_modules';

    var loc = window.location.pathname;
    var dir = loc.substring(0, loc.lastIndexOf('/'));

    fs.readdir(dir, (err, files) => {
        files.forEach(file => {
          console.log(file);
        });
      });

}
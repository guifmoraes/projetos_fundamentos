var http = require('http');
var url = require('url');
var uc= require('upper-case');
var fs = require('fs');
var rs = fs.createReadStream('./demofile.txt');
var events = require('events');
var eventEmitter = new events.EventEmitter();
var formidable = require('formidable');
var nodemailer = require('nodemailer');
var myEventHandler = function (){


var transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
      user: 'powerkombatex@gmail.com',
      pass: 'gui56978fm'
    }
  });
var mailOptions = {
    from: 'powerkombatex@gmail.com',
    to: 'powerkombatx@gmail.com',
    subject: 'Sending Email using Node.js',
    text: 'That was easy!'
  };
  transporter.sendMail(mailOptions, function(error, info){
    if (error) {
      console.log(error);
    } else {
      console.log('Email sent: ' + info.response);
    }
  });

  
http.createServer(function(req,res){
  if (req.url == '/fileupload') {
    var form = new formidable.IncomingForm();
    form.parse(req, function (err, fields, files) {
    var oldpath = files.filetoupload.path;
    var newpath = 'C:/Users/user/Downloads/' + files.filetoupload.name;
    fs.rename(oldpath, newpath, function (err) {
        if (err) throw err;
      res.write('Arquivo Carregado e Enviado');
      res.end();
    });
  });
  } else {
res.writeHead (200,{'Content-Type' : 'text/html'});  
res.write (uc.upperCase("Hello World"));
res.write('<form action="fileupload" method="post" enctype="multipart/form-data">');
res.write('<input type="file" name="filetoupload"><br>');
res.write('<input type="submit">');
res.write('</form>');
res.end();
}}).listen(8080);

console.log('Servidor inicializado!!!')
}


eventEmitter.on('scream', myEventHandler);  
eventEmitter.emit('scream');
rs.on('open', function () {
  console.log('The file is open');

});
var express = require('express'),
    path = require('path'),
    nodeMailer = require('nodemailer'),
    bodyParser = require('body-parser');

    var app = express();
    app.set('view engine', 'ejs');
    app.use(express.static('public'));
    app.use(bodyParser.urlencoded({extended: true}));
    app.use(bodyParser.json());
    var port = 3000;
    app.get('/', function (req, res) {
      res.render('index');
    });
    app.post('/send-email', function (req, res) {
      let transporter = nodeMailer.createTransport({
        //   host: 'gmail',
        service: 'Gmail',
          port: 465,
          secure: true,
          auth: {
              user: 'shujathali92@gmail.com',
              pass: 'alfalah@786'
          }});
    //   });smtp.gmail.com
      let mailOptions = {
          from: 'shujathali92@gmail.com', // sender address
          to: req.body.to, // list of receivers
          subject: req.body.subject, // Subject line
          text: req.body.bod, // plain text body
          html: '<b></b>'
           // html body
      };

      transporter.sendMail(mailOptions, (error, info) => {
          if (error) {
              return console.log(error);
          }
          console.log('Message %s sent: %s', info.messageId, info.response);
              // res.render('index');
              // res.render('info', {msg:'Email has been sent'});
               res.end('sent');
               console.log(info);
          });
      });
          app.listen(port, function(){
            console.log('Server is running at port: ',port);
          });

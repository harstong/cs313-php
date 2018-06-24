const express = require('express')
const path = require('path')
var bodyParser = require('body-parser')
var urlencodedParser = bodyParser.urlencoded({ extended: false})

const PORT = process.env.PORT || 5000

express()
  .use(express.static(path.join(__dirname, 'public')))
  
  .set('views', path.join(__dirname, 'views'))
  .set('view engine', 'ejs')
  
  .get('/', (req, res) => res.render('pages/index'))
  .get('/getRate', function(req, res){	    
	  res.render('form', { qs: req.query});
	  })
  
  .post('/getRate', urlencodedParser, function(req, res){
		console.log(req.body);
		res.render('rate', {data: req.body});
	  })
  .listen(PORT, () => console.log(`Listening on ${ PORT }`))

const http = require('http')
const srv = http.createServer((request, response) => {
	console.log(req.url)
})
srv.listen("0.0.0.0:80", () => {
	console.log("Server started")
})

var http = require("http");
var url = require("url");
var route = {
routes : {},
for: function(method, path, handler){
this.routes[method + path] = handler;
}
}
route.for("GET", "/start", function(request, response){
response.writeHead(200, {"Content-Type": "text/html"});
response.write("<input type = 'text' name = 'txtname' id = 'txtname'>");
response.end();
});
route.for("GET", "/finish", function(request, response){
response.writeHead(200, {"Content-Type": "text/plain"});
response.write("Goodbye");
response.end();
});
function onRequest(request, response) {
var pathname = url.parse(request.url).pathname;
console.log("Request for " + request.method + pathname +
" received.");
if(typeof(route.routes[request.method +
pathname])==='function'){
route.routes[request.method + pathname](request, response);
}else{
response.writeHead(404, {"Content-Type": "text/plain"});
response.end("this is the index page");
}
}

http.createServer(onRequest).listen(3000);
console.log("Server has started.");
console.log("Executing Node Success.");
console.log("Listening on port:3000 ");
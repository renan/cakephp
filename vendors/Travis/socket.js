// Load the net module to create a tcp server.
var net = require('net');

// Setup a tcp server
var server = net.createServer();

// Fire up the server bound to port 80 on localhost
server.listen(80, 'localhost');

// Put a friendly message on the terminal
console.log('TCP server listening on port 80 at localhost.');

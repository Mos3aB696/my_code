// https://attacomsian.com/blog/node-http-requests-using-request-module

const request = require("request");

// const options = {
//   url: "https://jsonplaceholder.typicode.com/todos/1",
//   method: "GET",
// };

// request(options, (err, res, body) => {
//   if (err) {
//     return console.log(err);
//   }
//   console.log(JSON.parse(body));
// });

// const options = {
//   url: "https://jsonplaceholder.typicode.com/users",
//   json: true,
//   body: {
//     name: "Mos3aB",
//     job: "Software Engineer",
//   },
// };

// request.post(options, (err, res, body) => {
//   if (err) return console.log(err);

//   console.log(body);
// });

request.delete(
  "https://jsonplaceholder.typicode.com/users/1",
  (err, res, body) => {
    if (err) return console.log(err);

    console.log("Status Code:", res.statusCode);
  }
);

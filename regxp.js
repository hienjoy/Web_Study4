var regxp_post = /^\d{5}$/;
console.log(regxp_post.test("12345"));

var regxp_tel = /^(02)-(\d{3}|\d{4})-\d{4}$/;
console.log(regxp_tel.test("02-2164-1234"));

var regxp_tel = /^(010)-\d{4}-\d{4}$/;
console.log(regxp_tel.test("010-1234-1234"));

var regxp_ID = /^[a-z0-9_]{4,20}$/;
console.log(regxp_ID.test("Hi1234"));

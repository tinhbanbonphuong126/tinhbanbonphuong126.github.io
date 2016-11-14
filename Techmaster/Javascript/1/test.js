var student = {
  firstName: "Ms",
  lastName: "Student",
  age: 20,
  say: function(){}
}
var teacher = {
  firstName: "Ms",
  lastName: "Teacher",
  age: 30,
  say: function(){}
}
var teacher = {
  firstName: "Mr",
  lastName: "Parent",
  age: 30,
  say: function(){}
}

var aboutMe = function(){
  // Code logic here
  console.log("-Tôi tên là " + this.firstName + " " + this.lastName + " Năm nay tôi " + this.age + " tuổi "+"<br>");
}

console.log("Test bài tập 7: <br>");

student.say = aboutMe;
student.say(); 
teacher.say = aboutMe;
teacher.say(); 
father.say = aboutMe;
father.say(); 
